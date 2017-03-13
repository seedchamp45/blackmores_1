<?php
include_once("db_config.php");
include_once("facebook_config.php");
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());
// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();
// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
echo '<pre>'; print_r($tokenMetadata);
// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId("1644999395805431"); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();
if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());
  echo '<pre>'; print_r($accessToken->getValue());
}
$_SESSION['fb_access_token'] = (string) $accessToken;





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


// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.


?>