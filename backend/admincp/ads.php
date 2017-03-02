<?php include('header.php');?>
<div class="maintitle">Mange Advertisements</div>

<?php
$act=isset($_GET['act'])?$_GET['act']:"";
 
if($act=='sub'){
$ad1=isset($_POST['ad1'])?$_POST['ad1']:"";
$ad2=isset($_POST['ad2'])?$_POST['ad2']:"";

$mysqli->query("UPDATE siteads SET ad1='$ad1',ad2='$ad2' WHERE id=1");

?>
    
<div class="infomsgbox">Site advertisments updated successfully.</div>  

<?php }


if($q = $mysqli->query("SELECT * FROM siteads WHERE id='1'")){

    $s = mysqli_fetch_array($q);
    $q->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}


?>
<div class="box">
<div class="inbox">
<!--form-->
<form action="ads.php?act=sub" method="post" enctype="multipart/form-data">
<label class="artlbl">HTML/JavaScript ads. (300 x 250)</label>
<div class="formdiv">
<textarea name='ad1' cols=40 rows=10 ><?php echo $s['ad1']?></textarea>
</div>
<label class="artlbl">HTML/JavaScript ads. (300 x 250)</label>
<div class="formdiv">
<textarea name='ad2' cols=40 rows=10 ><?php echo $s['ad2']?></textarea>
</div>

</br>
<div class="formdiv">
<div class="sbutton"><input type="submit" id="submit" value="Update Site Ads"/></div>
</div>
</form>

</div>
</div><!--box-->
<?php include('footer.php');?>

 