<?php 

    $image_id = $_POST['image_id'];
    
    $servername = "localhost";
    $username = "rootBlackmores";
    $password = "Champpseedd45";
    $dbname = "blackmores";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

   //$image_id=1;
    // Check connection
    if ($conn->connect_error) {
      echo 'error';
    }

    $result = mysqli_query($conn,$sql);
    $rowdata = mysqli_fetch_assoc($result); 
   


    $sql = "UPDATE image_upload SET vote = vote + 0.5 WHERE image_id = ".$image_id;

    if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    // if (mysqli_query($conn, $sql)) {
    //     echo "success"
    // }

?>
  


       
  

