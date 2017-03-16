<?php
include_once("db_config.php");
include_once("facebook_config.php");
if(!isset($_SESSION['fb_access_token'])) :
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email'];
    $redirect = 'http://blackmoresmystrongfamily.com/page/facebook_V_login/fb-callback.php';
    $loginUrl = $helper->getLoginUrl($redirect,$permissions);
    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
else :
  $user_token = $_SESSION['fb_access_token'];
  try {
    $response = $fb->get('/me?fields=id,name,email,birthday,gender,picture,cover,link',$user_token);
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage(); exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage(); exit;
  }
  $user = $response->getGraphUser();
  $profile = $user->getPicture();
  $oauth_id = $user["id"];
  $user_information  = array(
    'name'    => $user["name"],
    'email'   => $user["email"],
    'gender'  => $user["gender"],
    'picture' => $user['picture']['url'],
    'link'    => $user["link"],
    'cover'   => $user['cover']['source']
  );

  $user_check = $db->query("SELECT oauth_id FROM facebook_users WHERE oauth_id=$oauth_id");
  $user_check_count = mysqli_num_rows($user_check);
  if($user_check_count) :
    $update =$db->query("UPDATE `facebook_users` SET `name`='".$user_information['name']."',`email`='".$user_information['email']."',`gender`='".$user_information['gender']."',`picture`='".$user_information['picture']."',`link`='".$user_information['link']."',`cover`='".$user_information['cover']."' WHERE oauth_id ='".$oauth_id."'");
  else :
    $insert = $db->query("INSERT INTO `facebook_users` SET `oauth_id`='".$oauth_id."', `name`='".$user_information['name']."',`email`='".$user_information['email']."',`gender`='".$user_information['gender']."',`picture`='".$user_information['picture']."',`link`='".$user_information['link']."',`cover`='".$user_information['cover']."'");
  endif;
  $query_user = $db->query("SELECT * FROM facebook_users WHERE oauth_id=$oauth_id");
  $user_data = mysqli_fetch_assoc($query_user);
endif;

echo"<script type=\"text/javascript\">
                document.location.href='http://blackmoresmystrongfamily.com'; 
            </script>";
?>
<br> 
<!DOCTYPE html>
<html>
<head>
  <title>Login with Facebook API SDK v5 in PHP</title>
  <link rel="stylesheet" href="style.css">
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
    <div class="profile clearfix">
        <div align="center">
          <h2>Login with Facebook API SDK v5 in PHP</h2>
          <p>Demo <a href="http://www.mostlikers.com">Tutorial </a> - mostlikers blog <a target="_blank" href="http://www.mostlikers.com">mostlikers.com</a></p>
          </div>                            
        <div class="image img-cover">
            <img src="<?=$user_data['cover']?>" class="">
        </div>                            
        <div class="user clearfix">
            <div class="avatar">
                <img src="http://graph.facebook.com/<?=$user_data['oauth_id'];?>/picture?type=large" class="img-thumbnail img-profile">
            </div>                                
            <h2><a target="_blank" href="<?=$user_data['link']?>"><?=$user_data["name"];?></a></h2>                                
            <div class="actions">
                <div class="btn-group">
                    <button class="btn btn-default btn-sm tip btn-responsive"><span class="glyphicon glyphicon-plus glyphicon glyphicon-white"></span> Friends</button>
                    <button class="btn btn-default btn-sm tip btn-responsive"><span class="glyphicon glyphicon-envelope glyphicon glyphicon-white"></span> Message</button>
                </div>
            </div>                                                                                                
        </div>                          
        <div class="info">
            <p><span class="glyphicon glyphicon-envelope"></span> <span class="title">Email :</span>  <?=$user_data["email"];?></p>                                
        </div> 
         <p align="center"><a class="btn btn-primary" href="logout.php"><i class="fa fa-facebook" aria-hidden="true"></i> Logout Facebook </a></p>
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
<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        if (window.history && history.pushState) {
            window.history.pushState("", document.title, window.location.pathname);
        } else {
            // Prevent scrolling by storing the page's current scroll offset
            var scroll = {
                top: document.body.scrollTop,
                left: document.body.scrollLeft
            };
            window.location.hash = '';
            // Restore the scroll offset, should be flicker free
            document.body.scrollTop = scroll.top;
            document.body.scrollLeft = scroll.left;
        }
    }
</script>
<style type="text/css">
  
body{margin-top:20px;}

.profile {
  width: 100%;
  position: relative;
  background: #FFF;
  border: 1px solid #D5D5D5;
  padding-bottom: 5px;
  margin-bottom: 20px;
}

.profile .image {
  display: block;
  position: relative;
  z-index: 1;
  overflow: hidden;
  text-align: center;
  border: 5px solid #FFF;
}

.profile .user {
  position: relative;
  padding: 0px 5px 5px;
}

.profile .user .avatar {
  position: absolute;
  left: 20px;
  top: -85px;
  z-index: 2;
}

.profile .user h2 {
  font-size: 16px;
  line-height: 20px;
  display: block;
  float: left;
  margin: 75px 0px 0px 15px;
  font-weight: bold;
}

.profile .user .actions {
  float: right;
}

.profile .user .actions .btn {
  margin-bottom: 0px;
}

.profile .info {
  float: left;
  margin-left: 20px;
}

.img-profile{
    height: 160px;
    width: 160px;
}

.img-cover{
    left: 0;
    overflow: hidden;
    display: block;
    position: relative;
    text-decoration: none;
    height: 314px;
}

@media (max-width: 768px) {
  .btn-responsive {
    padding:2px 4px;
    font-size:80%;
    line-height: 1;
    border-radius:3px;
  }
}
</style>