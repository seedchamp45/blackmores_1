<?php

include_once("facebook_V_login/facebook_config.php");
if(!isset($_SESSION['fb_access_token'])) : 
  $helper = $fb->getRedirectLoginHelper();
  $permissions = ['email'];
  $redirect = 'http://blackmoresmystrongfamily.com/page/facebook_V_login/fb-callback.php';
  $loginUrl = $helper->getLoginUrl($redirect,$permissions);

  $class = 'hidden';
  $classlogin = 'show';
  // echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
else :
  
  $classlogin = 'hidden';
  $class = 'show'; 
endif;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Load results from Database</title>



<style type="text/css">
.wrapper {width: 400px;margin: 10px auto;font-family: Georgia, "Times New Roman", Times, serif;}
.wrapper > ul#results li{ margin: 1px 0; background: #f9f9f9; padding: 20px; list-style: none;}
button {padding: 8px 20px;background: #fbfbfb;border: 1px solid #ddd;border-radius: 4px;height: 37px;min-width: 130px;}
button:hover, button:active, button:focus{background: #f3f3f3;outline: none;}

.thumbnail .caption {
    padding: 0px;
    background-color: #515252;
    color: #fff;
    size: 10px;
}

.txt_gallery{
    top:50%;
    margin-top: 2px; 
}
.txt_box_gallery{
    top:100%;
        
}

.hidden{
    visibility="hidden";
}
.show{
    visibility="visible";
}

.name_gallery{
    text-align: left;
    width: 100%;
    display: inline;
    
}

.old_gallery{
    text-align: center;
    display: inline;
}
/*
.vote_gallery{
    text-align: right;
     display: inline;
}*/

.title_gallery{
    display: inline;
    width: 100%;
}

.btn-default1 {
    color: #333;
    background-color: #fff;
    background-image: url("images/button_ok.png");
    border-color: #ccc;
    width: 180px;
    height: 48px;
  }
  .btn-default1:focus,
  .btn-default1.focus {
    color: #333;
    background-image: url("images/button_ok.png");
    border-color: #8c8c8c;
  }
  .btn-default1:hover {
    color: #333;
   
      background-image: url("images/button_ok.png");
    border-color: #adadad;
  }
  .btn-default1:active,
  .btn-default1.active,
  .open > .dropdown-toggle.btn-default1 {
    color: #333;
      background-image: url("images/button_ok.png");
    border-color: #adadad;
  }
  .btn-default1:active:hover,
  .btn-default1.active:hover,
  .open > .dropdown-toggle.btn-default1:hover,
  .btn-default1:active:focus,
  .btn-default1.active:focus,
  .open > .dropdown-toggle.btn-default1:focus,
  .btn-default1:active.focus,
  .btn-default1.active.focus,
  .open > .dropdown-toggle.btn-default1.focus {
    color: #333;
    
      background-image: url("images/button_ok.png");
    border-color: #8c8c8c;
  }
  .btn-default1:active,
  .btn-default1.active,
  .open > .dropdown-toggle.btn-default1 {
    background-image: none;
  }
  .btn-default1.disabled:hover,
  .btn-default1[disabled]:hover,
  fieldset[disabled] .btn-default1:hover,
  .btn-default1.disabled:focus,
  .btn-default1[disabled]:focus,
  fieldset[disabled] .btn-default1:focus,
  .btn-default1.disabled.focus,
  .btn-default1[disabled].focus,
  fieldset[disabled] .btn-default1.focus {
    background-color: #fff;
    border-color: #ccc;
  }
  .btn-default1 .badge {
    color: #fff;
    background-color: #333;
  }
    
  
  .margin_left_5{
       margin-left: 0.5em;
  }
  .margin_right_5{
       margin-right: 2px;
  }


  /*gallery*/
@media (min-width: 768px){
    .modal-dialog {
        width: 80%;
       /* margin: 30px auto;*/
    }

    .check-width
    {
        width: 45%;
      }
}
/*gallery*/
.des_img{
    background-image: url("images/gallery/bg_pop_gallery.jpg");

    -webkit-background-size: 100% 100%;           /* Safari 3.0 */
     -moz-background-size: 100% 100%;           /* Gecko 1.9.2 (Firefox 3.6) */
       -o-background-size: 100% 100%;           /* Opera 9.5 */
          background-size: 100% 100%;
}

@media screen and (min-device-width: 481px) and (max-device-width: 800px) { 
    /* STYLES HERE */
      .check-width
    {
        width: 120pc;
        height: 120px;
      }

      .footer-pic
    {
      width: 100%; height: 100px background-repeat: no-repeat; margin-bottom: 0;
    }
}

@media (min-width: 992px){
    .footer-pic
    {
      width: 100%; height: 200px background-repeat: no-repeat; margin-bottom: 0;
    }

      .check-width
    {
        width: 40%;
      }
}


@media (min-width: 992px){

    .footer-pic
    {
      width: 100%; height: 300px background-repeat: no-repeat; margin-bottom: 0;
    }


      .check-width
    {
        width: 40%;
      }
}




@media (min-width: 1200px){
  
      .footer-pic
    {
      width: 100%; height: 400px background-repeat: no-repeat; margin-bottom: 0;
    }

      .check-width
    {
        width: 30%;
      }
}

@media (min-width: 1440px){

      .footer-pic
    {
      width: 100%; height: 500px background-repeat: no-repeat; margin-bottom: 0;
    }

      .check-width
    {
        width: 25%;
      }

}

@media (min-width: 1920px){
  
      .check-width
    {
        width: 20%;
      }
}




.dashed_line{
    display: inline;
    border-bottom:  dashed 1px #333;
}


.dashed_line2{
    display: inline;
    border-bottom:  dashed 1px #333;
    margin-left: 25px;
    
}


.vcenter {
    display: inline-block;
    vertical-align: middle;
    float: none;
}




.modal-header {
    padding: 10px;
    border-bottom: 0px solid #e5e5e5;
}
.title_txt_gallery{
    height:3.5em;
}

.row_h_1{
     margin-top:1.5em; 
     margin-left: 25px;
     margin-right: 25px;
}

.row_h_2{
     margin-top:1.7em; 
     margin-bottom:1em;
}
.row_h_1_em{
   
     margin-bottom:1em;
}

.inline{
    display: inline;
}

.inline {
    display: inline-block;
     
    margin-right: auto;
    margin-left: auto;
}

.img_inline{
    display: inline;
}

.hero {
  background-color: #2ba6cb;
  padding: 0 90px;
}

.centered  {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}




.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555;
    cursor: default;
    background-color: rgba(255, 255, 255, 0);
    border: 0px solid #ddd;
    border-bottom-color: transparent;
}
    
.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
  border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
  margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #bce8f1;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
  background-color: #ddd;
  border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
  color: #555;
  background-color: #fff;
  border-color: #ddd;
  border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}




.panel {
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
/*
.full_bg{
    position: fixed;
    top: 0;
    left: 0;
    min-width: 90%;
    min-height: 90%;
    height: 2500px;
    z-index: -99;
    background: url(images/winner/bg_winner2.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}*/

.panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.panel-default > .panel-heading {
    color: #333;
   background-color: rgba(255, 255, 255, 0); 
    border-color: #ddd;
}

.icon_green_winner {
   background: url(images/winner/bar_Green.png);
   min-width: 20%;
    min-height: 20%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  
}


.icon_blue_winner {
   background: url(images/gallery/bar_blue.png);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    width: 355px;
   height: 145px;
}

.icon_yellow_winner {
   background: url(images/winner/bar_yellow.png);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    width: 370px;
    height: 145px;
}

.h_b{
    height: 145px;
}

.icon_purple_winner {
   background: url(images/winner/bar_purple.png);
   min-width: 20%;
    min-height: 20%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a, .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover, .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
    color: #555;
    background-color: rgba(255, 255, 255, 0);
     border-color: rgba(255, 255, 255, 0); 
    border-bottom-color: transparent;
}

.nav-tabs.centered > li, .nav-pills.centered > li {
    float:inherit;
    display:inline-block;
    display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;
}

.ul-center{
  margin:0;
  padding:0;
  clear:both;
  text-align:center;
}
.ul-center li{
  display:inline-block;
  padding:10px 20px;
  margin:0;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a, .with-nav-tabs.panel-default .nav-tabs > .open > a:hover, .with-nav-tabs.panel-default .nav-tabs > .open > a:focus, .with-nav-tabs.panel-default .nav-tabs > li > a:hover, .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #000;
    background-color: rgba(0, 0, 0, 0);
    border-color: transparent;
}

.thumbnail_gallery{
    padding-left: 4px;
    padding-right: 4px;
    margin-left: 0px;
    margin-right: 0px;
}

.block_txt_gallery{                                                  
    padding-left: 2px;
    padding-right: 5px;
}





.txt_bu_gallery{
    font-family: "db_helvethaica_x";
    color: white;
    font-weight: bold;  
    font-size: 2em;
}

.txt_menu_age_8_gallery{
    font-family: "db_helvethaica_x";
    color: orange;
    font-weight: bold;  
    font-size: 1.8em;
    text-shadow: 1px 1px #000;
}

.txt_menu_age_more_8_gallery{
    font-family: "db_helvethaica_x";
    color: #058093;
    font-weight: bold;  
    font-size: 1.8em;
    text-shadow: 1px 1px #fff;
}

.text_title_gallery{
    margin-top: 5em;
    font-family: "db_helvethaica_x";
    color: #414042;
    font-weight: bold;  
    font-size: 1.5em;
    display: inline;
}

.text_title_warn_gallery{
    font-family: "db_helvethaica_x";
    color: #1677BC;
    font-weight: bold;  
    font-size: 1.5em;
    display: inline;
}

.text_title_gallery_pop_value{
    font-family: "db_helvethaica_x";
    color: #000;
    font-weight: bold;  
    font-size: 1.5em;
    display: inline;
}

.text_title_gallery_pop{
     font-family: "db_helvethaica_x";
    color: #1677BC;
    font-weight: bold;  
    font-size: 1.7em;
    display: inline;
}



.vote_gallery{
    display: inline;
    margin-left: 0.4em;
}

.col-centered{
    float: none;
    margin: 0 auto;
}

abbr[title2] {
    color: #1677BC;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 0px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.bg_winner{
    background-image: url("images/gallery/bg_winner.png");
   background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: center top;
                margin-right: -15%;
                margin-left: -18%;
                margin-top: 3%;
                    margin: auto;
}

.panel-body {
    padding: 30px;
}
ul.nav-tabs {
  text-align: center;
}
ul.nav-tabs li {
  float: none;
  display: inline-block;
}

.c_h{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

                      .background-main-rule
            {
             background: url(images/newBackground.png) no-repeat center top local; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100%;
            margin-top: -300px;
           
                background-attachment: fixed;

            }

            .facebook-pic
            {
             background: url(images/facebook.png) no-repeat center top local; 
              background-size: 100% 100%;
              width: 20%; margin-left: 40%; padding-top: -50 px;
    
            }

            .bar-yellow
            {
              width: 300px; margin-top: -50px;
            }

            .bar-blue
            {
              width: 300px; margin-top: -50px; margin-left: -37px;
            }

         @media (max-width: 768px){
                    .show-case-pic
            {
                margin-top: 300px;
            }

            .bar-yellow
            {
                width: 150px;
            }
            .bar-blue
            {
                width: 150px; margin-left: -37px;
            }
      

            }

                  @media screen and (min-device-width: 481px) and (max-device-width: 768px){
                .screen-short
                {
                  margin-top: 300px !important;
                }

                .facebook-pic
                {
                  width: 100% !important;
                }
              }
            

</style>


</head>
<body>
<div class="background-main-rule">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="screen-short">
    <div class="container">
  
        <div class="row">
            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                <img src="images/gallery/showcase.png" class="img-responsive center-block">
               
                          
            </div>
        </div>
        <br><br><br>
        <div class="row bg_winner">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              
                <div class="panel with-nav-tabs panel-default ">
                        <div class="no_border panel-heading" style="text-align: center;">
                            
                            <ul class="nav nav-tabs"  style = "display:inline-table;"  >
                                <!--  <ul class="nav nav-tabs ul-center center-block">-->
                                <li  style=" float: left; margin: auto; display:inline-table;">
                                    <a href="#tab1default1" id="ageEight" data-toggle="tab" class="menu-link h_b">
                                        <img src="images/gallery/bar_yellow.png" class="img-responsive bar-yellow">
                                    </a>
                                </li>
                                <li  style="float: right; margin: auto; display:inline-table;">
                                    <a href="#tab2default"  id="ageMoreEight" data-toggle="tab" class="menu-link h_b">
                                      <img src="images/gallery/bar_blue.png" class="img-responsive bar-blue">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="facebook-pic">
                         <div id = "loginFacebook" align="center" class = "<?php echo $classlogin; ?>">
                                <a class="btn btn-primary " href="<?=htmlspecialchars($loginUrl);?>" style ="opacity: 0;"><i class="fa fa-facebook" aria-hidden="true"></i>Log in with facebook</a>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="text_title_gallery"><p style="margin-left: 28%; margin-top: 2%; float: left;">  วิธีการโหวต 
                                  
                                  </p>
                                  <img src="images/howtoplayy.png" style="width: 40%; float: right; margin-right: 20%;"/>
                                </div> 
                            </div>
                        </div>
                    
                    
                        <div class="panel-body">
                            <div class="tab-content prepareadd" id = "addDiv" style="margin-left: 20px;">

                              <div id="results" >

                                       <!--ดึงค่าออกมา -->
                                </div>       
                                
                            </div>
                        </div>
                     </div>
               
            </div>
          
        </div>


    </div>

        <img src="images/footer.png" style="width: 100%;" />


<script type="text/javascript">
    var track_page = 1; //track user click as page number, righ now page number 1
    load_contents(track_page); //load content



    $("#ageEight").click(function (e) { 
        $('#results').remove();
        $("#addDiv").append('<div id = "results"></div>');

            load_contents(track_page); //load content

    //user clicks on button
            //track_page++; //page number increment everytime user clicks load button
            //load_contents(track_page); //load content
    });

    $("#ageMoreEight").click(function (e) { 
        $('#results').remove();
        $("#addDiv").append('<div id = "results"></div>');

            load_contents_age(track_page); //load content
    });

    //Ajax load function
    function load_contents(track_page){
            $('.animation_image').show(); //show loading image

            $.post( 'page/fetch_data_pages.php', {'page': track_page}, function(data){

                    if(data.trim().length == 0){
                            //display text and disable load button if nothing to load
                            $("#load_more_button").text("You have reached end of the record!").prop("disabled", true);
                    }

                    $("#results").append(data); //append data into #results element

                    //scroll page to button element
                    $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);

                    //hide loading image
                    $('.animation_image').hide(); //hide loading image once data is received
            });
            
            
    }

    function load_contents_age(track_page){
            $('.animation_image').show(); //show loading image

            $.post( 'page/fetch_data_pages_2.php', {'page': track_page}, function(data){

                    if(data.trim().length == 0){
                            //display text and disable load button if nothing to load
                            $("#load_more_button").text("You have reached end of the record!").prop("disabled", true);
                    }

                    $("#results").append(data); //append data into #results element

                    //scroll page to button element
                    $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);

                    //hide loading image
                    $('.animation_image').hide(); //hide loading image once data is received
            });
            
            
    }
    
</script>




<!-- Button trigger modal -->


    <div class="modal fade bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content des_img" style="height: 100%;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-xs-12 col-md-7 col-lg-7 vcenter" style="height: 40%; width: 40%; float: left;">
                            <img src="images/gallery/image_pop_detail.jpg" name = "share_pic" class="img-responsive center-block image_value" style="height: 100%; width: 100%; float: left;"/>
                            
                        </div>
                        <div class="col-xs-12 col-md-5 col-lg-4 vcenter" style="height: 100%; width: 40%; float: right; margin-top: 0px;"">

                            <div style="height:3em;border:0px solid #000">  
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left title_txt_gallery">
                                        <div class="text_title_gallery_pop">ชื่อ - นามสกุล</div>
                                    </div>
                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center title_txt_gallery dashed_line2">
                                         <div class="text_title_gallery_pop_value name_value">ด.ช.วิตามิน แคลเซียม</div>
                                   </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left title_txt_gallery">
                                        <br>
                                        <div class="text_title_gallery_pop"> อายุ </div>
                                        <div class="text_title_gallery_pop_value dashed_line age_value"> 5  </div>
                                        <div class="text_title_gallery_pop">ปี</div>   
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left title_txt_gallery">
                                         <br>
                                        <div class="text_title_gallery_pop">ฮีโรที่ส่งเข้าประกวด</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center title_txt_gallery dashed_line2">
                                             <div class="text_title_gallery_pop_value title_value">Captian Fish</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left title_txt_gallery">
                                         <br>
                                        <div class="text_title_gallery_pop">คะแนนที่โหวต </div>
                                        <img src="images/gallery/star.png" class="img-responsive inline">
                                    </div> 
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center title_txt_gallery dashed_line2">
                                         <div class="text_title_gallery_pop_value vote_value">73</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row_h_1"> 
                                        
                                        <button type="submit" class="btn btn-default1  center-block txt_bu_gallery submit_vote image_id_value <?php echo $class; ?>" data-toggle="modal" data-target=".bs-example-modal-lg">โหวต</button></div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
<!--    <input type="text" class="form-control txt_input" id="name_pic" name= "name_pic" s> -->

   </div>
<!--         <button id="load_more_button"><img src="images/gallery/ajax-loader.gif"  class="animation_image" style="float:left;"> Load More</button> -->

  
  </body>
</html>
