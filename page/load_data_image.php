<?php
   $image_id = $_POST['image_id'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blackmores";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

   //$image_id=1;
    // Check connection
    if ($conn->connect_error) {
      echo 'error';
    }
    
    $sql = "SELECT * FROM image_upload where image_id =".$image_id;
    
    $result = mysqli_query($conn,$sql);
    $rowdata = mysqli_fetch_assoc($result); 
   
    //print_r($rowdata);
     
    $image_id = $rowdata['image_id'];
    $name = $rowdata['image_name'];
    $age = $rowdata['age'];
    $username = $rowdata['username'];
    $image = $rowdata['image'];

    $arr = array(
                    'id' => $image_id,
                    'name' => $name,
                    'age' => $age,
                    'username' => $username,
                    'image' => $image
                );
       
    echo json_encode($arr);
     

?>

