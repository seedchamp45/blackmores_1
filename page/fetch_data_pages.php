<script>
$(function(){
    $(".select_image").click(function(){
       // $("#name_pic").val("2");
        load_data_image(this.value);
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
            $(".vote_value").html("55");
            $(".title_value").html("result.name");
            $(".image_value").attr("src","page/upload/"+result.image);
            
             //โชว์ popup
            $($(".select_image").attr("data-target")).modal("show");
            
        }
        
        function ajaxError() {
            alert("error");                          
        }
    }
    
});

</script>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blackmores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
  

// Check connection
if ($conn->connect_error) {
  echo 'error';
}
else
{
   
} 


$sql = "SELECT * FROM image_upload";
$result = mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
// $rowdata = mysql_fetch_array($result)



$i=0;
while($rowdata = mysqli_fetch_assoc($result)){ //fetch values
    

    $pic = $rowdata['image'];

    $username = $rowdata['username'];

    $age = $rowdata['age'];
    $image_id = $rowdata['image_id'];
	//echo '<li> <img src="./images/home_body_left.png" class=" img-responsive center-block"/> '.$id.') <strong>'.$name.'</strong> : '.$message.'</li>';	

    echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" >
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
                            <div class="txt_gallery_detail inline"><img src="images/gallery/star_0.png" class="img-responsive img_inline" > <div class="vote_gallery" >75 โหวต</div> </div> 
                       </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                         <br>
                       </div>
                   </div>

              </div>

            <div class="center-block text-center row_h_1">
                
                    <button type="submit" id="select_image" class="btn btn-default1  center-block txt_bu_gallery select_image"  data-target=".bs-example-modal-lg" value="'. $rowdata['image_id'].'">โหวตเลย1</button>
               </div>
        </div>
       </div>';
}


// <input type="button" class="filter" name="filter" value="'.$image_id.'" /> 
// <button type="submit" id="select_image" class="btn btn-default1  center-block txt_bu_gallery" data-toggle="modal" data-target=".bs-example-modal-lg" value="'. $rowdata['image_id'].'">โหวตเลย1</button>
//echo  '<button type="button" class="btn btn-primary btn-lg des_img" data-toggle="modal" data-target="#myModal" value="'.$id.'">โหวตเลย</button>;
//<a href="#" class="btn btn-default1 img-responsive" role="button" value="'.$id.'" >โหวตเลย</a>
?>
