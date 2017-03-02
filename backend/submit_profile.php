<?php
session_start();

include('db.php');


if($_POST)
{	
	
	if(!isset($_SESSION['username'])){
	//Do Nothing
}else{
	
$Uname = $_SESSION['username'];

if($UserSql = $mysqli->query("SELECT * FROM users WHERE username='$Uname'")){

    $UserRow = mysqli_fetch_array($UserSql);

	$UPID = $UserRow['id'];
	
    $UserSql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

}
//
	if(!isset($_POST['uEmail']) || strlen($_POST['uEmail'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Please let us know your email adress.</div>');
	}
	
	$email_address = $_POST['uEmail'];
	
	if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  	// The email address is valid
	} else {
  		die('<div class="msg-error">Come on!! This is not a real email address.</div>');
	}
	
	
		
	$Email  			= $mysqli->escape_string($_POST['uEmail']); // Email
	$About              = $mysqli->escape_string($_POST['about']); // About
	
		
// Update info into database table.. do w.e!
		$mysqli->query("UPDATE users SET email='$Email', about='$About' WHERE id='$UPID'");
		
		
		die('<div class="msg-ok">Great, your profile has been updated.</div>');
		

   }else{
   		die('<div class="msg-error">There seems to be a problem. Please try again.</div>');
   } 

?>