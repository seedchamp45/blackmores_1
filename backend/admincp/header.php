<?php session_start();?>
<?php if(!isset($_SESSION['adminuser'])){
	header("location:login.php");
}?>
<!DOCTYPE HTML>
<?php include ('../db.php');


if($squ = $mysqli->query("SELECT * FROM settings WHERE id='1'")){

    $settings = mysqli_fetch_array($squ);
	
	$name=$settings['siteurl'];

    $squ->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Flippy LinkShare - Admin Control Panel</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/colorbox.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kameron' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/nicEdit.js"></script>
<script>
$(document).ready(function(){
$(".blue2").colorbox({});
$(".red").colorbox({});
$(".preview").colorbox({});
})
</script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
new nicEditor().panelInstance('ptxt');
});

$("input[type=file]").filestyle({ 
     image: "images/choose-file.gif",
     imageheight : 22,
     imagewidth : 82,
     width : 250
 });
</script>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
<div class="headcontaint">
<div class="logo"><a href="index.html"><img src="../images/logo.png" width="264" height="49"></a></div>
<!--menu-->
<div class="menu">
		<ul>
		  <li><a href="index.php">Dashboard</a></li>             
          <li><a href="settings.php">Settings</a></li>  
			<li><a href="#">Manage</a>
                <ul>
                <li><a href="addnewcat.php">Add Categories</a></li>
                <li><a href="category.php">Manage Categories</a></li>
                <li><a href="posts.php">Manage Posts</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="comments.php">Manage Comments</a></li>
                </ul>
          </li>
          	<li><a href="admins.php">Admin</a></li>
            <li><a href="ads.php">Ads</a></li>
			<li><a href="#">Manage Pages</a>
                <ul>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="tms.php">Terms of Use</a></li>
                <li><a href="dmca.php">DMCA Policy</a></li>
				</ul>
           </li>
           <li><a href="../index.html" target="_blank">View Site</a></li>
		   <li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<!--menu-->
</div>
</header>
<div class="container">