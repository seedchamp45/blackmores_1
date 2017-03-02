<?php 
session_start();

include('db.php');

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

if($squ = $mysqli->query("SELECT * FROM settings WHERE id='1'")){

    $settings = mysqli_fetch_array($squ);
	
	$FbPage = $settings['fbpage'];
	
	$template = $settings['template'];

    $squ->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

//Ads

if($AdsSql = $mysqli->query("SELECT * FROM siteads WHERE id='1'")){

    $AdsRow = mysqli_fetch_array($AdsSql);
	
	$Ad1 = $AdsRow['ad1'];
	$Ad2 = $AdsRow['ad2'];

    $AdsSql->close();

}else{
	
     printf("Error: %s\n", $mysqli->error);
}

if(!isset($_SESSION['username'])){
	//Do Nothing
}else{
	
$Uname = $_SESSION['username'];

if($UserSql = $mysqli->query("SELECT * FROM users WHERE username='$Uname'")){

    $UserRow = mysqli_fetch_array($UserSql);

	$Uid = $UserRow['id'];
	
	$Uavatar = $UserRow['avatar'];

    $UserSql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

}

$id = $mysqli->escape_string($_GET['id']);

if($PostSql = $mysqli->query("SELECT * FROM posts WHERE id='$id'")){

   $PostRow = mysqli_fetch_array($PostSql);
   
   $ThisUser = $PostRow['uid'];
   
   $ThisCid = $PostRow['catid'];
   
   $ThisURL = $PostRow['url'];
   
   $mes_id = $PostRow['id'];
   
   $up = $PostRow['likes'];
   
   $long = $PostRow['description'];
   $strd = strlen ($long);
   if ($strd > 160) {
   $dlong = substr($long,0,160).'...';
   }else{
   $dlong = $long;
   }
   
   $PostSql->close();  
     
}else{
   
     printf("Error: %s\n", $mysqli->error);

}

//Tot Site Views
	$SiteHits = $settings['site_hits'];
	$SiteHits = $SiteHits + 1;
	$mysqli->query("UPDATE settings SET site_hits='$SiteHits' WHERE id='1'") or die(mysqli_error());
	
//Tot Views
	$Hits = $PostRow['hits'];
	$Hits = $Hits + 1;
	$Tot = $PostRow['tot'];
	$Tot = $Tot + 1;
	$mysqli->query("UPDATE posts SET hits='$Hits', tot='$Tot' WHERE id='$id'") or die(mysqli_error());	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $PostRow['title'];?> | <?php echo $settings['name']; ?></title>
<meta name="description" content="<?php echo $dlong; ?>" />
<meta name="keywords" content="<?php echo $settings['keywords']; ?>" />

<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>

<link href="templates/<?php echo $settings['template'];?>/css/style.css" rel="stylesheet" type="text/css">
<link href="templates/<?php echo $settings['template'];?>/css/colorbox.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/jquery.freeow.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".login-box").colorbox();
			})
</script>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-e476ca43-f674-a373-c6c3-24d25792782e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header>
<div class="top-bar">

<div class="logo-box"><a href="index.php"><img src="images/logo.png" width="210" height="49" alt="<?php echo $settings['name'];?>"></a></div><!--logo-box-->

</div><!--top-bar-->
<div id="second-bar">
<div id="menu-bar">
<nav id="menu">
<ul>
    <li class="hhas-sub"><a href="#"><img src="templates/<?php echo $settings['template'];?>/images/menu_button.png" width="27" height="24"></a>
    <ul class="clm_0">
    <li class="li-space">&nbsp;</li>
      	 <li class="Small-Title"><span>About Us</span></li>
         <li class="m-link"><a href="aboutus.html"><span>About Us</span></a></li>
         <li class="m-link"><a href="privacy.html"><span>Privacy Policy</span></a></li>
         <li class="m-link"><a href="tos.html"><span>Terms of Use</span></a></li>
         <li class="m-link"><a href="dmca.html"><span>DMCA Policy</span></a></li>
         <li class="m-link"><a href="contactus.html"><span>Contact Us</span></a></li>
     <li class="li-space">&nbsp;</li>
      	 <li class="Small-Title"><span>Connect With Us</span></li>
          <li class="socail-icons"><a href="<?php echo $settings['fbpage'];?>" target="_blank"><img src="templates/<?php echo $settings['template'];?>/images/fb.png" width="32" height="32" alt="facebook"></a></li>
         <li class="socail-icons"><a href="<?php echo $settings['twitter'];?>" target="_blank"><img src="templates/<?php echo $settings['template'];?>/images/twitter.png" width="32" height="32" alt="Twitter"></a></li>
         <li class="socail-icons"><a href="<?php echo $settings['google_plus'];?>" target="_blank"><img src="templates/<?php echo $settings['template'];?>/images/google_plus.png" width="32" height="32" alt="Google+"></a></li>
         <li class="socail-icons"><a href="<?php echo $settings['pinterest'];?>" target="_blank"><img src="templates/<?php echo $settings['template'];?>/images/pinterest.png" width="32" height="32" alt="Pinterest"></a></li>
         <li class="socail-icons"><a href="feeds.html"><img src="templates/<?php echo $settings['template'];?>/images/rss.png" width="32" height="32" alt="RSS"></a></li>
      </ul>      
   </li>
   
   	
   <li class="no-sub"><a href="index.html"><span>Everything</span></a></li>
   <li class="has-sub"><a href='#'><span>Categories</span></a>
      <ul class="clm_1">
         <li class="li-space">&nbsp;</li>
      	 <li class="Small-Title"><span>Brows by Categories</span></li>
         <?php
if($mCategories = $mysqli->query("SELECT * FROM categories ORDER BY cname ASC")){

    while ($mcRow = mysqli_fetch_array($mCategories)){
		$mUrl = $mcRow['cname'];
		$mUrl = preg_replace("![^a-z0-9]+!i", "-", $mUrl);
		$mUrl = strtolower($mUrl);
		
?>  
      	 <li class="m-link"><a href='cat-<?php echo $mcRow['id'];?>-<?php echo $mUrl;?>.html'><span><?php echo $mcRow['cname'];?></span></a></li>
<?php     
	}
$mCategories->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}
?>                     
      </ul>
       </li>
  	<li class="no-sub"><a href='likes.html'><span>Likes</span></a></li>
    <li class="no-sub"><a href='popular.html'><span>Popular</span></a></li>
       <li class="has-sub"><a href='#'><span>Search</span></a>
      <ul class="clm_3">
         <li class="li-space">&nbsp;</li>
     	<div class="sbox">
<form name="search" id="search" method="get" action="search.php">
<input type="text" tabindex="1" class="input" id="term" name="term" placeholder="Enter Keyword(s)" />

<input type="submit" tabindex="2" id="submit" class="btns" value="Search" />
</form>
</div><!--sbox-->  
      </ul>
       </li>
    <li class="no-sub"><a href='submit_new.html'><span>Submit New</span></a></li>
</ul>
</nav>

<nav id="menu-user">
<ul>
   <?php if(!isset($_SESSION['username'])){?>
   <li class="rno-sub"><a class="login-box" href="login.html"><span>Login</span></a></li>
   <li class="no-sub"><a href='register.html'><span>Register</span></a></li>
   <?php }else{ ?>
   <li class="rhas-sub"><a href="#"><span><?php echo $Uname;?></span></a>
   <ul class="clm_2">
   <li class="li-space">&nbsp;</li>
   <li class="m-link"><a href='profile-<?php echo $Uid;?>-<?php echo strtolower($Uname);?>.html'><span>Your Profile</span></a></li>
   <li class="m-link"><a href='your_posts.html'><span>Your Posts</span></a></li>
   <li class="m-link"><a href='likes.html'><span>Your Likes</span></a></li>
   <li class="m-link"><a href='edit_profile.html'><span>Edit Your Profile</span></a></li>
   </ul>
   </li>
   <li class="no-sub"><a href='logout.html'><span>Logout</span></a></li>
   <?php } ?>
</ul>
</nav>

</div><!--menu-bar-->
</div><!--second-bar-->
</header>
<div id="freeow" class="freeow freeow-top-right"></div>
<div class="container">