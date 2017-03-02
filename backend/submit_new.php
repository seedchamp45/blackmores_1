<?php include('header.php');?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">
<div class="ptitle-bar"><h1>Post something nice!!</h1></div>

<?php
if(!isset($_SESSION['username'])){?>
<div class="slog-reg">Please <a class="login-box" href="login.html">login</a> or <a href="register.html">register</a> to submit a post</div>
<?php }else{?>

<script>
$(document).ready(function()
{
    $('#FromNew').on('submit', function(e)
    {
        e.preventDefault();
        $('#submit').attr('disabled', ''); // disable upload button
        //show uploading message
        $("#output").html('<div class="redirecting">Submiting. Please wait...</div>');
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
	//$('#FromNew').resetForm();  // reset form
    $('#submit').removeAttr('disabled'); //enable submit button
    $('#loadding').html('');
}
</script>

<div id="output"></div>
<div class="theForm">
<form action="submit_post.php" id="FromNew" enctype="multipart/form-data" method="post">

    <label>Category
    <span class="small">Please select a category</span>
    </label>
    <select name="category" id="category">
	<option value="">Select a Category</option>
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
    
    <label>Image
    <span class="small">(Min: 275x275 px, Max File Size: 500 KB)</span>
    </label>
    <input type='file' class="file" name="mFile" id="mFile"/>
    
    <label>Link
    <span class="small">(Do not enter homepage url)</span>
    </label>
    <input type="text" name="mLink" id="mLink" />
    
    <label>Title
    <span class="small">Add a catchy title</span>
    </label>
    <input type="text" name="mName" id="mName" />
    
         
     <label>Description
     
    </label>
    <textarea name="disc" id="disc" cols=40 rows=5 ></textarea>
    
    <button type="submit" class="btns" id="submitButton">Submit</button>
    <div class="spacer"></div>
</form>
</div> <!--the form-->
<?php }?>
</div><!--post-box-->
</div><!--left-box-->
<div class="right-box">
<?php if(!empty($Ad1)){ ?>
<div class="r-box">
<?php echo $Ad1;?>
</div><!--r-box-->
<?php }?>

<?php if(!empty($FbPage)){ ?>
<div class="r-box">
<div class="fb-like-box" data-href="<?php echo $FbPage;?>" data-width="292" data-show-faces="false" data-stream="false" data-show-border="false" data-header="false"></div>
</div><!--r-box-->
<?php }?>

<?php if(!empty($Ad2)){ ?>
<div class="r-box">
<?php echo $Ad2;?>
</div><!--r-box-->
<?php }?>

</div><!--right-box-->
</div><!--wrapper-->
<?php include('footer_other.php');?>
