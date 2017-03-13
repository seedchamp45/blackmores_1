
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
                $('#boutique').boutique({
                            container_width: 450,
                            front_img_width: 140,
                            autoplay: false
                    });
            });

            // Use the Boutique callback to trigger the content switch
            function pre_move_callback(anchor){
                    $('.content').hide();
                    $(anchor).show();
            }
            
            function clickShow(id){
                for(i=1 ;i<6 ;i++){
                    $("#detail_"+i).hide();
                }
                $("#detail_"+id).show();
                
            }
        </script>
        <!-- The Boutique CSS: -->
        <link rel="stylesheet" href="css/boutique.css">

        <!-- The Boutique plugin: -->
        <script src="js/jquery.boutique.min.js"></script>
                
        <style>
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
            
            .r_body1{
                color: #000;
                font-size:1.8em;
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
            .heg_txt{
               height: 7em;
            }
            
            .c_h{
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="row bg_winner">
                 <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "> </div>
                 <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 ">
                     <div class="panel with-nav-tabs panel-default center-block">
                         <div class="panel-heading ">

                                 <ul class="nav nav-tabs ul-center center-block">
                                     <li class="icon_yellow_winner"><a href="#tab1default" data-toggle="tab"><div class="txt_menu_winner">ประเภทอายุไม่เกิน 8 ปี</div> </a></li>
                                     <li class="icon_blue_winner"><a href="#tab2default" data-toggle="tab"><div class="txt_menu_winner">ประเภทอายุ 8-12 ปี </div></a></li>
                                    
                                 </ul>
                         </div>
                         <div class="panel-body">
                             <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <div class="txt_body_winner">


                                     <!--8-->   

                                        <div class="row">

                                           
                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-12 ">

                                                <div class = "text-center">
                                                    <div class="txt_r r_body_inline text-center">อายุน้อยกว่า 8 ปี : ระบายสีฮีโร่ตามจินตนาการ</div>
                                                </div>
                                                <br> <br>
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                       <!-- The Boutique HTML: -->
                                                       <ul id="boutique">
                                                               <li>
                                                                       <a href="#content1">
                                                                           <img src="images/helo/C BRIGHT.png"  class="img-responsive" width="485" height="600">
                                                                       </a>
                                                               </li>
                                                               <li>
                                                                       <a href="#content2">
                                                                               <img src="images/helo/CAPTAIN FISH.png"  class="img-responsive" width="485" height="600">
                                                                       </a>
                                                               </li>
                                                                <li>
                                                                       <a href="#content3">
                                                                           <img src="images/helo/MULTI.png" class="img-responsive" width="485" height="600">
                                                                       </a>
                                                               </li>
                                                               <li>
                                                                       <a href="#content4">
                                                                               <img src="images/helo/POWER 9.png"  class="img-responsive" width="485" height="600">
                                                                       </a>
                                                               </li>
                                                               <li>
                                                                       <a href="#content5">
                                                                               <img src="images/helo/KOALA KID.png"  class="img-responsive" width="485" height="600">
                                                                       </a>
                                                               </li>
                                                       </ul>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1 "></div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 ">
                                                        <!-- End of the Boutique HTML -->
                                                           <br>
                                                           <!--helo 1-->
                                                            <div id="content1" class="content">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center">C Bright Power</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div>
                                                                            <div class="txt_r r_title text-center">ลักษณะ</div>
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div class="txt_r r_title text-center">อาวุธประจำกาย</div>
                                                                        <div class="txt_r r_body text-center"> โล่วิเศษ ช่วยป้องกันไข้หวัด<br>
                                                                         เกราะคอลลาเจน ช่วยคุ้มกันพลังความกระจ่าง</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                                                                        <a href="download/C BRIGHT.pdf" target="_blank"><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 1-->

                                                            <!--helo 2-->
                                                            <div id="content2" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center">Captain Fish</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div>
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

                                                                        <a href="download/CAPTAIN FISH.pdf" target="_blank"> <button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 2-->

                                                             <!--helo 3-->
                                                            <div id="content3" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center">Multi Action</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div>
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

                                                                        <a href="download/MULTI.pdf" target="_blank"><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 3-->

                                                             <!--helo 4-->
                                                            <div id="content4" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center">Power 9</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div>
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

                                                                        <a href="download/POWER 9.pdf" target="_blank"><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--helo 4-->

                                                             <!--helo 5-->
                                                            <div id="content5" class="content" style="display:none">
                                                                 <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                       <div class="txt_r r_title_helo text-center">Koala Kid</div>
                                                                    </div>
                                                                 </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 ">
                                                                        <div>
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

                                                                        <a href="download/KOALA KID.pdf" target="_blank"><button type="submit" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" >ดาวน์โหลด</button></a>
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
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-12 ">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 ">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                <ul>
                                                                    <li><img src="images/helo/bu_selectHello2.png" class="img-responsive"><br></li>
                                                                    <li><a href="#" onclick="clickShow(1)"> <img src="images/helo/unclick/Blackmores Microsite_Button-02.png" class="img-responsive" ></a></li>
                                                                    <li><a href="#" onclick="clickShow(2)"><img src="images/helo/unclick/Blackmores Microsite_Button-04.png" class="img-responsive"></a></li>
                                                                    <li><a href="#" onclick="clickShow(3)"><img src="images/helo/unclick/Blackmores Microsite_Button-06.png" class="img-responsive"></a></li>
                                                                    <li><a href="#" onclick="clickShow(4)"><img src="images/helo/unclick/Blackmores Microsite_Button-08.png" class="img-responsive"></a></li>
                                                                    <li><a href="#" onclick="clickShow(5)"><img src="images/helo/unclick/Blackmores Microsite_Button-10.png" class="img-responsive"></a></li>
                                                                  </ul>

                                                            </div>
                                                       
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 ">
                                                            <div id ="detail_1" class = "detail_1   text-center heg_txt">
                                                                <div class="txt_r r_title_inline">C Bright Power2</div>
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
                                                                <div class="txt_r r_title_inline">Captain Fish</div>
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
                                                                <div class="txt_r r_title_inline">Power 9</div>
                                                              
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
                                                                <div class="txt_r r_title_inline">Multi Action</div>
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
                                                                <div class="txt_r r_title_inline">Koala Kid</div>
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
                                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>    
                 <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "> </div>         
            </div>
        </div>  
            
            
            
            
      
    </body>
</html>
