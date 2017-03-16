<?php
include_once("db_config.php");
include_once("facebook_config.php");
  $image_id = $_POST['image_id'];
 // $image_id = $_POST['image_id'];
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

  $user_check = $db->query("SELECT oauth_id FROM facebook_user_like WHERE oauth_id=$oauth_id and image_id = '$image_id'");
  $user_check_count = mysqli_num_rows($user_check);

  if($user_check_count) :
      echo '<script language="javascript">';
        echo 'alert("ท่านได้โหวคภาพนี้ไปเรียบร้อย")';
      echo '</script>';
  else :
        
     $insert = $db->query("INSERT INTO `facebook_user_like` SET `oauth_id`='".$oauth_id."', `name`='".$user_information['name']."',`email`='".$user_information['email']."',`image_id`= '$image_id'");

    $insert_like = $db->query("UPDATE image_upload SET vote = vote + 0.5 WHERE image_id = '$image_id'");



  endif;
  // $query_user = $db->query("SELECT * FROM facebook_users WHERE oauth_id=$oauth_id");
  // $user_data = mysqli_fetch_assoc($query_user);


// echo"<script type=\"text/javascript\">
//                 document.location.href='http://blackmoresmystrongfamily.com'; 
//             </script>";
?>
