
          
<html>
    <head>
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
                    container_height: 600,
                        autoplay: false
                    });
                    
                $( "#title_hero" ).change(function() {

                alert(" "+$(this).val());
                //$("#content1").removeClass("active");
                $("#content"+$( "#name_type" ).val()).removeClass("in");
                $("#content"+$( "#name_type" ).val()).removeClass("active");
                alert("2222222 ");
                $("#content"+$(this).val()).addClass("in");
                $("#content"+$( this).val()).addClass("active");
                alert("3333 ");
                $( "#name_type" ).val($(this).val());
             });    
            });
            
             
             
            function move_callback(anchor, instance, framenumber){
                var res = anchor.split("_");
                var i1 = res[1]-1;    
            }

            $('.#').click(function(e) {
              e.preventDefault();
            });
                $('.content_1').click(function(e) {
              e.preventDefault();
            });
                    $('.content_3').click(function(e) {
              e.preventDefault();
            });
                        $('.content_4').click(function(e) {
              e.preventDefault();
            });
                            $('.content_5').click(function(e) {
              e.preventDefault();
            });

			// Link-click callback function:
            function link_callback(anchor, instance){
                
                var cars = ["C BRIGHT.jpeg", "CAPTAIN FISH.jpeg","MULTI.jpeg","POWER 9.jpeg","KOALA KID.jpeg"];
                var name = ["C Bright Power","Captain Fish","Multi Action","Power 9","Koala Kid"];
                var res = anchor.split("_");
                var i1 = res[1]-1;
                 $($('#img_src_1').attr("data-target")).modal("show");
                 $("#select_hero").attr("src","images/helo/txt_"+name[i1]+".png");
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
                 event.preventDefault();
            }
        </script>
       
                
        <style>
            .bg_winner{
                /*background-image: url("images/winner/bg_winner.png");*/
                    background: url(images/gallery/bg_winner.png) ; 
                 background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: center top;
                margin-right: -15%;
                margin-left: -15%;
                margin-top: 3%;
                margin: auto;
            }
            #alert_pic
            {
              height: 200px;
              margin: auto;
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
                font-size: 2.5em;
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
                font-size: 2em;
                font-weight: normal;
            }
            
            
            
            .r_body_inline{
                color: #000;
                font-size:3.2em;
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
             @media (min-width: 480px){
                 .iden{
                    padding-left: 0px; 
                 }
                 .r_body_inline{
                    color: #000;
                    font-size:2em;
                   display: inline;
                }
             }
            
             
            @media (min-width: 768px){
               
                .r_body1{
                    color: #000;
                    font-size: 1em;
                    font-weight: normal;
                }
                
                .r_title1{
                    color: #F99F00;
                    font-size: 1em;
                    font-weight: normal;
                }
                
                .bg_winner{
                  height: 1600px;
                   
                 }
                   
                .bg_select_8_12{
                    background: url(images/helo/bg_select_8_12.png) no-repeat center top local; 
                   -webkit-background-size: cover;
                   -moz-background-size: cover;
                   -o-background-size: cover;
                   background-size: 100% 100%;

                   width: 100%;  
                   height:20%;
                }
                
                 .heg1_txt{
                    margin-top: 30px;

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
                 .heg1_txt{
                    margin-top: 50px;
                } 
                
                .r_title1{
                     color: #F99F00;
                    font-size: 1.6em;
                    font-weight: normal;
                }
                .r_body1{
                    color: #000;
                    font-size: 1.6em;
                    font-weight: normal;
                }
                .bg_select_8_12{
                    background: url(images/helo/bg_select_8_12.png) no-repeat center top local; 
                   -webkit-background-size: cover;
                   -moz-background-size: cover;
                   -o-background-size: cover;
                   background-size: 100% 100%;

                   width: 100%;  
                   height:30%;
                }
            }
            @media (min-width: 1200px){
                 .heg_txt{
                    height: 5.3em;
                } 
                
                .heg1_txt{
                    margin-top: 50px;

                } 
                
                .r_title1{
                     color: #F99F00;
                    font-size: 2em;
                    font-weight: normal;
                }
                
                .r_body1{
                    color: #000;
                    font-size: 2em;
                    font-weight: normal;
                }
                
                .bg_select_8_12{
                    background: url(images/helo/bg_select_8_12.png) no-repeat center top local; 
                   -webkit-background-size: cover;
                   -moz-background-size: cover;
                   -o-background-size: cover;
                   background-size: 100% 100%;

                   width: 100%;  
                   height:40%;
                }
            }
            .c_h{
                position: relative;
                top: 50%;
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
                background-size: 100%;
                margin-top: -300px;

                background-attachment: fixed;

            }

                        @media (min-width: 320px){
                .background-main-rule
            {
                background: url(images/newBackground.png) no-repeat center top local !important; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: 100% 150% !important; 
                margin-top: -300px;
                                      overflow-x: hidden;
overflow-y: scroll;
                background-attachment: fixed;

            }

            .show-case-pic
            {
                margin-top: 40px;
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
                .iden{
                    padding-left: 0px; 
                 }
                 .r_body_inline{
                    color: #000;
                    font-size:2em;
                   display: inline;
                }
                .show-case-pic {
                    margin-top: 10px;
                }
                
                .r_body_inline {
                    color: #000;
                    font-size: 1.4em;
                    display: inline;
                }
                
                .r_body_italic {
                    font-family: "db_helvethaica_x";
                    color: #0075C9;
                    font-size: 2em;
                    font-style:italic;
                    font-weight: bold;
                }
                
                .modal-dialog {
                    margin-top: 0%;
                    width: 90%;
                    height: 100%;
                }
                
            
                .r_body{
                    color: #000;
                    font-size: 1.8em;
                    font-weight: normal;
                }



                .r_body_inline{
                    color: #000;
                    font-size:1.2em;
                   display: inline;
                }
                
                .background-main-rule
                {
                    background: url(images/mobile/bg_mobile.png) no-repeat center top local; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    /*background-size: 100%;*/
                    margin-top: -300px;

                    background-attachment: fixed;

                }
                
                .main-body {
                    background: url(images/mobile/bg_mobile.png) no-repeat center top local;
                    background-image-size: 100% 100%;
                    background-repeat: no-repeat;
                    background-position: left top;
                    background-attachment: scroll;
                    background-size: 100% 100%;
                }
                
                .r_title1_blue{
                    color: #4e9bda;
                    font-size: 2.3em;
                    font-weight: bold;
                    
                }
                
                .r_title1_yellow{
                    color: #ffb41f;
                    font-size: 2.3em;
                    font-weight: bold;
                }
                
                .r_title1_pink{
                    color: #ec6893;
                    font-size: 2.3em;
                    font-weight: bold;
                }
                
                .r_title1_blue2{
                    color: #2b3990;
                    font-size: 2.3em;
                    font-weight: bold;
                }
            
                .r_title1_Orange{
                    color: #fb8022;
                    font-size: 2.3em;
                    font-weight: bold;
                }
                 .r_body1{
                    color: #000;
                    font-size: 2em;
                    font-weight: normal;
                }

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
            
            @media (max-width: 480px){
                 .iden{
                    padding-left: 0px; 
                 }
                 .r_body_inline{
                    color: #000;
                    font-size:2em;
                   display: inline;
                }
                .show-case-pic {
                    margin-top: 10px;
                }
                
                .r_body_inline {
                    color: #000;
                    font-size: 1.4em;
                    display: inline;
                }
                
                .r_body_italic {
                    font-family: "db_helvethaica_x";
                    color: #0075C9;
                    font-size: 2em;
                    font-style:italic;
                    font-weight: bold;
                }
                
                .modal-dialog {
                    margin-top: 0%;
                    width: 90%;
                    height: 100%;
                }
                
            
                .r_body{
                    color: #000;
                    font-size: 1.8em;
                    font-weight: normal;
                }



                .r_body_inline{
                    color: #000;
                    font-size:1.2em;
                   display: inline;
                }
                
                .background-main-rule
                {
                    background: url(images/mobile/bg_mobile.png) no-repeat center top local; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: 100%;
                    margin-top: -300px;

                    background-attachment: fixed;

                }
                
                .main-body {
                    background: url(images/mobile/bg_mobile.png) no-repeat center top local;
                    background-image-size: 100% 100%;
                    background-repeat: no-repeat;
                    background-position: left top;
                    background-attachment: scroll;
                    background-size: 100% 100%;
                }
                
                .r_title1_blue{
                    color: #4e9bda;
                    font-size: 1.3em;
                    font-weight: bold;
                    
                }
                
                .r_title1_yellow{
                    color: #ffb41f;
                    font-size: 1.3em;
                    font-weight: bold;
                }
                
                .r_title1_pink{
                    color: #ec6893;
                    font-size: 1.3em;
                    font-weight: bold;
                }
                
                .r_title1_blue2{
                    color: #2b3990;
                    font-size: 1.3em;
                    font-weight: bold;
                }
            
                .r_title1_Orange{
                    color: #fb8022;
                    font-size: 1.3em;
                    font-weight: bold;
                }
                  .r_body1{
                    color: #000;
                    font-size: 1.2em;
                    font-weight: normal;
                }
                
            }
            
            .bg_block_hero2
              {
                    background: url(images/mobile/bg_block_hero2.png) no-repeat center top local; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    height: 100%;
                    top: 20px;

                }
        .scrollview-text {
            height: 500px;
            margin-top: 20px;
            overflow: auto;

            
        }
            
        </style>
    </head>
    <body>
        
        <div class="background-main-rule">
            <div class="visible-xs"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
        
            <div class="container">
                <div class="row">
                    <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                        <img src="images/helo/select_hello_title.png" class="img-responsive center-block show-case-pic" width="50%" height="50%">
                        <br>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-10">     
                        <img src="images/mobile/pop_txt_8_12.png" class="img-responsive center-block" width="90%" height="90%">
                        <div class="row">
                            <div class="bg_block_hero2">
                             <div class="scrollview-text">
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                   <br>
                                     
                                    <!--1-->
                    
                                   <!--2-->
                                    <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <img src="images/mobile/icon/CB.png" class="img-responsive center-block show-case-pic" width="50%" height="50%"><br>
                                                <dt class="txt_r r_title1_yellow text-center yellow heg_txt">
                                                    <div class="c_h">ลักษณะ<br></div>
                                                </dt>       
                                                 <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ฮีโร่สาวผิวสุขภาพดี ขาวกระจ่างใสมีออร่า<br> สวยสะกด</div><br>
                                                </dt> 
                                                <dt class="txt_r r_title1_yellow text-center yellow heg_txt">
                                                    <div class="c_h">ความสามารถพิเศษ</div>
                                                </dt>        
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">มีภูมิคุ้มกันพิเศษป้องกัน ไข้หวัดในทุกสภาพอากาศ</div><br>
                                                </dt>    
                                                <dt class="txt_r r_title1_yellow text-center yellow heg_txt">
                                                    <div class="c_h">อาวุธประจำกาย</div>
                                                </dt>   
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">โล่วิเศษ ช่วยป้องกันไข้หวัด<br> เกราะคอลลาเจน ช่วยคุ้มกัน พลังความกระจ่างใสของผิว</div>
                                                </dt> 
                                            </div>
                                        <br>
                                     </div>

                                                    <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <img src="images/mobile/icon/CPF.png" class="img-responsive center-block show-case-pic" width="50%" height="50%"><br>
                                                <dt class="txt_r r_title1_blue text-center yellow heg_txt">
                                                    <div class="c_h">ลักษณะ<br></div>
                                                </dt>       
                                                 <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ฮีโร่หนุ่มหล่อเจ้าแห่งท้องทะเล รูปร่างปราดเปรียว<br> คล่องแคล่ว ว่องไว</div><br>
                                                </dt> 
                                                <dt class="txt_r r_title1_blue text-center yellow heg_txt">
                                                    <div class="c_h">ความสามารถพิเศษ</div>
                                                </dt>        
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">เป็นคนสมองดี คิดอะไรได้รวดเร็ว เฉลียวฉลาด <br> วางแผนเก่ง แก้ปัญหาเฉพาะหน้าได้ดี</div><br>
                                                </dt>    
                                                <dt class="txt_r r_title1_blue text-center yellow heg_txt">
                                                    <div class="c_h">อาวุธประจำกาย</div>
                                                </dt>   
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">พลังคลื่นปลาทะเล</div>
                                                </dt> 
                                            </div>
                                         <br>
                                     </div>
                                   <!--3-->
                                    <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <img src="images/mobile/icon/P9.png" class="img-responsive center-block show-case-pic" width="50%" height="50%"><br>
                                                <dt class="txt_r r_title1_pink text-center yellow heg_txt">
                                                    <div class="c_h">ลักษณะ<br></div>
                                                </dt>       
                                                 <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ฮีโร่คุณแม่ยังสาว ร่างกายแข็งแกร่งทุกสัดส่วน <br>อ่อนโยน จิตใจดี รักความยุติธรรม</div><br>
                                                </dt> 
                                                <dt class="txt_r r_title1_pink text-center yellow heg_txt">
                                                    <div class="c_h">ความสามารถพิเศษ</div>
                                                </dt>        
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ทำกิจกรรมหลายอย่างพร้อมกันได้<br>อย่างรวดเร็ว</div><br>
                                                </dt>    
                                                <dt class="txt_r r_title1_pink text-center yellow heg_txt">
                                                    <div class="c_h">อาวุธประจำกาย</div>
                                                </dt>   
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ขวดนม เพิ่มพลังให้คนรอบข้าง</div>
                                                </dt> 
                                            </div>
                                        <br>
                                     </div>
                                   <!--4-->
                                    <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <img src="images/mobile/icon/Multi.png" class="img-responsive center-block show-case-pic" width="50%" height="50%"><br>
                                                <dt class="txt_r r_title1_blue2 text-center yellow heg_txt">
                                                    <div class="c_h">ลักษณะ<br></div>
                                                </dt>       
                                                 <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ฮีโร่คู่รักจอมพลัง มีความแข็งแรงเป็นเลิศ</div><br>
                                                </dt> 
                                                <dt class="txt_r r_title1_blue2 text-center yellow heg_txt">
                                                    <div class="c_h">ความสามารถพิเศษ</div>
                                                </dt>        
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">คู่รักสุดฟิต รักการออกกำลังกายเป็นชีวิตจิตใจ<br> มีพละกำลังมหาศาล ยกของหนักได้อย่างง่ายดาย</div><br>
                                                </dt>    
                                                <dt class="txt_r r_title1_blue2 text-center yellow heg_txt">
                                                    <div class="c_h">อาวุธประจำกาย</div>
                                                </dt>   
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">เข็มขัดวิเศษ สามารถปรับเพิ่มพลังได้ตามที่ต้องการ</div>
                                                </dt> 
                                            </div>
                                        <br>
                                     </div>
                                   <!--5-->
                                    <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <img src="images/mobile/icon/Kola.png" class="img-responsive center-block show-case-pic" width="50%" height="50%"><br>
                                                <dt class="txt_r r_title1_Orange text-center yellow heg_txt">
                                                    <div class="c_h">ลักษณะ<br></div>
                                                </dt>       
                                                 <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ฮีโร่เด็กน้อย ตัวเล็กแต่ใจใหญ่ มีนิสัยร่าเริง<br> ซุกซุน กระฉับกระเฉง</div><br>
                                                </dt> 
                                                <dt class="txt_r r_title1_Orange text-center yellow heg_txt">
                                                    <div class="c_h">ความสามารถพิเศษ</div>
                                                </dt>        
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ฉลาดหลักแหลม วิ่งเร็วเหมือนสายฟ้า และมีพลังกระโดดสูง</div><br>
                                                </dt>    
                                                <dt class="txt_r r_title1_Orange text-center yellow heg_txt">
                                                    <div class="c_h">อาวุธประจำกาย</div>
                                                </dt>   
                                                <dt class="txt_r r_body1 text-center heg_txt">
                                                    <div class="c_h">ปืนวิเศษ สามารถยิงพลัง</div>
                                                </dt> 
                                            </div>
                                        <br>
                                     </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-1"></div>

                </div>
                </div>
                 
            </div>
             <img src="images/footer.png" style="width: 100%;" />
        </div> 
  
      
    </body>
</html>