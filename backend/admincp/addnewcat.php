<?php include("header.php");?>
<div class="maintitle">Add New Category</div>

<?php
$act=isset($_GET['act'])?$_GET['act']:"";
if($act=='sub'){
$cat = $mysqli->escape_string($_POST['cat']);
$disc = $mysqli->escape_string($_POST['disc']);


$addcat =$mysqli->query("INSERT INTO categories(cname,description)VALUES ('".$cat."','".$disc."')");?>
<div class="infomsgbox">New category added successfully</div>
<?php }?>

<div class="box">
<div class="inbox">
<form name="newcat" action="addnewcat.php?act=sub" method="post">
<label class="artlbl" for="cat">Category Name:</label>
<div class="formdiv"><input  name="cat" class="biginput" type="text" value=""/></div>

<label class="artlbl">Category Description</label>
<div class="formdiv">
<textarea name='disc' cols=40 rows=5 ></textarea>
</div>

<div class="formdiv"><input type="submit" id="submit"value='Save Category'/></div>
</form>
</div>
</div>	
<?php include("footer.php");?>