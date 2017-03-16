<script>

$(function(){

    $(".select_image").click(function(){

       // $("#name_pic").val("2");
      load_data_image(this.value);
        //vote_data_image(this.value);
     });

    $(".select_image_face").click(function(){

       // $("#name_pic").val("2");
      alert("กรุณา log in ผ่าน facebook เพื่อโหวต");
        //vote_data_image(this.value);
     });
     
    function load_data_image(id_image){
        //ajax

        $.ajax( 
        { 
            url:'page/load_data_image.php',
            data:{'image_id': id_image},
            type:'POST',
            dataType: 'json',
            success:calback,
            error: ajaxError
        });
        //ดึงค่าสำเร็จ
        function calback(result){
           // ใส่ค่า

    
            $(".name_value").html(result.username);
            $(".age_value").html(result.age);
            $(".vote_value").html(result.vote);
            $(".title_value").html(result.name);
            $(".image_id_value").val(result.id);
           
            //alert($(".image_id_value").html(result.id););
           
            $(".image_value").attr("src","page/upload/"+result.image);
             //โชว์ popup
            $($(".select_image").attr("data-target")).modal("show");
            
        }
        
        function ajaxError() {
            alert("error");                          
        }
    }

    $(".image_id_value").click(function(){
      var e = {
        method: "feed",
        link: "http://blackmoresmystrongfamily.com",
        picture: "http://w3lessons.info/logo_large.png",
        name: "Blackmore My Strong Family",
        caption: 'http://blackmoresmystrongfamily.com',
        description: "Blackmore My Strong Family - ออกแบบฮีโร่ โชว์สตรองให้โลกรู้"
        };
      FB.ui(e, function(t) {
        vote_data_image(this.value);
    
      })
        
      //vote_data_image(this.value);
        //vote_data_image(this.value);
    });

    function vote_data_image(id_image){
        //ajax

        $.ajax( 
        { 
            url:'http://blackmoresmystrongfamily.com/page/facebook_V_login/member_vote.php',
            data:{'image_id': id_image},
            type:'POST',
            success: function(){

            }
        });
    }


    function shareOnFB() {
    var e = {
        method: "feed",
        link: "http://blackmoresmystrongfamily.com",
        picture: "http://w3lessons.info/logo_large.png",
        name: "W3lessons - PHP, MYSQL, HTML5, CSS3, jQuery, Ajax, Facebook Style Scripts",
        caption: 'w3lessons.info',
        description: "w3lessons.info is a programming blog maintained by Karthikeyan K. Tutorials focused on Programming, Jquery, Ajax, PHP,HTML5, CSS3, Web Design  and MySQL"
    };
    FB.ui(e, function(t) {
        alert("โหวต");
    })
    }
    
    });




</script>


<?php
include_once("facebook_V_login/db_config.php");
include_once("facebook_V_login/facebook_config.php");



  $db_check = $db->query("SELECT * FROM image_upload where age < 8");
if(!isset($_SESSION['fb_access_token'])) : 


  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    

    $pic = $rowdata['image'];

    $username = $rowdata['username'];
    $vote = $rowdata['vote'];

    $age = $rowdata['age'];
    $image_id = $rowdata['image_id'];
  //echo '<li> <img src="./images/home_body_left.png" class=" img-responsive center-block"/> '.$id.') <strong>'.$name.'</strong> : '.$message.'</li>';  

    echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" >
            <div class="thumbnail">
            <img src="page/upload/'. $pic .'" value = "page/upload/'. $pic .'" class=" img-responsive center-block" style="height: 200px; width: 100%; display: block;"/>
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
                
                    <button type="submit" id="select_image" class="btn btn-default1  center-block txt_bu_gallery select_image_face"  data-target=".bs-example-modal-lg" value="'. $rowdata['image_id'].'">โหวตเลย</button>
               </div>
        </div>
       </div>';
     }

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

   $oauth_id = $user["id"];

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
            <img src="page/upload/'. $pic .'"  value = "page/upload/'. $pic .'" class=" img-responsive center-block" style="height: 200px; width: 100%; display: block;"/>
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
                
                    <button type="submit" id="" class="btn btn-default1  center-block txt_bu_gallery" name = "page/upload/'. $pic .'" style = "opacity: 0;" data-target=".bs-example-modal-lg" value="'. $rowdata['image_id'].'">โหวตเลย</button>
               </div>
        </div>
       </div>';
  else :
        
    echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 check-width" >
            <div class="thumbnail">
            <img src="page/upload/'. $pic .'" value = "page/upload/'. $pic .'" class=" img-responsive center-block" style="height: 200px; width: 100%; display: block;"/>
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
}

  endif;
  // $query_user = $db->query("SELECT * FROM facebook_users WHERE oauth_id=$oauth_id");
  // $user_data = mysqli_fetch_assoc($query_user);


// echo"<script type=\"text/javascript\">
//                 document.location.href='http://blackmoresmystrongfamily.com'; 
//             </script>";
?>
