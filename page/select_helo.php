
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       
      
                
        <script>
         
            // Calling Boutique on your HTML element when the document is ready:
            $(document).ready(function(){
                $("#detail_1").show();
                $("#detail_2").hide();
                $("#detail_3").hide();
                $("#detail_4").hide();
                $("#detail_5").hide();
                $("#img_bu_1").attr('src', 'images/helo/click/Blackmores Microsite_Button-01.png');
                
                $('#boutique').boutique({
                            autoplay: false
                    });
            });
            
            function move_callback(anchor, instance, framenumber){
                var res = anchor.split("_");
                var i1 = res[1]-1;    
            }

			// Link-click callback function:
            function link_callback(anchor, instance){
                
                var cars = ["C BRIGHT.png", "CAPTAIN FISH.png","MULTI.png","POWER 9.png","KOALA KID.png"];
                var name = ["C Bright Power","Captain Fish","Multi Action","Power 9","Koala Kid"];
                var res = anchor.split("_");
                var i1 = res[1]-1;
                 $($('#img_src_1').attr("data-target")).modal("show");
                    
                $("#alert_pic").attr("src","images/helo/"+cars[i1]);
                $(".name_hero").html(name[i1]);
               
             }
           
            function pre_move_callback(anchor){
                var res = anchor.split("_");
                   $('.content').hide();
                $(res[0]+res[1]).show();
            }
            
            function clickShow(id){
                var arr =["Blackmores Microsite_Button-01.png","Blackmores Microsite_Button-02.png","Blackmores Microsite_Button-03.png","Blackmores Microsite_Button-04.png","Blackmores Microsite_Button-05.png"];
                for(i=1 ;i<6 ;i++){
                    $("#detail_"+i).hide();
                    $("#img_bu_"+i).attr('src', 'images/helo/'+"unclick/"+arr[i-1]);
                }
                $("#detail_"+id).show();
                 $("#img_bu_"+id).attr('src', 'images/helo/'+"click/"+arr[id-1]);
            }
        </script>
        <!-- The Boutique CSS: -->
        <link rel="stylesheet" href="css/boutique.css">

        <!-- The Boutique plugin: -->
        <script src="js/jquery.boutique.min.js"></script>
                
        <style>
            .bg_winner{
                /*background-image: url("images/winner/bg_winner.png");*/
                    background: url(images/gallery/bg_winner.png) ; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;

               background-size:     cover;                     
                background-repeat:   no-repeat;
                  min-width: 100%;
                min-height: 100%;
                width: 100%;
               height: 1114px;
            }


            .txt_r{
               font-family: "db_helvethaica_x";
          
               display: block;
            
            }
            
            .r_title_helo{
                color: #27AAE1;
                font-size: 2.5em;
                font-weight: bold; 
                text-shadow: 2px 1px #fff;
            }
            
            .r_title{
                color: #1677BC;
                font-size: 2em;
                font-weight: bold;  
            }
            
            .r_title_inline{
                color: #1677BC;
                font-size: 2em;
                font-weight: bold;  
                display: inline;
            }
            
            .r_body{
                color: #000;
                font-size:1.5em;
                font-weight: normal;
            }
            
            
            
            .r_body_inline{
                color: #000;
                font-size:1.5em;
               display: inline;
            }
            .ruler_center{
                background-image: url("images/send/line_1.png");
                height:150px;
                width:5px;
            }
            ul{
                list-style-type: none;
            }
            
            .yellow{
                color: "F99F00";
            }
            
            .heg_title{
                height: 5em;
                width: 80%;
            }
            
            
            @media (min-width: 768px){
               .heg_txt{
                 height: 4em;
                }
                .r_body1{
                    color: #000;
                    font-size: 1em;
                    font-weight: normal;
                }
                .bg_winner{
                  height: 1600px;
                   
                   }
            }

             @media (min-width: 992px){
               .heg_txt{
                 height: 3.5em;
                }
                .r_body1{
                    color: #000;
                    font-size: 1.5em;
                    font-weight: normal;
                }
            }
            
             @media (min-width: 992px){
               .heg_txt{
                 height: 4.2em;
                }
                .r_body1{
                    color: #000;
                    font-size: 1.6em;
                    font-weight: normal;
                }
            }
            @media (min-width: 1200px){
                 .heg_txt{
                    height: 5.3em;
                } 
                
                .r_body1{
                    color: #000;
                    font-size: 1.8em;
                    font-weight: normal;
                }
            }
            .c_h{
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            .modal-header {
                padding: 15px;
                 border-bottom: 0px solid #e5e5e5;
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
            
            .panel.with-nav-tabs .panel-heading{
                padding: 5px 5px 0 5px;
               }
            .panel-default>.panel-heading {
                color: #333;
                background-color: rgba(245, 245, 245, 0);
                border-color: #ddd;
            }

            .iden
            {
              padding-left: 50px;
            }

                      .background-main-rule
            {
            background: url(images/newBackground.png) no-repeat center top local; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin-top: -300px;
            width: 100%;

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

            .hero-check {
              width: 80%;
            }
        </style>
    </head>
    <body>
        <div class="background-main-rule">
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row ">
                <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                    <img src="images/helo/select_hello_title.png" class="img-responsive center-block">
                </div>
            </div>
             <div class="row bg_winner">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    <div class="panel with-nav-tabs panel-default center-block">
                        <div class="no_border panel-heading ">
                                <ul class="nav nav-tabs" >
                                    <!--  <ul class="nav nav-tabs ul-center center-block">-->
                                    <li style=" width: 40%; right:  -78;" >
                                        <a href="#tab1default" data-toggle="tab" class="menu-link h_b">
                                            <img src="images/gallery/bar_yellow.png" class="img-responsive" style="width: 90%; right:  -78;">
                                        </a>
                                    </li>
                                    <li  style="width: 40%;">
                                        <a href="#tab2default" data-toggle="tab" class="menu-link h_b">
                                          <img src="images/gallery/bar_blue.png" class="img-responsive" style=" width: 90%;">
                                        </a>
                                    </li>
                                </ul>
                         </div>
                         <div class="panel-body">
                             <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <div class="txt_body_winner">


                                     <!--8-->   

                                        <div class="row">

                                           
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                <div class = "text-center">
                                                    <div class="txt_r r_body_inline text-center">อายุน้อยกว่า 8 ปี : ระบายสีฮีโร่ตามจินตนาการ</div>
                                                </div>
                                                <br> <br>
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                       <!-- The Boutique HTML: -->
                                                       <ul id="boutique" class="hero-check">
                                                               <li>
                                                                       <a href="#content_1">
                                                                           <img src="images/helo/C BRIGHT.png"  id="img_src_1" class="img-responsive" width="485" height="600" data-target="#myModal">
                                                                       </a>
                                                               </li>
                                                               <li>
                                                                       <a href="#content_2">
                                                                               <img src="images/helo/CAPTAIN FISH.png"  id="img_src_2" class="img-responsive" width="485" height="600" data-target="#myModal">
                                                                       </a>
                                                               </li>
                                                                <li>
                                                                       <a href="#content_3">
                                                                           <img src="images/helo/MULTI.png" id="img_src_3" class="img-responsive" width="485" height="600" data-target="#myModal">
                                                                       </a>
                                                               </li>
                                                               <li>
                                                                       <a href="#content_4">
                                                                               <img src="images/helo/POWER 9.png" id="img_src_4" class="img-responsive" width="485" height="600" data-target="#myModal">
                                                                       </a>
                                                               </li>
                                                               <li>
                                                                       <a href="#content_5">
                                                                               <img src="images/helo/KOALA KID.png" id="img_src_5" class="img-responsive" width="485" height="600" data-target="#myModal">
                                                                       </a>
                                                               </li>
                                                       </ul>
                                                    </div>
                                                     
                                                    
                                                    <!--1-->
                                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel"><div class="txt_r r_title_helo text-center text-uppercase name_hero">Captain Fish</div></h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <img id ="alert_pic" src="images/helo/C BRIGHT.png"  class="img-responsive center-block" >
                                                              </div>
                                                            
                                                            </div>
                                                          </div>
                                                        </div>
                                                    <!--1-->
                                                    
                                                    
                                                    
                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1 "></div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 ">
                                                        <!-- End of the Boutique HTML -->
                                                           <br>
                                                           <!--helo 1-->
                                                            <div id="content1" class="content">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center text-uppercase">C Bright Power</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                                                                        <div class = "iden">
                                                                            <div class="txt_r r_title text-center" >ลักษณะ</div>
                                                                            <div class="txt_r r_body text-center">ฮีโร่สาวผิวสุขภาพดี ขาวกระจ่างใสมีออร่า สวยสะกดทุกสายตา</div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                        <div class="ruler_center center-block"></div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                                                                        <div class="txt_r r_title text-center">ความสามารถพิเศษ</div>
                                                                       <div class="txt_r r_body text-center">มีภูมิคุ้มกันพิเศษป้องกันไข้หวัดในทุกสภาพอากาศ</div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                         <div class="ruler_center center-block"></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                                                                        <div class="txt_r r_title text-center">อาวุธประจำกาย</div>
                                                                        <div class="txt_r r_body text-center"> โล่วิเศษ ช่วยป้องกันไข้หวัด<br>
                                                                         เกราะคอลลาเจน ช่วยคุ้มกันพลังความกระจ่าง</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                                        <a href="download/C BRIGHT.pdf"  download><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 1-->

                                                            <!--helo 2-->
                                                            <div id="content2" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center text-uppercase">Captain Fish</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class = "iden">
                                                                            <div class="txt_r r_title text-center">ลักษณะ</div>
                                                                            <div class="txt_r r_body text-center">ฮีโร่หนุ่มหล่อเจ้าแห่งท้องทะเล รูปร่างปราดเปรียว คล่องแคล่ว ว่องไว</div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                        <div class="ruler_center center-block"></div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                                                                        <div class="txt_r r_title text-center">ความสามารถพิเศษ</div>
                                                                        <div class="txt_r r_body text-center">เป็นคนสมองดี คิดอะไรได้รวดเร็ว <br>เฉลียวฉลาด วางแผนเก่ง <br>แก้ปัญหาเฉพาะหน้าได้ดี</div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                         <div class="ruler_center center-block"></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class="txt_r r_title text-center">อาวุธประจำกาย</div>
                                                                        <div class="txt_r r_body text-center">พลังคลื่นปลาทะเล</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                                        <a href="download/CAPTAIN FISH.pdf" download> <button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 2-->

                                                             <!--helo 3-->
                                                            <div id="content3" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center text-uppercase">Multi Action</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class = "iden">
                                                                            <div class="txt_r r_title text-center">ลักษณะ</div>
                                                                            <div class="txt_r r_body text-center">ฮีโร่คู่รักจอมพลัง มีความแข็งแรงเป็นเลิศ</div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                        <div class="ruler_center center-block"></div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                                                                        <div class="txt_r r_title text-center">ความสามารถพิเศษ</div>
                                                                        <div class="txt_r r_body text-center">คู่รักสุดฟิต รักการออกกำลังกายเป็นชีวิตจิตใจ <br>มีพละกำลังมหาศาล ยกของหนักได้อย่างง่ายดาย</div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                         <div class="ruler_center center-block"></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class="txt_r r_title text-center">อาวุธประจำกาย</div>
                                                                        <div class="txt_r r_body text-center">เข็มขัดวิเศษ สามารถปรับเพิ่มพลังได้ตามที่ต้องการ</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                                        <a href="download/MULTI.pdf" download><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 3-->

                                                             <!--helo 4-->
                                                            <div id="content4" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center text-uppercase">Power 9</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class = "iden">
                                                                            <div class="txt_r r_title text-center">ลักษณะ</div>
                                                                            <div class="txt_r r_body text-center">ฮีโร่คุณแม่ยังสาว ร่างกายแข็งแกร่งทุกสัดส่วน อ่อนโยน จิตใจดี รักความยุติธรรม ชอบช่วยเหลือผู้อื่น โดยเฉพาะเด็กๆ</div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                        <div class="ruler_center center-block"></div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                                                                        <div class="txt_r r_title text-center">ความสามารถพิเศษ</div>
                                                                       <div class="txt_r r_body text-center">ทำกิจกรรมหลายอย่างพร้อมกันได้อย่างรวดเร็ว</div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                         <div class="ruler_center center-block"></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class="txt_r r_title text-center">อาวุธประจำกาย</div>
                                                                        <div class="txt_r r_body text-center">ขวดนม เพิ่มพลังให้คนรอบข้าง</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                                        <a href="download/POWER 9.pdf" download><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 4-->

                                                             <!--helo 5-->
                                                            <div id="content5" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center text-uppercase">Koala Kid</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class = "iden">
                                                                            <div class="txt_r r_title text-center">ลักษณะ</div>
                                                                            <div class="txt_r r_body text-center">ฮีโร่เด็กน้อย ตัวเล็กแต่ใจใหญ่ มีนิสัยร่าเริง ซุกซุน กระฉับกระเฉง</div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                        <div class="ruler_center center-block"></div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                                                                        <div class="txt_r r_title text-center">ความสามารถพิเศษ</div>
                                                                       <div class="txt_r r_body text-center">ฉลาดหลักแหลม วิ่งเร็วเหมือนสายฟ้า และมีพลังกระโดดสูง</div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 ">
                                                                         <div class="ruler_center center-block"></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class="txt_r r_title text-center">อาวุธประจำกาย</div>
                                                                        <div class="txt_r r_body text-center"> ปืนวิเศษ สามารถยิงพลัง</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                                        <a href="download/KOALA KID.pdf" download><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 5-->
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1 "></div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>


                                              <!-- 8-->   
                                    </div>

                                </div>
                              
                                 <div class="tab-pane fade" id="tab2default">
                                     <div class="txt_body_winner"> 
                                         
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <div class = "text-center">
                                                    <div class="txt_r r_body_inline text-center">อายุระหว่าง</div><div class="txt_r r_title_inline text-center"> 8-12 </div><div class="txt_r r_body_inline text-center">ปี :วาดภาพฮีโร่จามโจทย์ด้วยความคิดสร้างสรรค์</div>
                                                </div>
                                                
                                                
                                            </div>  
                                        </div>
                                         <br><br>
                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                <ul>
                                                                    <li><img src="images/helo/bu_selectHello2.png" class="img-responsive"><br></li>
                                                                    <li><a href="#" onclick="clickShow(1)"> <img id="img_bu_1" src="images/helo/unclick/Blackmores Microsite_Button-01.png" class="img-responsive" ></a></li>
                                                                    <li><a href="#" onclick="clickShow(2)"><img id="img_bu_2"src="images/helo/unclick/Blackmores Microsite_Button-02.png" class="img-responsive"></a></li>
                                                                    <li><a href="#" onclick="clickShow(3)"><img id="img_bu_3"src="images/helo/unclick/Blackmores Microsite_Button-03.png" class="img-responsive"></a></li>
                                                                    <li><a href="#" onclick="clickShow(4)"><img id="img_bu_4" src="images/helo/unclick/Blackmores Microsite_Button-04.png" class="img-responsive"></a></li>
                                                                    <li><a href="#" onclick="clickShow(5)"><img id="img_bu_5" src="images/helo/unclick/Blackmores Microsite_Button-05.png" class="img-responsive"></a></li>
                                                                  </ul>

                                                            </div>
                                                       
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                                                         <div class="bg_select_8_12">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                <div id ="detail_1" class = "detail_1   text-center heg_txt">
                                                                    <div class="txt_r r_title_inline text-uppercase">C Bright Power</div>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ลักษณะ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ฮีโร่สาวผิวสุขภาพดี ขาวกระจ่างใสมีออร่า<br> สวยสะกด</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ความสามารถพิเศษ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">มีภูมิคุ้มกันพิเศษป้องกัน ไข้หวัดในทุกสภา</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">อาวุธประจำกาย</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">-โล่วิเศษ ช่วยป้องกันไข้หวัด<br>- เกราะคอลลาเจน ช่วยคุ้มกัน พลังความกระจ่างใสของผิว</div>
                                                                        </dd>
                                                                     </dl>
                                                                </div>
                                                                <div  id ="detail_2" class = "detail_2   text-center heg_txt">
                                                                    <div class="txt_r r_title_inline text-uppercase">Captain Fish</div>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ลักษณะ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ฮีโร่หนุ่มหล่อเจ้าแห่งท้องทะเล รูปร่างปราดเปรียว<br> คล่องแคล่ว ว่องไว</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ความสามารถพิเศษ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">เป็นคนสมองดี คิดอะไรได้รวดเร็ว <br>เฉลียวฉลาด วางแผนเก่ง <br>แก้ปัญหาเฉพาะหน้าได้ดี</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">อาวุธประจำกาย</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">พลังคลื่นปลาทะเล</div>
                                                                        </dd>
                                                                     </dl>
                                                                </div>

                                                                <div id ="detail_3" class = "detail_3   text-center heg_txt">
                                                                    <div class="txt_r r_title_inline text-uppercase">Power 9</div>

                                                                    <dl class="dl-horizontal">
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ลักษณะ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ฮีโร่คุณแม่ยังสาว ร่างกายแข็งแกร่งทุกสัดส่วน <br>อ่อนโยน จิตใจดี รักความยุติธรรม<br> ชอบช่วยเหลือผู้อื่น โดยเฉพาะเด็กๆ</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ความสามารถพิเศษ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ทำกิจกรรมหลายอย่างพร้อมกันได้<br>อย่างรวดเร็ว</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">อาวุธประจำกาย</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ขวดนม เพิ่มพลังให้คนรอบข้าง</div>
                                                                        </dd>
                                                                     </dl>
                                                                </div>

                                                              <div id ="detail_4" class = "detail_4   text-center heg_txt">
                                                                    <div class="txt_r r_title_inline text-uppercase">Multi Action</div>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ลักษณะ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ฮีโร่คู่รักจอมพลัง มีความแข็งแรงเป็นเลิศ</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ความสามารถพิเศษ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">คู่รักสุดฟิต รักการออกกำลังกายเป็นชีวิตจิตใจ มีพละกำลังมหาศาล ยกของหนักได้อย่างง่ายดาย</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">อาวุธประจำกาย</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">เข็มขัดวิเศษ สามารถปรับเพิ่มพลังได้ตามที่ต้องการ</div>
                                                                        </dd>
                                                                     </dl>
                                                                </div>
                                                                <div id ="detail_5" class = "detail_5   text-center heg_txt">
                                                                    <div class="txt_r r_title_inline text-uppercase">Koala Kid</div>
                                                                    <dl class="dl-horizontal">
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ลักษณะ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ฮีโร่เด็กน้อย ตัวเล็กแต่ใจใหญ่ มีนิสัยร่าเริง ซุกซุน กระฉับกระเฉง</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">ความสามารถพิเศษ</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ฉลาดหลักแหลม วิ่งเร็วเหมือนสายฟ้า และมีพลังกระโดดสูง</div>
                                                                        </dd>
                                                                        <dt class="txt_r r_body1 text-center yellow heg_txt">
                                                                            <div class="c_h">อาวุธประจำกาย</div>
                                                                        </dt>
                                                                        <dd class="txt_r r_body1 text-center heg_txt">
                                                                            <div class="c_h">ปืนวิเศษ สามารถยิงพลัง</div>
                                                                        </dd>
                                                                     </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>             
            </div>
        </div>       
    </div> 
    </div>       
    <br>  <br>  <br> 
    <img src="images/footer.png" style="width: 100%; height: 400px" />
      
    </body>
</html>
