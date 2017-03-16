<?php
include_once("facebook_config.php");
if(!isset($_SESSION['fb_access_token'])) : 
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email'];
	$redirect = 'http://blackmoresmystrongfamily.com/page/facebook_V_login/fb-callback.php';
	$loginUrl = $helper->getLoginUrl($redirect,$permissions);
	// echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
else :
	header('Location: member.php');
endif;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login with Facebook API SDK v5 in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="col-md-2">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- header_responsive_ads -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-9665679251236729"
         data-ad-slot="9239985429"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>
<div class="col-md-8">
    <div align="center" class="profile clearfix">
        <div>
          <h2>Login with Facebook API SDK v5 in PHP</h2>
          <p>Demo <a href="http://www.mostlikers.com">Tutorial </a> - mostlikers blog <a target="_blank" href="http://www.mostlikers.com">mostlikers.com</a></p>
          </div>                            
        <div><br><br>
            <a class="btn btn-primary" href="<?=htmlspecialchars($loginUrl);?>"><i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook </a>
        </div>
    </div>
</div>
<div class="col-md-2">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- header_responsive_ads -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-9665679251236729"
         data-ad-slot="9239985429"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>

