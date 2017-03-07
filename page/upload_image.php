<?php
 include 'page/db.php' ;

  class Image{

   var 
   $image_id,
   $image_name,
   $image;
  
  function Insert_into_image(){
   if(isset($_post['upload']))
   {
        $tempname = $_FILES['txt_image']['tmp_name'];
        $originalname =$_FILES['txt_image']['name'];
        $size =($_FILES['txt_image']['size']/5242888). "MB<br>";
        $type=$_FILES['txt_image']['type'];
        $image=$_FILES['txt_image']['name'];
        move_uploaded_file($_FILES['txt_image']['tmp_name'],"uploaded_images/".$_FILES['txt_image']['name']);
      }

      else
      {
      	console.log('eiei');
      }


    $query = "Insert into blackmores
    (
     image_name,
     image
    )
    values
    (
     '$this->image_name',
     '$image'
    )";
    if(mysql_query($query)){
     echo "Insert success";
     console.log('eiei');
    }
    else
    {
     echo "Insert not success";
      console.log('no');
    }
  }

   function get_all_image_list(){
   $query = "select *from blackmores";
   $result = mysql_query($query);
   return $result;
  }

}
?>