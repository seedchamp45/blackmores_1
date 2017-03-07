<?php
print("start");
console.log('eiei');
$servername = "localhost";
$username = "root";
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $tempname = $_FILES['fileToUpload']['name'];
        $CategoryWork = $_POST['categorywork'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $age = $_POST['age'];
        $telephone = $_POST['telephone'];
        $sql = "INSERT INTO image_upload (image_id, image_name, image, email, username, age, telephone)
        VALUES (5, '$CategoryWork', '$tempname' ,'$email', '$username','$age', '$telephone')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfullyyyyy";

            echo"<script type=\"text/javascript\">
                document.location.href='http://localhost:8888/v4_Blackmores/index.php'; 
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        echo "lasttttttttttttt";

        // $sql = "INSERT INTO image_upload(`image_id`, `image_name`, `image`)
        // VALUES (2, 'Doe', 'johnexamplecom')";
        // // use exec() because no results are returned
        // $conn->exec($sql);


        // if (mysqli_query($conn, $sql)) {
        //     print( "New record created successfully")
        // } else {
        //     print( "Error: " )
        // }
        

    } else {
        echo "Sorry, there was an error uploading your file eiei.";
    }
}





?>