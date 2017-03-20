<!DOCTYPE html>
<html lang="en">
<head>
 
  
  <style type="text/css">
    
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

        .bg_winner{
            /*background-image: url("images/winner/bg_winner.png");*/
            background: url(images/gallery/bg_winner.png) ; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;

           background-size: 80% 100%;                     
           background-repeat:   no-repeat;
           margin-top: 20px;
          background-position: center;
          width: 100%;
          height: 600px;
        }


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
        .icon_yellow_winner {
           background: url(images/winner/bar_Yellow.png);
           min-width: 20%;
            min-height: 20%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-repeat: no-repeat;
            background-size: 100% 100%;

        }

        .icon_blue_winner {
           background: url(images/winner/bar_blue.png);
           min-width: 20%;
            min-height: 20%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-repeat: no-repeat;
            background-size: 100% 100%;

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


        .with-nav-tabs.panel-default .nav-tabs > .open > a, 
        .with-nav-tabs.panel-default .nav-tabs > .open > a:hover, 
        .with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-default .nav-tabs > li > a:hover, 
        .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
            color: #000;
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }


        .txt_menu_winner{
            font-family: "db_helvethaica_x";
            color: #fff;
             font-style:italic;
            font-weight: bold;  
            font-size: 1.8em;
            text-shadow: 0.5px 0.5px #000;
        }

        .txt_body_winner{
            font-family: "db_helvethaica_x";
            color: #58595B;
            font-weight: bold;  
            font-size: 1.8em;
        }
        
        .txt_body_winner_big{
            font-family: "db_helvethaica_x";
            color: #0075C9;
            font-weight: bold;  
            font-size: 2em;
        }
        
        .txt_body_winner_title{
            font-family: "db_helvethaica_x";
            color: #FCF344;
            font-weight: bold;  
            font-style:italic;
            font-size: 3em;
            text-shadow: 0 0 3px #000000;
        }
        
        
        .panel-default > .panel-heading {
            color: rgba(51, 51, 51, 0);
            background-color: rgba(255, 255, 255, 0);
            border-color: rgba(221, 221, 221, 0);
        }
        .nav-tabs > li {
            float: none;
            margin-bottom: -1px;
            border: 0;
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
            background-size: 100% 100%;
            margin-top: 0px;
           width: 100%;
           margin-top: -100px;
                background-attachment: fixed;

            }
            
             @media (max-width: 768px ) {
           
                 .txt_body_winner{
                        font-family: "db_helvethaica_x";
                        color: #58595B;
                        font-weight: bold;  
                        font-size: 1.4em;
                    }

                    .txt_body_winner_big{
                        font-family: "db_helvethaica_x";
                        color: #0075C9;
                        font-weight: bold;  
                        font-size: 1.6em;
                    }

                    .txt_body_winner_title{
                        font-family: "db_helvethaica_x";
                        color: #FCF344;
                        font-weight: bold;  
                        font-style:italic;
                        font-size: 2.6em;
                        text-shadow: 0 0 3px #000000;
                    }
            
             }
             
             @media (max-width: 480px ) {
                .txt_body_winner{
                        font-family: "db_helvethaica_x";
                        color: #58595B;
                        font-weight: bold;  
                        font-size: 1.0em;
                    }

                    .txt_body_winner_big{
                        font-family: "db_helvethaica_x";
                        color: black;
                        font-weight: bold;  
                        font-size: 1.2em;
                    }

                    .txt_body_winner_title{
                        font-family: "db_helvethaica_x";
                        color: #0075C9;
                        font-weight: bold;  
                        font-style:italic;
                        font-size: 1.8em;
                        text-shadow: 0 0 3px #000000;
                    }
                    .r_body_italic {
                    font-family: "db_helvethaica_x";
                    color: #0075C9;
                    font-size: 2em;
                    font-style:italic;
                    font-weight: bold;
                }
                .bg_winner{
            /*background-image: url("images/winner/bg_winner.png");*/
                    background: url(images/mobile/bg_winner.png) ; 
                   

                     background-size: 100% 90%;                     
                     background-repeat:   no-repeat;
                     margin-top: 20px;
                     width: 100%;
                     height: 80%;
                     
                }
             }

             body
             {
              background-size: 0% 0%;
             }




  </style>
  
  <script>
      $( function() {
        $( "#title_age" ).change(function() {
        
            
            //$("#tab1default").removeClass("active");
            $("#tab"+$( "#name_type" ).val()+"default").removeClass("in");
            $("#tab"+$( "#name_type" ).val()+"default").removeClass("active");
            
            $("#tab"+$(this).val()+"default").addClass("in");
            $("#tab"+$( this).val()+"default").addClass("active");
            
            $( "#name_type" ).val($(this).val());
          });
      });
</script>
</head>
<body>
  
<div class="background-main-rule">
   <div class="visible-xs"><br><br><br><br><br></div>
             <div class="hidden-xs"><br><br><br><br><br><br><br></div>
 <div class="container">
    <div class="row">
            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                <div class="visible-xs">
                     <img src="images/winner/winner.png" class="img-responsive center-block" width="70%" height="70%">
                     <br>
                 </div>
                <div class="hidden-xs">
                    <img src="images/winner/winner.png" class="img-responsive center-block"><br>
                 </div>
            </div>
    </div>
     <div class="visible-xs">
        <div class="row">
           <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
               <p class="r_body_italic text-center"> เลือกผลประกาศผู้โชคดี </p>
           </div>
        </div>
     </div>
     <div class="row">
            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                <div class="visible-xs">
                  <select  name="title_age" id="title_age" class="form-control form_input_type4 txt_input center-block" width="70%" height="70%">
                       <option value="1" class="center-block txt_input">ประเภทอายุไม่เกิน 8 ปี</option>
                       <option value="2" class="center-block txt_input">ประเภทอายุระหว่าง 8 -12 ปี</option>
                       <option value="3" class="center-block txt_input">ผู้ผ่านเข้าไปเวิร์คช็อป</option>
                       <option value="4" class="center-block txt_input">รายชื่อผู้ชนะ Popuar Vote</option>
                       <option value="5" class="center-block txt_input">ผู้โชคดีจากการโหวต</option>
                  </select>
                </div>
            </div>
     </div>
        <input type="hidden" id="name_type" value="1">
    </div> 
   <div class="row ">
       <div class="bg_winner">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="panel with-nav-tabs panel-default ">
                     <div class="hidden-xs">
                        <div class="no_border panel-heading" style="width: 100%; height: 100px;">
                           
                        
                        
                            
                                <ul class="nav nav-tabs" style="width: 100%; height: 100px;">
                                    <li style="right:  -78; width: 18%;">
                                        <a href="#tab1default" data-toggle="tab" class="menu-link h_b">
                                             <img src="images/winner/bar_new_01.png" class="img-responsive" style="width: 100%;"> 
                                        </a>
                                     </li>
                                    <li style="right:  -39.5; width: 18%;">
                                        <a href="#tab2default" data-toggle="tab" class="menu-link h_b">
                                             <img src="images/winner/bar_new_02.png" class="img-responsive" style="width: 100%;"> 
                                        </a>
                                    </li>
                                    <li style="width: 18%;">
                                        <a href="#tab3default" data-toggle="tab" class="menu-link h_b">
                                            <img src="images/winner/bar_new_03.png" class="img-responsive" style="width: 100%;"> 
                                        </a>
                                    </li>
                                     <li style="left: -39; width: 18%;">
                                         <a href="#tab4default" data-toggle="tab" class="menu-link h_b">
                                           <img src="images/winner/bar_new_04.png" class="img-responsive" style="width: 100%;"> 
                                         </a>
                                     </li>
                                      <li style="left: -79; width: 18%;">
                                         <a href="#tab5default" data-toggle="tab" class="menu-link h_b">
                                           <img src="images/winner/bar_new_05.png" class="img-responsive" style="width: 100%;"> 
                                         </a>
                                     </li>
                                </ul>
                             </div>  
                    </div>
                     <div class="visible-xs">
                         <div class="no_border panel-heading" style="width: 100%; height: 20px;"></div>
                     </div>
                   
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                               
                                <div class="txt_body_winner_title text-center">รางวัลประเภทอายุน้อยกว่า 8 ปี</div><br><br><br>
                                <div class="txt_body_winner text-center"> รางวัลทุนการศึกษารางวัลละ 3,000 บาท พร้อม<br>ผลิตภัณฑ์เสริมอาหาร Blackmores <br>มูลค่ารางวัลละ 10,000 บาท สำหรับผู้ปกครอง 5 รางวัล <br>รวมมูลค่าทั้งสิ้น 65,000 บาท</div><br><br><br><br>
                                <div class="txt_body_winner_big text-center">"ประกาศรายชื่อผู้โชคดีวันที่ 17 พฤษภาคม 2560"</div>
                            </div>
                            <div class="tab-pane fade" id="tab2default">  
                                <div class="hidden-xs"> <br><br></div>
                                <div class="txt_body_winner_title text-center">รางวัลประเภทอายุ 8 – 12 ปี</div><br><br><br>
                                <div class="txt_body_winner text-center">รางวัลทุนการศึกษารางวัลละ 5,000 บาท  <br>พร้อมผลิตภัณฑ์เสริมอาหาร Blackmores<br> มูลค่ารางวัลละ 10,000 บาทสำหรับผู้ปกครอง 5 รางวัล <br>รวมมูลค่าทั้งสิ้น 75,000 บาท</div><br><br><br><br>
                                <div class="txt_body_winner_big text-center">"ประกาศรายชื่อผู้โชคดีวันที่ 17 พฤษภาคม 2560"</div>
                            </div>
                            <div class="tab-pane fade" id="tab4default">  
                                <div class="hidden-xs"><br><br></div>
                                <div class="txt_body_winner_title text-center">รางวัลผลงาน Popular Vote</div><br><br><br>
                                <div class="txt_body_winner text-center"> รางวัลผลิตภัณฑ์เสริมอาหาร Blackmores <br>มูลค่ารางวัลละ 3,000 บาท 10 รางวัล <br>รวมมูลค่าทั้งสิ้น 30,000 บาท</div><br><br><br><br>
                                <div class="txt_body_winner_big text-center">"ประกาศรายชื่อผู้โชคดีวันที่ 17 พฤษภาคม 2560"</div>
                            </div>
                            <div class="tab-pane fade" id="tab5default">
                                <div class="hidden-xs"><br><br></div>
                                 <div class="txt_body_winner_title text-center">รางวัลผู้ที่เข้าร่วมโหวต</div><br><br><br>
                                <div class="txt_body_winner text-center"> รางวัลผลิตภัณฑ์เสริมอาหาร Blackmores <br>มูลค่ารางวัลละ 2,000 บาท 10 รางวัล <br>รวมมูลค่าทั้งสิ้น 20,000 บาท</div><br><br><br><br>
                                <div class="txt_body_winner_big text-center">"ประกาศรายชื่อผู้โชคดีวันที่ 17 พฤษภาคม 2560"</div>
                                    
                            </div>
                            <div class="tab-pane fade" id="tab3default"> 
                                <div class="hidden-xs"><br><br></div>
                                <div class="txt_body_winner_title text-center">รางวัลผู้เข้าไปเวิร์คช็อป</div><br><br><br>
                                <div class="txt_body_winner text-center"></div><br><br><br><br>
                                <div class="txt_body_winner_big text-center">"ประกาศรายชื่อผู้โชคดีวันที่ 28 เมษายน 2560"</div>
                                    
                            </div>
                        </div>
                    </div>
                 </div>
            </div>    
       </div>
   </div>
   <br/>

            <img src="images/footer.png" style="width: 100%;" />
       

 </div>




</body>
</html>
