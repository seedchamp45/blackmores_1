<?php include('header.php');

if(!isset($_SESSION['username'])){?>
<div class="slog-reg">You are already registed.</div>
<?php }else{

if($Profile = $mysqli->query("SELECT * FROM users WHERE id='$Uid'")){

    $ProfileRow = mysqli_fetch_array($Profile);
	
	$Profile->close();
	
}else{
    
	 printf("Error: %s\n", $mysqli->error);
}	
	
?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">

<script type="text/javascript">
$(document).ready(function()
{
$('#photoimg').live('change', function()
{
$("#preview").html('');
$("#output-msg").html('<div class"loader"><img src="templates/<?php echo $settings['template'];?>/images/ajaxloader.gif" alt="Please Wait"/> <br/><span>Uploading...</span></div>');
//$("#imageform").ajaxForm(
//{
//target: '#preview'
//}).submit();

$("#imageform").ajaxForm(
{
    dataType:'json',
    success:function(json){
       $('#preview').html(json.img);
       $('#output-msg').html(json.msg);
    }
}).submit();

});
});
</script>

<div class="ptitle-bar"><h1>Update Your Profile Picture</h1></div>

<div id="uploading"></div>
<div id="output-msg"></div>
<div class="theForm">

<form action="avatar.php" method="post" name="imageform" id="imageform" enctype="multipart/form-data">
        <!-- begin image label and input -->
		<label>Image<span class="small">(gif, jpg, png)</span>
    </label>
		<input type="file" size="45" name="photoimg" id="photoimg" /><!-- end image label and input -->
 
      </form><!-- end form -->

<div id="preview"></div>
</div>
</div><!--posy-box-->

<div class="post-box">

<div class="ptitle-bar"><h1>Edit Your Info</h1></div>

<script>
$(document).ready(function()
{
    $('#FromProfile').on('submit', function(e)
    {
        e.preventDefault();
        $('#submitButton').attr('disabled', ''); // disable upload button
        //show uploading message
        //$("#div-loadding").html('<div class="loader"><img src="templates/<?php echo $settings['template'];?>/images/ajax-loader.gif" alt="Please Wait"/> <br/><span>Submiting...</span></div>');
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    //$('#FromProfile').resetForm();  // reset form
    $('#submitButton').removeAttr('disabled'); //enable submit button
    //$('#div-loadding').html('');
}
</script>
<div id="output"></div>
<div class="theForm">
<form action="submit_profile.php" id="FromProfile" method="post" >

    <label>Username
    <span class="small">Cannot be changed</span>
    </label>
    <input type="text" disabled="disabled" name="uName" id="uName" value="<?php echo $ProfileRow['username'];?>" />
    
     <label>Email
    <span class="small">Enter a valid email address</span>
    </label>
    <input type="text" name="uEmail" id="uEmail" value="<?php echo $ProfileRow['email'];?>"/>
    
    <label>About
    <span class="small">Tell us little bit about your self</span>
    </label>
    <textarea name="about" cols="40" rows="5"><?php echo $ProfileRow['about'];?></textarea>
   
<div class="subbtn-div">    
    <button type="submit" class="btns" id="submitButton">Submit</button>
</div>    
    <div class="spacer"></div>
</form>
</div> <!--the form-->

</div><!--post-box-->

<?php }?>


<div class="post-box">

<div class="ptitle-bar"><h1>Update Password</h1></div>

<script>
$(document).ready(function()
{
    $('#FromPassword').on('submit', function(e)
    {
        e.preventDefault();
        $('#PassButton').attr('disabled', ''); // disable upload button
        //show uploading message
        //$("#load").html('<div class="loader"><img src="templates/<?php echo $settings['template'];?>/images/ajax-loader.gif" alt="Please Wait"/> <br/><span>Submiting...</span></div>');
        $(this).ajaxSubmit({
        target: '#outputmsg',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    //$('#FromPassword').resetForm();  // reset form
    $('#PassButton').removeAttr('disabled'); //enable submit button
    //$('#load').html('');
}
</script>
<div id="outputmsg"></div>
<div class="theForm">
<form action="submit_password.php" id="FromPassword" method="post" >

    <label>Old Password
    <span class="small">Please provide your old password</span>
    </label>
    <input type="password" name="nPassword" id="uPassword" />
    
     <label>New Password
    <span class="small">Please provide the new password</span>
    </label>
    <input type="password" name="uPassword" id="uPassword" />
    
     <label>Conform Password
    <span class="small">Retype the above password</span>
    </label>
    <input type="password" name="cPassword" id="cPassword" />
<div class="subbtn-div">    
    <button type="submit" class="btns" id="PassButton">Submit</button>
</div>    
    <div class="spacer"></div>
</form>
</div> <!--the form-->

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
