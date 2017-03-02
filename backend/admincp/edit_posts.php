<?php include("header.php");

$id = $mysqli->escape_string($_GET['id']);

?>
<div class="maintitle">Edit Listing</div>

<script>
$(document).ready(function()
{
    $('#FileUploader').on('submit', function(e)
    {
        e.preventDefault();
        $('#submit').attr('disabled', ''); // disable upload button
        //show uploading message
        $("#loadding").html('<div class="loader"><img src="images/ajax-loader.gif" alt="Please Wait"/> <br/><span>Uploading...</span></div>');
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    //$('#FileUploader').resetForm();  // reset form
    $('#submit').removeAttr('disabled'); //enable submit button
    $('#loadding').html('');
}
</script>

<?php

if($q = $mysqli->query("SELECT * FROM posts WHERE id='$id'")){

    $s = mysqli_fetch_array($q);
	$ncid = $s['catid'];
	$q->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}
?>

<div id="loadding"></div>
<div id="output"></div>

<div class="box">
<div class="inbox">
<form action="edit.php?id=<?php echo $id?>" id="FileUploader" enctype="multipart/form-data" method="post">

<label class="artlbl" for="cat">Category:</label>
<div class="formdiv">
<select name="category" id="category">

<?php
if($CatSelected = $mysqli->query("SELECT * FROM categories WHERE id=$ncid LIMIT 1")){

($CatSelectedRow = mysqli_fetch_array($CatSelected))
		
?>   
	<option value="<?php echo $CatSelectedRow['id'];?>"><?php echo $CatSelectedRow['cname'];?></option>
<?php     
	
$CatSelected->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}
?>

<?php
if($CatSql = $mysqli->query("SELECT * FROM categories ORDER BY cname ASC")){

    while ($CatRow = mysqli_fetch_array($CatSql)){
		
?>   
	<option value="<?php echo $CatRow['id'];?>"><?php echo $CatRow['cname'];?></option>
<?php     
	}
$CatSql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}
?>
</select>
</div>
<div class="clear"></div>

<label class="artlbl">Link</label>
<div class="formdiv"><input  name="mLink" id="mLink" class="biginput" type="text" value="<?php echo $s['url'];?>"/></div>


<label class="artlbl">Title</label>
<div class="formdiv"><input  name="mName" id="mName" class="biginput" type="text" value="<?php echo $s['title'];?>"/></div>


<label class="artlbl">Description</label>
<div class="formdiv">
<textarea name="disc" id="disc" cols=40 rows=5 ><?php echo $s['description'];?></textarea>
</div>


<div class="formdiv">
<div class="sbutton"><input type="submit" id="submit" value="Update Post"/></div>
</div>
</form>	
</div>
</div>
<?php include("footer.php");?>