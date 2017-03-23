<html lang="en" >
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">


    <title>Blackmores My Strong Family - ออกแบบฮีโร่ โชว์สตรองให้โลกรู้</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link href="css/bootstrap.css" rel="stylesheet">-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/font.css" rel="stylesheet">
    
    <link href="css/theme_web.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>  
    <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

   <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1644999395805431',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*.r_bg{   
            background-image: url("images/rule/r_bg.png") ;
            background-repeat: no-repeat;
            background-size: 100% auto ;
            background-position: center center;
             -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }*/
        body { 
            background: url(images/rule/r_bg.png) no-repeat center top local; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
         }
         
         .bottom0.panel-group  {
             margin-bottom: 0;
            }

            .notifications-scroll-area {
                height: 550px;
                position: relative;
                overflow: auto;
            }
            .bg_footer1{
                
                background: url(images/main/m_bg_pop.png) no-repeat center top local; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-color: rgba(51, 122, 183, 0);
                width: 100%;
                
            }
            .bg_footer2{
         /*       background-color: #000;*/
                width: 100%;
                height:  180px;
                background: url(images/main/m_footer.png) no-repeat center top local; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-repeat: no-repeat;
            }
            
            .bu_footer{
                width: 100%;
                height:  100%;

                background: url(images/main/m_b_footer.png) no-repeat center top local; 
                padding-top: 10%;
         
            }
            
            .panel-primary > .panel-heading {
                color: rgba(51, 122, 183, 0);
                background-color: rgba(51, 122, 183, 0);
                border-color: rgba(51, 122, 183, 0);
            }
            .panel-heading {
                padding: 50px 15px;
                border-bottom: 0px solid transparent;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px;
            }
            .panel-primary {
                border-color: rgba(253, 254, 255, 0);
            }
            
            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .00);
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0);
            }
            
            .panel-group .panel-heading + .panel-collapse > .panel-body, .panel-group .panel-heading + .panel-collapse > .list-group {
                border-top: 0px solid #ddd; 
            }
            
            .panel {
                margin-bottom: 20px;
                background-color: rgba(247, 196, 196, 0);
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .00);
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0);
            }
            
            .txt_r{
               font-family: "db_helvethaica_x";
               
              
                display: inline;
            }
            
            
            .r_body{
                color: #000;
                font-size:1.5em;
                font-weight: normal;
                display: inline;
            }
            .r_body3{
                color: #000;
                font-size:1.35em;
                font-weight: normal;
                display: inline;
            }
            
            .r_body_small{
                color: #000;
                font-size:1.2em;
                font-weight: normal;
                display: inline;
            }
            
            .c_2{
                 font-family: "db_helvethaica_x";
                font-size:1.3em;
                font-weight: normal;
                 color: #01a0b3; 
                display: inline;
                font-style:italic;
            }
            
            
            
             .box_txt{
                 background: url(images/main/m_bpx_txt.png) no-repeat center top local; 
                 margin-top: 25px;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                 height: 50%;
            }
            
            .notifications-scroll-area {
               height: auto;
                /* position: relative; */
                /* overflow: auto; */
            }
            #toggle {
              height: 40%;
  width: 80%;
  background: #eee;

}

.modal.fade .modal-dialog {
  transform: translate3d(0, 100vh, 0);
}

.modal.in .modal-dialog {
  transform: translate3d(0, 0, 0);
}

    .modal-dialog {
       margin-top: 20%;
        width: 70%;
        height: 80%;
    }

    .modal-body
    {
      width: 80%;
      height: 45%;

    }


.bu_footer:before {
   width: 100%
}

.bu_footer:after {
   width: 0%;
}

#toggle.short{

   width : 80%;
   height: 0%;
}


.main-body { 

   
    /*
      background: url(../images/bg_home.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
  height: 100%;
  background-color: #060;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
  */
  
 
    background-image: url("images/bg_home2.png") ;

    background-image-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: left top;
    background-attachment: scroll;
    background-size: 100% 90%;
   }

       .size-li-small
    {
      width: 11%;
      opacity: 0;
      text-align: center;
    }

      .size-li-big
    {
      width: 14%;
      opacity: 0;
      text-align: center;
    }

    .size-li-very
    {

      width: 25%;
    }
    
    
    /** bg_popup */
    .bg_popup{
        background-image: url("images/popup-show.png") ;
         background-image-size: 100% 100%;
        background-repeat: no-repeat;
        background-position: left top;
        background-attachment: scroll;
        background-size: 100% 90%;
        height:100%;
        margin-top: 20px !important;
    }
    
    .txt_body_popup{
        margin-top:100px;
    }
    
    .italic{
        font-style:italic;
    }
    
  
    .modal-content1 {
    position: relative;
    /* background-color: rgba(255, 255, 255, 0.03); */
    t-background-clip: padding-box;
    background-clip: padding-box;
    border: 0px solid rgba(153, 153, 153, 0);
    border: 0px solid rgba(0,0,0,.2);
    border-radius: 0px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(10, 9, 9, 0);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0);
}
    .modal-header1 {
        padding: 15px;
        border-bottom: 0px solid #e5e5e5;
    }   
    .close2 {
        
        font-size: 21px;
        font-weight: 1700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
          
    }

        .foot-nev
    {
       background: url(images/bu_toggle_up.png) no-repeat center ;
    }

 


    @media (max-width: 768px){
      .bg_popup
      {
        margin-top: 0px !important;
        margin-left: 0px !important;
      }
      .foot-nev
      {
        background-size: 150px 60px;
        margin-left: 30%;
        width: 40%;
        margin-right: 30%;
      }
      

    }

    .navbar-top
    {
        background-image: url("images/navbar-1.png");
         padding: 20px 30px 0 30px;
            background-size: 100% 100% ;
          margin-top: 10px;
        
    }

    .menu_top_text-t
    {
      width: 100%;
      height: 100%;
    }


    .navbar-show-left
    {
      padding-top: 70px;
    }

    .nav-nav-left-t
    {
      width: 100%;
    }

    .menu_top_right-t
    {
       width: 35%;
      float: right;
      margin-right: 2.5%;

    }

  .div-top-cen
    {

        width: 20%;
        padding-right: 40%;
        padding-left: 40%;
        
    }


    @media (min-width: 768px){
         .pic-nav
      {
        width: 100%;
        margin-top: -3%;
      }
      .foot-nev
      {
        background-size: 150px 60px;
        margin-left: 30%;
        width: 40%;
        margin-right: 30%;
      }
      .txt_menu
      {
        font-size: 7px;
      }
       .link1{
         background-color: #000;
            width: 100px;
            height: 50px;
            margin-left: 26%;
            margin-top: 11.5%;
            opacity: 0;
        }

        .link2{
            background-color: #000;
            width: 100px;
            height: 50px;
            margin-left: 65%;
            margin-top: -5%;
            opacity: 0;
        }
        .link3{
            background-color: #000;
            width: 160px;
            height: 90px;
            margin-left: 40%;
            margin-top: 15.5%;
            opacity: 0;
        }

    }

       @media screen and (min-device-width: 361px) and (max-device-width: 768px){
      .navbar-top
      {
           background-size: 0% 0% ;
        height: 0px;
      }

    .size-li-small
    {
      width: 80% !important;
      opacity: 1 !important;
      margin: auto !important;
      text-align: center;
    }

      .size-li-big
    {
      width: 80% !important;
       opacity: 1 !important;
            margin: auto !important;
      text-align: center;
    }

    .size-li-very
    {
       opacity: 0 !important;
            margin: auto !important;
      width: 25%;
    }
    
    }

    @media (min-width: 990px){
      .foot-nev
      {
        background-size: 150px 60px;
        margin-left: 30%;
        width: 40%;
        margin-right: 30%;
      }
      .txt_menu
      {
        font-size: 12px;
      }
      
        .link1{
          background-color: #000;
           width: 100px;
          height: 50px;
          margin-left: 26%;
          margin-top: 12.5%;
          opacity: 0;
         }

        .link2{
            background-color: #000;
             width: 100px;
             height: 50px;
            margin-left: 65%;
             margin-top: -5%;
             opacity: 0;
        }
        .link3{
            background-color: #000;
            width: 160px;
            height: 90px;
            margin-left: 40%;
            margin-top: 17.5%;
            opacity: 0;
        }

    }

    @media (min-width: 1440px)
    {
            .pic-nav
      {
        width: 100%;
        margin-top: 0px !important;
      }
      .link1{
         background-color: #000;
          width: 100px;
          height: 50px;
          margin-left: 26%;
          margin-top: 11.5%;
           opacity: 0;
      }

      .link2{
          background-color: #000;
           width: 100px;
           height: 50px;
          margin-left: 65%;
           margin-top: -5%;
           opacity: 0;
      }
      .link3{
          background-color: #000;
          width: 160px;
          height: 90px;
          margin-left: 40%;
          margin-top: 15.5%;
          opacity: 0;
      }

    }

    @media (min-width: 1080px){
      .foot-nev
      {
        background-size: 200px 60px;
        margin-left: 30%;
        width: 40%;
        margin-right: 30%;
      }
      .txt_menu
      {
        font-size: 12px;
      }
      .pic-nav
      {
        width: 100%;
        margin-top: -20px;
      }
      
        .link1{
         background-color: #000;
            width: 100px;
            height: 50px;
            margin-left: 26%;
            margin-top: 11.5%;
            opacity: 0;
        }

        .link2{
            background-color: #000;
            width: 100px;
            height: 50px;
            margin-left: 65%;
            margin-top: -5%;
            opacity: 0;
        }
        .link3{
            background-color: #000;
            width: 160px;
            height: 120px;
            margin-left: 40%;
            margin-top: 15.5%;
            opacity: 0;
        }
    }

    .div-show-left-t
    {
        margin-top: 10% !important;
        width: 35%;
        margin-left: 5% !important;

    }
       .div-show-right-t
    {
        margin-top: 7%;
        width: 35%;
        margin-right: 1%;

    }
    
     #menu {
                /*background: hsla(1,0%,100%,.9);*/
                
        position: relative;
        top: 0;
        right: 0;
        left: 0;
        min-height: 100%;
       /*padding-top: 80px;*/
      }
    .navbar-inner{
            border:0;
            background: transparent url('images/mobile/bar_bg.png') no-repeat center center;
            background-size:cover;
         }
    .bar1 ul
    {
        margin: 0;
        padding: 0;
        list-style-type: none;
        display: inline;
    }
    .image_ul{
        height: 100%;
    }
  
     .txt_m{
        font-family: "db_helvethaica_x" !important;
        color: #1677BC;
         font-size: 1.5em !important;
         font-weight: bold;
        display: block;

     }
     
      .txt_m1{
        font-family: "db_helvethaica_x" !important;
        color: #1677BC;
         font-size: 1.5em !important;
         font-weight: bold;
        display: block;

     }
     .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 0px solid #e5e5e5;
    }
    
    
    </style>
      <!-- The Boutique CSS: -->
        <link rel="stylesheet" href="css/boutique.css">

        <!-- The Boutique plugin: -->
        <script src="js/jquery.boutique.min.js"></script>
        
        <link rel="stylesheet" href="css/mobile.css">
        
  </head>
<!--<body class="r_bg">-->
  <body >
        <div class="main-body">
             <div class="visible-xs">  
            <div class="container conter2" >
                <!-- Static navbar -->
                <nav class="navbar navbar-default " role="navigation">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed txt_bu_m_mobile m_logo_on_bar" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="navbar" id="bar_mobile">
                          <img src="images/mobile/menu.png" width="53px">
                      </button>
                    </div>
                    <div id="menu" class="navbar-inner panel panel-default panel-collapse collapse bg_bar">

                        <div class="actionBox">
                            <ul class="nav navbar-nav image_ul">
                                <li style="height:30%">
                                        <row>
                                            
                                            <div class="col-xs-9"><img src="images/mobile/close.png" id="close_mobile" class="img-responsive left-box" style="margin-left: 85%;width: 20%"></div>
                                              </row>
                                              <row>
                                            <div class="col-xs-12">
                                                    <div class=" center-block">
                                                        <img src="images/mobile/header.png" class="img-responsive" >
                                                    </div>
                                            </div>
                                         </row>
                                    
                                 </li>
                                

                              <li style="height:10%">
                                  <a href="index" class="txt_menu txt_m text-center">หน้าแรก</a>
                                  <img src="images/mobile/line_hero.png" class="center-block" width="80%">
                              </li>
                              <li  style="height:10%">
                                  <a href="rule" class="txt_menu txt_m text-center">กติกาและของรางวัล</a>
                                <img src="images/mobile/line_hero.png" class="center-block" width="80%">
                              </li>
                             <li class="dropdown">
                                 <a href="#" class="dropdown-toggle  text-center txt_m1" data-toggle="dropdown">เลือกฮีโร่ <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                          <li><a href="select_hero1" class="txt_menu txt_m text-center">อายุน้อยกว่า 8 ปี</a></li>
                                          <li><a href="select_hero2" class="txt_menu txt_m text-center">อายุ 8 - 12 ปี</a></li>
                                  </ul>
                                 <img src="images/mobile/line_hero.png" class="center-block" width="80%">
                              </li>

                              <li  style="height:10%">
                                  <a href="showcase" class="txt_menu txt_m text-center">โหวตภาพประกวด</a>
                                  <img src="images/mobile/line_hero.png" class="center-block" width="80%">
                              </li>
                              <li  style="height:10%">
                                  <a href="winner_all" class="txt_menu txt_m text-center">ประกาศผู้โชคดี</a>
                                  <br>
                              </li>
                              <li  style="height:40%"><a href="send_work" class="txt_menu txt_m"><img src="images/mobile/send_work.png" class="img-responsive center-block" style="width:40%"></a></li>
                              <!--<li  style="height:30%"><a href="send_work" class="txt_menu"><div class="center-block"></div></li>-->
                            </ul>
                          </div>

                     </div><!--/.nav-collapse -->
                  
                </nav>
            </div>
        </div>  
         
            
            
          <div class="hidden-xs">  
            <div class="container conter2" >
                <!-- Static navbar -->
                <nav class="navbar navbar-default navbar-top" role="navigation">
                  <div class="menu_top_text-t">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

                    </div>


                    <div id="navbar" class=" navbar-collapse collapse navbar-show-left-t" style="
        padding-top: 0px;">
                      <ul class="nav navbar-nav nav-nav-left-t" id="menu-nav">
                        <li class="size-li-small" ><a href="index" class="txt_menu" style="margin-top: 50px;">หน้าแรก</a></li>
                        <li class="size-li-big" ><a href="rule" class="txt_menu" style="padding-top: 60px;">กติกาและของรางวัล</a></li>
                        <li class="size-li-small" ><a href="select_hero" class="txt_menu" style="margin-top: 40px;">เลือกฮีโร่</a></li>
                        <li class="size-li-very"><img src="./images/logo-navbar.png" class = "pic-nav" style="padding-top: 40px;"></li>
                        <li class="size-li-big"><a href="showcase" class="txt_menu text-four" style="margin-top: 40px;">โหวตภาพประกวด</a></li>
                        <li class="size-li-big"><a href="winner_all" class="txt_menu" style="margin-top: 40px;">ประกาศผู้โชคดี</a></li>
                        <li class="size-li-small"><a href="send_work" class="txt_menu" style="margin-top: 20px;height: 130px;padding-left: 10px;left: -12;">ส่งผลงาน1</a>
                        </li>
                      </ul>
                    </div><!--/.nav-collapse -->
                  </div>
                </nav>
            </div>
        </div>   
         <div id="content">
            <div class="visible-xs">
                <div class="row home_body scale_img">
                    <div class="col-xs-12">
                        <div class="col-xs-12"><img src="./images/mobile/header-t.png" class="img-responsive" style="display: block; margin: 0 auto;" /></div>

                   </div>
                   <div class="col-xs-12 ">
                       <div class="col-xs-1"></div>
                       <div class="col-xs-10"><img src="./images/mobile/text_img.png" class="img-responsive" style="display: block; margin: 0 auto;"  /></div>
                       <div class="col-xs-1"></div>
                   </div>
                     <div class="col-xs-12 ">
                       <div class="col-xs-1"></div>
                       <div class="col-xs-10"> <img src="./images/mobile/family.png" class="img-responsive img_family" style="display: block;" /></div>
                       <div class="col-xs-1"></div>
                   </div>   
               </div>
            
            </div>
            <div class="hidden-xs">
                <div class="row home_body scale_img">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1 ">

                    </div>
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-offset-1 div-show-left-t">
                    <img src="./images/m_t_1.png" style="width: 100%;" />
                   </div>

  

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-offset-1 div-show-right-t">
                                 <img src="./images/home_body_left.png" style="width: 100%;" />
              </div>
           </div>


           
         
         </div>
         <div id = "add-foot">
           
            <div class="bg_footer2" id = "clear-foot" >
                 <div  class="foot-nev">
                 <button type="button" data-toggle="modal" class="button-toggle"  data-target="#myModal" style="width: 100%; opacity: 0; margin-top: 0; height: 100; "></button>
                 </div>
             </div>
         </div>
          </div>
      
<!-- comment -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="padding: auto; margin: auto;">
    
      <!-- Modal content-->
      <div class="modal-content1">
          <div class="bg_popup">
                <div class="visible-xs">
                    <div class="modal-header1" style="height: 6%; padding-top: 0%; background-color: transparent;">

                        <button type="button" class="close2 center-block" data-dismiss="modal" style="background: transparent; border: 0;"><img src="images/bu_toggle_down_1.png" class="close2 img-responsive" style="width: 50%; margin-left: 25%; margin-top:6%;opacity: 0;"></button>
                    </div>
                    <a href="#" class="bu2" ><div class="link1"></div></a>
                    <a href="#" class="bu3" ><div class="link2"></div></a>
                     <a href="#" class="bu4" ><div class="link3"></div></a>
                </div>
                <div class="hidden-xs">
                   
                    <div class="modal-header1" style="height: 4%; padding-top: -5%; background-color: transparent;">
                     
                        <button type="button" class="close2 center-block" data-dismiss="modal" style="background: transparent; border: 0; margin-top: 4px;"><img src="images/bu_toggle_down_1.png" class="close2 img-responsive" style="width: 50%; margin-left: 25%; margin-top:0%;"></button>
                    </div>
                    <a href="#" class="bu1" ><div class="link1"></div></a>
                    <a href="#" class="bu1" ><div class="link2"></div></a>
                     <a href="#" class="bu4" ><div class="link3"></div></a>
                </div>
            <div class="modal-body">
                

                
            </div>   
            </div>
            <div class="modal-footer" style="height: 0px;">
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>



 
    <script src="js/ie10-viewport-bug-workaround.js"></script>


</body></html>