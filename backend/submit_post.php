<?php
session_start();

include('db.php');

//User Details

if(!isset($_SESSION['username'])){
	//Do Nothing
}else{
$Uname = $_SESSION['username'];

if($UserSql = $mysqli->query("SELECT * FROM users WHERE username='$Uname'")){

    $UserRow = mysqli_fetch_array($UserSql);

	$Uid = $UserRow['id'];

    $UserSql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

}

//Upload Details

$UploadDirectory	= 'uploaded_images/';
 

if (!@file_exists($UploadDirectory)) {
	//destination folder does not exist
	die("Make sure Upload directory exist!");
}

if($_POST)
{		
	if(!isset($_POST['category']) || strlen($_POST['category'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Please select a category.</div>');
	}
	
	if(!isset($_FILES['mFile']))
	{
		//required variables are empty
		die('<div class="msg-error">Please add a image</div>');
	}
	
	if($_FILES['mFile']['error'])
	{
		//File upload error encountered
		die(upload_errors($_FILES['mFile']['error']));
	}
	
	if(!isset($_POST['mLink']) || strlen($_POST['mLink'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Please add a URL.</div>');
	}
	
	$CheckUrl = $_POST['mLink'];

	if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $CheckUrl)) {
  		//do nothing
	}else {
  	
	die('<div class="msg-error">URL is not valid.</div>');
	
	}
	
	if(!isset($_POST['mName']) || strlen($_POST['mName'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Please add a title.</div>');
	}
	
		
	if(!isset($_POST['disc']) || strlen($_POST['disc'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Please add a small description.</div>');
	}
	
		
	$FileName			= strtolower($_FILES['mFile']['name']); //uploaded file name
	$ImageExt			= substr($FileName, strrpos($FileName, '.')); //file extension
	$FileType			= $_FILES['mFile']['type']; //file type
	$FileSize			= $_FILES['mFile']["size"]; //file size
	$RandNumber   		= rand(0, 9999999999); //Random number to make each filename unique.
	$Date		        = date("F j, Y");
	
	$FileTitle			= $mysqli->escape_string(htmlentities($_POST['mName'])); // file title
	$Category           = $mysqli->escape_string($_POST['category']); // category 
	$SubmitURL          = $mysqli->escape_string($_POST['mLink']); // afflite url
	$Description        = $mysqli->escape_string(htmlentities($_POST['disc'])); // description
		
		switch(strtolower($FileType))
	{
		//allowed file types
		case 'image/png': //png file
		case 'image/gif': //gif file 
		case 'image/jpeg': //jpeg file
		case 'image/bmp': //bmp file
			break;
		default:
			die('Unsupported Image File!'); //output error
	}

  
	//Image File Title will be used as new File name
	$NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($FileTitle));
	$NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;

 //Rename and save uploded image file to destination folder.
   if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
   {
	
		
// Insert info into database table.. do w.e!
		$mysqli->query("INSERT INTO posts(image, url, title, description, catid, uid, date) VALUES ('$NewFileName','$SubmitURL','$FileTitle','$Description','$Category','$Uid','$Date')");
		
		die('<div class="msg-ok">Thank you for posting.</div>');
		
   
   }else{
   		die('<div class="msg-error">There seems to be a problem. please try again.</div>');
   } 
}

function upload_errors($err_code) {
	switch ($err_code) { 
        case UPLOAD_ERR_INI_SIZE: 
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini'; 
        case UPLOAD_ERR_FORM_SIZE: 
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form'; 
        case UPLOAD_ERR_PARTIAL: 
            return 'The uploaded file was only partially uploaded'; 
        case UPLOAD_ERR_NO_FILE: 
            return 'No file was uploaded'; 
        case UPLOAD_ERR_NO_TMP_DIR: 
            return 'Missing a temporary folder'; 
        case UPLOAD_ERR_CANT_WRITE: 
            return 'Failed to write file to disk'; 
        case UPLOAD_ERR_EXTENSION: 
            return 'File upload stopped by extension'; 
        default: 
            return 'Unknown upload error'; 
    } 
} 
?>