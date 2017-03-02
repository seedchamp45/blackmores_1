<?php 

include('db.php');

$id = $mysqli->escape_string($_POST['id']);

if($DData = $mysqli->query("SELECT image FROM posts WHERE id='$id'")){

    $DRow = mysqli_fetch_array($DData);
	
	$DelImg = $DRow['image'];

    $DData->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

unlink("uploaded_images/$DelImg");

$mysqli->query("DELETE FROM posts WHERE id=$id") or die (mysqli_error());

$mysqli->query("DELETE FROM favip WHERE postid=$id") or die (mysqli_error());

?>