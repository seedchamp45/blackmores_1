
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

</style>
<script>
 $(document).ready(function(){
     
   $("#age_18").click(function(){
     $("#title_age").val("1");
     changeAge("1");
   });
   
   $("#age_more_18").click(function(){
     $("#title_age").val("2");
      changeAge("2");
   });
   
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
 });
</script>
        
    </head>
<body>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

        <img src="images/send/txt_sent.png" class="img-responsive center-block">
    </div>
</div>
 <form action="page/upload.php" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
        <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5 ">
         
            <h1 class="text_title_work">1. ประเภทของผู้สมัคร</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                    <img src="images/send/bu_8.png" class="img-responsive" id ="age_18"  >
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                    <img src="images/send/bu_no_8_12.png" class="img-responsive" id ="age_more_18">
                </div>
                <input type="hidden" name="title_age"  id="title_age" value="xx" >
            </div>
               
              <h1 class="text_title_work">2. อัพโหลดผลงาน</h1>
              <div class="line-tabs">
                <img src="images/send/preview.png" class="no_block" id = "output" style="width: 250px; height: 200px;">
                
                <input type='file' class="file" accept="image/*" name="fileToUpload" id="fileToUpload"onchange="loadFile(event)"/>
                <script>
                  var loadFile = function(event) {
                  var output = document.getElementById('output');
                  output.src = URL.createObjectURL(event.target.files[0]);
                };
                </script>
                <!--  <img src="images/send/bu_upload.png"class=" no_block" style="width: 100px; height: 100px;" > -->
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5 ">
            <h1 class="text_title_work"> 3. ข้อมูลผู้สมัคร</h1>
               <div class="form-group">
                  <label for="exampleInputEmail1" class="text_title_small_work">อีเมล์</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Superhero@Blackmores.com">
                </div>
                <div class=form-inline">
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text_title_small_work">ชื่อ- นามสกุล</label><br>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Superhero - Blackmore">
                    </div>
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1" class="text_title_small_work">อายุ(ปี)</label>
                  <input type="text" class="form-control" id="age" name= "age" placeholder="8">
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1" class="text_title_small_work">เบอร์โทรศัพท์</label>
                  <input type="text" class="form-control" id="telephone" name= "telephone" placeholder="08x-xxx-xxxxx">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1" class="text_title_small_work">อีโร่ที่ส่งเข้าประกวด</label>
                <div class="form-group">

                    <select  name="categorywork" id="categorywork" class="form-control">
                      <option value="CaptianFish">Captian Fish</option>
                    </select>
                 </div>
                </div>
          
        </div>
         <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
    </div>     
   <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
            <br/><br/>
            <button type="submit" class="btn btn-default1 center-block " id = "submitButton" value="Upload Image" name="submit">ตกลง</button>
         </div>
   </div>
 </form>


</body>
</html>