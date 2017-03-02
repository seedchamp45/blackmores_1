<?php include('header.php');?>
<div class="maintitle">Site Settings</div>
<?php
$act=isset($_GET['act'])?$_GET['act']:"";
 
if($act=='sub'){
$name=isset($_POST['site'])?$_POST['site']:"";
$siteurl=isset($_POST['siteurl'])?$_POST['siteurl']:"";
$keys=isset($_POST['keywords'])?$_POST['keywords']:"";
$desc=isset($_POST['descrp'])?$_POST['descrp']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$fbpage=isset($_POST['fbpage'])?$_POST['fbpage']:"";
$twitter=isset($_POST['twitter'])?$_POST['twitter']:"";
$pinterest=isset($_POST['pinterest'])?$_POST['pinterest']:"";
$google_plus=isset($_POST['google_plus'])?$_POST['google_plus']:"";
$auto=isset($_POST['auto'])?$_POST['auto']:"";
$template=isset($_POST['template'])?$_POST['template']:"";
	
$mysqli->query("UPDATE settings SET name='$name',siteurl='$siteurl',keywords='$keys',descrp='$desc',email='$email',fbpage='$fbpage',twitter='$twitter',pinterest='$pinterest',google_plus='$google_plus',template='$template' WHERE id=1");

if($_FILES["file"]["name"]!=''){
	 	   move_uploaded_file($_FILES["file"]["tmp_name"], "../images/logo.png");
	}?>
    
<div class="infomsgbox">Settings updated successfully.</div>  

<?php }


if($q = $mysqli->query("SELECT * FROM settings WHERE id='1'")){

    $s = mysqli_fetch_array($q);
	$q->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}


?>
<div class="box">
<div class="inbox">
<!--form-->
<form action="settings.php?act=sub" method="post" enctype="multipart/form-data">
<label class="artlbl">Site Name</label>
<div class="formdiv">
<input type="text" name='site' value='<?php echo $s['name']?>'/>
</div>
<label class="artlbl">Logo (264px x 49px)</label>
<div class="formdiv">
<input type='file' class="file" name='file'/>
</div>
<div class="clear"></div>
<label class="artlbl">Site Url (Without "http://" and end "/")</label>
<div class="formdiv">
<input type="text" name='siteurl' value='<?php echo $s['siteurl']?>'/>
</div>
<div class="clear"></div>
<label class="artlbl">Meta Keywords (Separated by Commas)</label>
<div class="formdiv">
<textarea name='keywords' cols=40 rows=5 ><?php echo $s['keywords']?></textarea>
</div>
<label class="artlbl">Meta Description</label>
<div class="formdiv">
<textarea name='descrp' cols=40 rows=5 ><?php echo $s['descrp']?></textarea>
</div>

<label class="artlbl">Email</label>
<div class="formdiv">
<input type="text" name='email' value='<?php echo $s['email']?>'/>
</div>

<label class="artlbl">Facebook URL</label>
<div class="formdiv">
<input type="text" name='fbpage' value='<?php echo $s['fbpage']?>'/>
</div>

<label class="artlbl">Twitter URL</label>
<div class="formdiv">
<input type="text" name='twitter' value='<?php echo $s['twitter']?>'/>
</div>

<label class="artlbl">Pinterest URL</label>
<div class="formdiv">
<input type="text" name='pinterest' value='<?php echo $s['pinterest']?>'/>
</div>

<label class="artlbl">Google+ URL</label>
<div class="formdiv">
<input type="text" name='google_plus' value='<?php echo $s['google_plus']?>'/>
</div>

<label class="artlbl">Template</label>
<div class="formdiv">
<select name="template" id="template">
<option value="<?php echo $s['template'];?>"><?php echo ucfirst($s['template']);?></option>
<?php
foreach(glob('../templates/*', GLOB_ONLYDIR) as $dir) {
	$TemplateDir = substr($dir, 13);
	$TemplateName = ucfirst($TemplateDir)
?>
<option value="<?php echo $TemplateDir;?>"><?php echo $TemplateName;?></option>
<?php }?>
</select>
</div>
<div class="clear"></div>

<br/>
<div class="formdiv">
<div class="sbutton"><input type="submit" id="submit" value="Update Site Settings"/></div>
</div>
</form>
</div>
</div><!--box-->
<?php include('footer.php');?>

 