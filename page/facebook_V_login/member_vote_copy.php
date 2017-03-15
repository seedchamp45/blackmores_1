<?php
include_once("db_config.php");
include_once("facebook_config.php");
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

  $db_check = $db->query("SELECT * FROM image_upload where age < 8");


  while($rowdata = mysqli_fetch_assoc($db_check)){
    $pic = $rowdata['image'];
    $username = $rowdata['username'];
    $vote = $rowdata['vote'];
    $age = $rowdata['age'];
    $image_id = $rowdata['image_id'];

    $user_check = $db->query("SELECT oauth_id FROM facebook_user_like WHERE oauth_id=$oauth_id and image_id = '$image_id'");
    $user_check_count = mysqli_num_rows($user_check);

  if($user_check_count) :
          echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 check-width" >
            <div class="thumbnail">
            <img src="page/upload/'. $pic .'" class=" img-responsive center-block" style="height: 200px; width: 100%; display: block;"/>
              <div class="caption " >
                   <div class="row thumbnail_gallery">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                         <br>
                       </div>
                       <div class="col-xs-12  col-sm-5 col-md-5 col-lg-5 text-left block_txt_gallery">
                          <div class="txt_gallery_detail">'. $username .'</div> 
                       </div>
                        <div class="col-xs-12  col-sm-3 col-md-3 col-lg-3 block_txt_gallery">
                           <div class="txt_gallery_detail">'. $age .' ปี</div> 
                       </div>
                        <div class="col-xs-12 col-sm-4 col-md-4  col-lg-4 text-right block_txt_gallery">
                            <div class="txt_gallery_detail inline" value="'. $rowdata['image_id'].'"><img src="images/gallery/star_0.png" class="img-responsive img_inline"> <div class="vote_gallery">' .$vote .' โหวต</div> </div> 
                       </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                         <br>
                       </div>
                   </div>

              </div>

            <div class="center-block text-center row_h_1">
                
                    <button type="submit" id="" class="btn btn-default1  center-block txt_bu_gallery" style = "opacity: 0;" data-target=".bs-example-modal-lg" value="'. $rowdata['image_id'].'">โหวตเลย</button>
               </div>
        </div>
       </div>';
  else :
        
    echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 check-width" >
            <div class="thumbnail">
            <img src="page/upload/'. $pic .'" class=" img-responsive center-block" style="height: 200px; width: 100%; display: block;"/>
              <div class="caption " >
                   <div class="row thumbnail_gallery">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                         <br>
                       </div>
                       <div class="col-xs-12  col-sm-5 col-md-5 col-lg-5 text-left block_txt_gallery">
                          <div class="txt_gallery_detail">'. $username .'</div> 
                       </div>
                        <div class="col-xs-12  col-sm-3 col-md-3 col-lg-3 block_txt_gallery">
                           <div class="txt_gallery_detail">'. $age .' ปี</div> 
                       </div>
                        <div class="col-xs-12 col-sm-4 col-md-4  col-lg-4 text-right block_txt_gallery">
                            <div class="txt_gallery_detail inline" value="'. $rowdata['image_id'].'"><img src="images/gallery/star_0.png" class="img-responsive img_inline"> <div class="vote_gallery">' .$vote .' โหวต</div> </div> 
                       </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                         <br>
                       </div>
                   </div>

              </div>

            <div class="center-block text-center row_h_1">
                
                    <button type="submit" id="select_image" class="btn btn-default1  center-block txt_bu_gallery select_image"  data-target=".bs-example-modal-lg" value="'. $rowdata['image_id'].'">โหวตเลย</button>
               </div>
        </div>
       </div>';



  endif;
  // $query_user = $db->query("SELECT * FROM facebook_users WHERE oauth_id=$oauth_id");
  // $user_data = mysqli_fetch_assoc($query_user);


// echo"<script type=\"text/javascript\">
//                 document.location.href='http://blackmoresmystrongfamily.com'; 
//             </script>";
?>
