<?php
session_start();

include("db.php");

if($squ = $mysqli->query("SELECT * FROM settings WHERE id='1'")){

    $settings = mysqli_fetch_array($squ);

    $squ->close();
	
}else{
    
	 printf("Error: %s\n", $mysqli->error);
}

$ip=$_SERVER['REMOTE_ADDR'];

if($_POST['id'])
{
$id=$_POST['id'];

//User Details

if(!isset($_SESSION['username'])){ ?>
<script>
$("#freeow").freeow("Mmmm..", "Please login or register to like this post", {
classes: ["smokey", "error"],
autoHide: true
});
</script>

<?php 

//disply results
$result=$mysqli->query("select likes from posts where id='$id'");
$row=mysqli_fetch_array($result);
$up_value=$row['likes'];
echo '<img class="like-imge" src="templates/'.$settings['template'].'/images/like.png" width="16" height="16"> Like This Post '.$up_value;


}else{
	
$Uname = $_SESSION['username'];

if($UserSql = $mysqli->query("SELECT * FROM users WHERE username='$Uname'")){

    $UserRow = mysqli_fetch_array($UserSql);

	$Uid = $UserRow['id'];

    $UserSql->close();
}else{
	
     printf("Error: %s\n", $mysqli->error);

}

//End User Details


$id = $mysqli->escape_string($id);

//Verify IP address in favip table

$user_sql=$mysqli->query("select uid from favip where postid='$id' and uid='$Uid'");

$count=mysqli_num_rows($user_sql);

if($count==0)
{
// Update Vote.
$sql = $mysqli->query("update posts set likes=likes+1 where id='$id'");

// Insert IP address and Message Id in favip table.
$sql_in = "insert into favip (postid,ip, uid) values ('$id','$ip', '$Uid')";
$mysqli->query( $sql_in);
?>
<script>
$("#freeow").freeow("Cool..", "You like this post", {
classes: ["smokey"],
autoHide: true
});
</script>

<?php
//disply results
$result=$mysqli->query("select likes from posts where id='$id'");
$row=mysqli_fetch_array($result);
$up_value=$row['likes'];
echo '<img class="like-imge" src="templates/'.$settings['template'].'/images/liked.png" width="16" height="16"> Unlike This Post '.$up_value;

}else {

// Update Vote.
$sql = $mysqli->query("update posts set likes=likes-1 where id='$id'");


// Insert IP address and Message Id in favip table.
$sql_in = "DELETE FROM favip WHERE postid='$id'";
$mysqli->query( $sql_in);	


?>
<script>
$("#freeow").freeow("Oki..", "You just unliked this post", {
classes: ["smokey"],
autoHide: true
});
</script>
<?php
//disply results
$result=$mysqli->query("select likes from posts where id='$id'");
$row=mysqli_fetch_array($result);
$up_value=$row['likes'];
echo '<img class="like-imge" src="templates/'.$settings['template'].'/images/like.png" width="16" height="16"> Like This Post '.$up_value;

}

}

}
?>