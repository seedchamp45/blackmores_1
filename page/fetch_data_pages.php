<?php
$i=0;
while($i<4){ //fetch values
    $i++;
	//echo '<li> <img src="./images/home_body_left.png" class=" img-responsive center-block"/> '.$id.') <strong>'.$name.'</strong> : '.$message.'</li>';	

    echo'<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
          <div class="thumbnail">
              <img src="images/gallery/image_gallery.jpg" class=" img-responsive center-block" style="height: 200px; width: 100%; display: block;"/>
                <div class="caption " >
                     <div class="row row_h_1_em ">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                           <br>
                         </div>
                         <div class="col-xs-12  col-sm-5 col-md-5 text-left">
                            <small class="margin_left_5">ดช. ชิโนรส ประดับลาย1 </small> 
                         </div>
                          <div class="col-xs-12  col-sm-3 col-md-4  ">
                            <small  class="margin_left_5"> อายุ 15 ปี</small>
                         </div>
                          <div class="col-xs-12 col-sm-4 col-md-3 text-right">
                           <small  class="margin_right_5"> .75.โหวต</small> 
                         </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                           <br>
                         </div>
                     </div>

                </div>
              
              <div class="center-block text-center row_h_1">
                    <button type="submit" class="btn btn-default1  center-block " data-toggle="modal" data-target=".bs-example-modal-lg" >โหวต</button>
                 </div>
          </div>
       </div>';
}

//echo  '<button type="button" class="btn btn-primary btn-lg des_img" data-toggle="modal" data-target="#myModal" value="'.$id.'">โหวตเลย</button>;
//<a href="#" class="btn btn-default1 img-responsive" role="button" value="'.$id.'" >โหวตเลย</a>
?>

