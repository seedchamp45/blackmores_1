<?php include('header.php');?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">

<?php
if(!isset($_SESSION['username'])){?>
<div class="ptitle-bar"><h1>Register Now. It's Free!!</h1></div>

<script>
$(document).ready(function()
{
    $('#FromRegister').on('submit', function(e)
    {
        e.preventDefault();
        $('#submitButton').attr('disabled', ''); // disable upload button
        //show uploading message
         $("#output").html('<div class="redirecting">Working. Please wait...</div>');
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    //$('#FromRegister').resetForm();  // reset form
    $('#submitButton').removeAttr('disabled'); //enable submit button
    $('#loadding').html('');
}
</script>
<div id="output"></div>
<div class="theForm">
<form action="submit_user.php" id="FromRegister" method="post" >

    <label>Username
    <span class="small">Please enter your username</span>
    </label>
    <input type="text" name="uName" id="uName" />
    
     <label>Email
    <span class="small">Enter a valid email address</span>
    </label>
    <input type="text" name="uEmail" id="uEmail" />
    
     <label>Password
    <span class="small">Please provide a password</span>
    </label>
    <input type="password" name="uPassword" id="uPassword" />
    
     <label>Conform Password
    <span class="small">Retype the above password</span>
    </label>
    <input type="password" name="cPassword" id="cPassword" />
<div class="subbtn-div">     
    <button type="submit" class="btns" id="submitButton">Register</button>
</div>    
    <div class="spacer"></div>
</form>
</div> <!--the form-->

<?php }else{?>
<div class="slog-reg">You are already registed.</div>	
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
