<?php
print("start");
console.log('eiei');
$servername = "localhost";
$username = "rootBlackmores";
$password = "Champpseedd45";
$dbname = "blackmores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    

// Check connection
if ($conn->connect_error) {
    console.log('cannot connect');
}
else
{

    console.log('eiei');
    print("showwww");
} 



$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image eiei - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {


        if ($result = $conn->query("SELECT * FROM image_upload")) {

            /* determine number of rows result set */
             $row_cnt = $result->num_rows;

            printf("Result set has %d rows.\n", $row_cnt);

            /* close result set */
            

            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $tempname = $_FILES['fileToUpload']['name'];
            $CategoryWork = $_POST['categorywork'];
            $email = $_POST['email'];
            $parentName = $_POST['name_parent'];
            $username = $_POST['name_child'];      
            $telephone = $_POST['telephone'];

            

            $tz_object = new DateTimeZone('Asia/Bangkok');
            $datetime = new DateTime();
            $datetime->setTimezone($tz_object);
            $now = $datetime->format('Y\-m\-d\ h:i:s');




            $birthday = $_POST['birthday'];
            $convertBirthday = date("Y-m-d", strtotime($birthday));
            $NowDateTime = $datetime->format('Y-m-d');

            $age = DateTime::createFromFormat('Y-m-d', $convertBirthday, $tz_object)
                   ->diff(new DateTime('now', $tz))
                   ->y;
          
            $temp = explode(".", $_FILES["fileToUpload"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);

            $sql = "INSERT INTO image_upload (image_id, image_name, image, email, username, age, telephone, parent_name, birthday, upload_at)
            VALUES ('$row_cnt', '$CategoryWork', '$newfilename' ,'$email', '$username','$age', '$telephone', '$parentName', '$convertBirthday', '$now')";
            if (mysqli_query($conn, $sql)) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"upload/" . $newfilename)) {
                    echo "New record created successfullyyyyy";
                    echo"<script type=\"text/javascript\">
                document.location.href='http://blackmoresmystrongfamily.com/index.php'; 
            </script>";
                }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
            
        }

        
        // $sql = "INSERT INTO image_upload(`image_id`, `image_name`, `image`)
        // VALUES (2, 'Doe', 'johnexamplecom')";
        // // use exec() because no results are returned
        // $conn->exec($sql);


        // if (mysqli_query($conn, $sql)) {
        //     print( "New record created successfully")
        // } else {
        //     print( "Error: " )
        // }
        

     else {
        echo "Sorry, there was an error uploading your file eiei.";
    }
}





?>