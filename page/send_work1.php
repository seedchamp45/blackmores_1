<html>
    <head>
        <style>
            .text_title_work{
                font-family: "db_helvethaica_x";
               color: #1677BC;
               font-style:italic ;
               font-weight: bold;  
               font-size: 2.5em;
               display: block;
            }

             .text_title_small_work{
                font-family: "db_helvethaica_x";
               color: #1677BC;
               font-weight: bold;  
               font-size: 1.7em;
               display: inline;
            }



            .btn-default1 {
                 font-family: "db_helvethaica_x";
                color: #fff;
                font-weight: bold;  
                font-size: 1.7em;

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


            .image-upload > input
              {
                  display: none;
              }

            .image-upload img
            {
                width: 80px;
                cursor: pointer;
            }

            .image-upload{
                margin-top: 50px;
            }

            .name_pic{
                margin-left:5em;
            }

            .bg_upload{
                background-image: url("images/send/bg_upload_no.png");
                width: 250px;
                height: 200px;
               background-size: 250px 200px;

            }
            .txt_input{
               font-family: "db_helvethaica_x";
               color: #000;
               font-weight: bold;  
               font-size: 1.3em;
               display: block;
               text-align: center;
            }
            
            .input_inline{
                display: inline;
            }
            
            .form-control {
                display: block;
               
                height: 45px;
                padding: 6px 12px;
                line-height: 1.42857143;
                color: #555;
                border-width: 0px;
                background: rgba(238, 238, 238, 0) url(images/send/input_email.png);
              
                border: 0px solid #ccc;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                        box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                     -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
              }
              
            .form_input_type { 
                width: 400px;
                background-size: 400px 100%; 
            }
            
            .form_input_type2 { 
                width: 200px;
                background-size: 200px 100%; 
            }
            
             .form_input_type3 { 
                width: 300px;
                background-size: 300px 100%; 
            }
            
            .form_input_type4 { 
                width: 350px;
                background-size: 350px 100%; 
            }
            
            .form_input_type5 { 
                width: 250px;
                background-size: 250px 100%; 
                
            }
            .left_3em{
               margin-left: 3em; 
            }
            select {
                text-align: center;
                text-align-last: center;
                /* webkit*/
            }
            option {
                text-align: left;
                /* reset to left*/
            }
            
            .co_title{
                margin-left: 10px; 
            }
            
            .ruler_center{
                background-image: url("images/send/line_1.png");
                height:700px;
                width:5px;
            }
            
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: rgba(238, 238, 238, 0); 
                opacity: 1;
            }
            .error{
                color: red;
                font-size: 0.5em;
            }
            
                          
            .image-upload img {
                width: 80px;
                cursor: pointer;
                display: inline;
            }
            
            .background-main-rule{
                  background: url(images/newBackground.png) no-repeat center top local; 
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: 100% 100%;
                  margin-top: -300px;

                  background-attachment: fixed;
                  
                }
             
            @media only screen and (min-device-width: 361px) and (min-device-width: 990px ){
                .background-main-rule{
                  background: url(images/newBackground.png) no-repeat center top local; 
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: 100%;
                  margin-top: -300px;

                  background-attachment: fixed;
                  
                }

              .bg_upload{
                background-image: url("images/send/bg_upload_no.png");
                width: 100%;
              
               background-size: 100%;

            }
            }   

            body
            {
              background-size: 0px;
            }

            .birth{
                display: inline;
                display: inline;
                width: 100px;
            }
            
          
   

        </style>
        <script>
         $(document).ready(function(){
                
           $("#age_18").click(function(){
             $("#title_age").val("1");
             changeAge("1");
           });

            $("#day_birth").on('change', function() {
             changeBirth();
           });
            $("#month_birth").on('change', function() {
             changeBirth();
           });
            $("#year_birth").on('change', function() {
             changeBirth();
           });
           
           $("#age_more_18").click(function(){
             $("#title_age").val("2");
              changeAge("2");
           });
           
          
           $.validator.addMethod('customphone', function (value, element) {
             
                return this.optional(element) || /^\d{3}-\d{3}-\d{4}$/.test(value);
            }, "กรุณากรอกแบบ 08x-xxx-xxxxx");
           /* validate*/
          
           $('#contact-form').validate({
                ignore: "input[type='text']:hidden",
                rules: {
                    title_age:{
                        required: true,
                    },
                    name_parent: {
                        required: true,
                    },
                    name_pic:{
                        required: true,
                    },
                    name_child: {
                        required: true,
                    },
                     
                    
                    birthday: {
                        required: true,
                    },
                    telephone: {
                        customphone:true,
                        required: true,
                    },
                    email: {
                        required: false,
                        email: true
                    },
                    categorywork: { 
                       required: true 
                    }
                   
                },
                messages: {
                    title_age: "กรุณาเลือกช่วงอายุ",
                    name_parent: "กรุณากรอกชื่อ - นามสกุล (ผู้ปกครอง)",
                    name_child: "กรุณากรอกชื่อ - นามสกุล (เด็ก)",
                    telephone: {
                        required:"กรุณากรอกเบอร์โทร",
                    },
                    day_birth:"กรุณากรอกวันเกิด",   
                    month_birth:"กรุณากรอกเดือนเกิด" ,  
                    year_birth:"กรุณากรอกปีเกิด",   
                    email: "กรุณากรอกอีเมล์",
                    birthday:"กรุณากรอกวันเกิด",
                    name_pic:"กรุณาอัปโหลดรูปภาพ",
                    categorywork: "กรุณาเลือกอีโร่" ,
                    
                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass(' has-success has-feedback').addClass('has-error');
                },
                success: function (element) {
                   
                  //element.text('OK!').addClass('valid').closest('.form-group').removeClass('has-error').addClass(' has-success has-feedback');
                }
            });
           /**/
          
            function changeAge(age){
                var src1="images/send/bu_8.png";
                var src2="images/send/bu_no_8_12.png";
                var s_src1="images/send/bu_select_8.png";
                var s_src2="images/send/bu_select_8_12.png";

                if(age == 1) {
                   $("#age_18").attr("src", s_src1);
                    $("#age_more_18").attr("src", src2);
                }else{
                   $("#age_18").attr("src", src1);
                    $("#age_more_18").attr("src", s_src2);
                }
            }
            
           function changeBirth(){
              if($("#day_birth").val() != "" && $("#month_birth").val() != "" && $("#year_birth").val() != "" ){
                   //alert("xxxxxxxxxxxxxxx");
                   $("#birthday").val($("#month_birth").val()+'/'+$("#day_birth").val()+'/'+$("#year_birth").val());
             }else{
                     $("#birthday").val("");
               }
           }
            
         });
        </script>
       
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
<body>
<div class = "background-main-rule">
    <div style="padding: 40px;">
    
    
    <!-- desktop-->
    <div class="hidden-xs">
        <br><br><br><br><br><br><br><br><br><br><br><br>
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
               <img src="images/send/txt_sent.png" class="img-responsive center-block">
           </div>
       </div>
        <form action="page/upload.php" method="post" enctype="multipart/form-data" class="form-horizontal" id="contact-form" >

           <div class="row">
               <div class="hidden-xs  col-sm-1 col-md-1 col-lg-1 "></div>
               <div class="col-xs-12 col-sm-11 col-md-5 col-lg-5 ">




                   <h1 class="text_title_work">1. ประเภทของผู้สมัคร</h1>

                   <div class="row">

                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                           <img src="images/send/bu_8.png" class="img-responsive" id ="age_18"  >
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                           <img src="images/send/bu_no_8_12.png" class="img-responsive" id ="age_more_18">
                       </div>
                         <div class="form-group" style="margin-left: 50px;">
                            <input type="hidden" name="title_age"  id="title_age" value="" >
                        </div>
                   </div>
                   <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                           <h1 class="text_title_work">2. อัพโหลดผลงาน</h1>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                           <div class="line-tabs">
                               <div class="bg_upload">
                                    <img class="img-responsive check-screen-pic" id = "output-t" style="width: 250px; height: 200px;">
                               </div>




                                  <script>
                                  
                                       var loadFile = function(event) {
                                      // $(".removeMobile").removeClass();
                                       var outputs = document.getElementById('output-t');
                                       outputs.src = URL.createObjectURL(event.target.files[0]);

                                       var outputss = document.getElementById('output-s');
                                       outputss.src = URL.createObjectURL(event.target.files[0]);


                                      document.getElementById('name_pic').value = event.target.files[0].name;
                                      document.getElementById('name_pic-t').value = event.target.files[0].name;
                                     };

                                    

                                     var angle = 0;
                                                                       $('.rotate').on('click', function() {
                                                               angle += 45;
                                                               $('#output-s').css('transform','rotate(' + angle + 'deg)');
                                                                       });
                                                                        $('.rotate').on('click', function() {
                                                               angle += 45;
                                                               $('#output-t').css('transform','rotate(' + angle + 'deg)');
                                                                       });
                                     </script>

                           </div>
                       </div>

                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                           <div class="image-upload hidden-xs">
                               <img src="images/send/rotate.png" class="img-responsive rotate" style = "margin-top: 20 px; width:50;">  
                              <!--  <label for="file-input"> -->
                                 <img src="images/send/bu_upload.png"/>
                          <!--      </label> -->

                             
                           </div>
                           <input id="file-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload" onchange="loadFile(event)" style="margin-top: -50px; margin-left: 50px; opacity: 0;" />

                       </div>
                   </div>

                   <div class="row">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                               <!--disabled-->
                               <div class="form-group" style="margin-left: 50px;">
                                   <input type="text" class="form-control txt_input form_input_type5" id="name_pic" name="name_pic"  >
                               </div>
                       </div>
                   </div>
               </div>
               <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 ">
                   <div class="ruler_center" ></div>
               </div>
               <div class="col-xs-12 col-sm-11 col-md-5 col-lg-5 ">
                   <h1 class="text_title_work"> 3. ข้อมูลผู้สมัคร</h1>
                    <div class="row co_title">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                           <div class=form-inline">
                               <div class="form-group">
                                   <label for="exampleInputPassword1" class="text_title_small_work">ชื่อ- นามสกุล ( ผู้ปกครอง )</label><br>
                                   <input type="text" class="form-control txt_input form_input_type" name="name_parent" id="name_parent" placeholder="Superhero  Blackmore">
                               </div>
                           </div>

                           <div class=form-inline">
                               <div class="form-group">
                                   <label for="exampleInputPassword1" class="text_title_small_work">ชื่อ- นามสกุล ( เด็ก )</label><br>
                                 <input type="text" class="form-control txt_input form_input_type" name="name_child" id="name_child" placeholder="Superhero  Blackmore">
                               </div>
                           </div>

                            <div class=form-inline">
                               <div class="form-group">
                                   <label for="exampleInputPassword1" class="text_title_small_work">เดือน/วัน/ปีเกิด ( เด็ก )</label><br>
                                    
                                 
                                    <select  name="day_birth" id="day_birth" class="form-control form_input_type4 txt_input birth">
                                     <option value="" class="center-block txt_input" >วัน</option>
                                     <?php
                                         for($i=1 ; $i<=31 ;$i++){
                                             echo '<option value="'.$i.'" class="center-block txt_input">'.$i.'</option>';
                                         }
                                     ?>
                                    </select>

                                     <select  name="month_birth" id="month_birth" class="form-control form_input_type4 txt_input birth">
                                     <option value="" class="center-block txt_input" >เดือน</option>
                                     <?php
                                         for($i=1 ; $i<=12 ;$i++){
                                             echo '<option value="'.$i.'" class="center-block txt_input">'.$i.'</option>';
                                         }
                                     ?>
                                    </select>

                                     <select  name="year_birth" id="year_birth" class="form-control form_input_type4 txt_input birth">
                                     <option value="" class="center-block txt_input" >ปี</option>
                                     <?php
                                         for($i=2547 ; $i<=2559 ;$i++){
                                             echo '<option value="'.$i.'" class="center-block txt_input">'.$i.'</option>';
                                         }
                                     ?>
                                    </select>
                                   
                                   
                                   <input type="hidden"  id="birthday" class="form-control txt_input form_input_type2" name="birthday" placeholder="ดด/วว/ปป"> 
                                
                               </div>
                           </div>

                           <div class="form-group">
                             <label for="exampleInputPassword1" class="text_title_small_work">เบอร์โทรศัพท์</label>
                             <input type="text" class="form-control txt_input  form_input_type3" id="telephone" name= "telephone" placeholder="08x-xxx-xxxxx">
                           </div>


                           <div class="form-group">
                              <label for="exampleInputEmail1" class="text_title_small_work">อีเมล์</label>
                              <input type="email" class="form-control txt_input  form_input_type4" name="email" id="email" placeholder="Superhero@Blackmores.com">
                            </div>

                            <div class="form-group">
                               <label for="exampleInputPassword1" class="text_title_small_work">อีโร่ที่ส่งเข้าประกวด</label>

                                   <select  name="categorywork" id="categorywork" class="form-control form_input_type4 txt_input">
                                    <option value="" class="center-block txt_input" >---</option>
                                    <option value="CaptianFish" class="center-block txt_input">Captian Fish</option>
                                    <option value="BrightPower" class="center-block txt_input">Bright Power</option>
                                    <option value="PowerNine" class="center-block txt_input">Power 9</option>
                                    <option value="MultiAction" class="center-block txt_input">Multi Action</option>
                                    <option value="KoalaKid" class="center-block txt_input">Koala Kid</option>
                                   </select>

                           </div>
                       </div>
                   </div>
               </div>     
           </div>
          <div class="row"> 
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
                   <br/><br/><br/>
                   <button type="submit" class="btn btn-default1 center-block " id = "submitButton" value="Upload Image" name="submit">ตกลง</button>
                </div>
          </div>

        </form>
       
    </div>
    </div>
     <img src="images/footer.png" style="width: 100%;" />
    <!-- desktop-->
</div>
      
</body>
</html>
