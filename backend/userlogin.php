<?php include('header.php');?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">

<div class="ptitle-bar"><h1>User Login</h1></div>

<script>
$(document).ready(function()
{
    $('#FromLogin').on('submit', function(e)
    {
        e.preventDefault();
        $('#submitButton').attr('disabled', ''); // disable upload button
        //show uploading message
        
        $(this).ajaxSubmit({
        target: '#output-login',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    //$('#FromLogin').resetForm();  // reset form
    $('#submitButton').removeAttr('disabled'); //enable submit button
    $('#loadding').html('');
}
</script>

<div id="output-login">&nbsp;</div>

<div id="loginForm">
<form action="submit_login.php" id="FromLogin" method="post">

<label>Username</label>
    <input type="text" name="username" id="username" />
    
<label>Password</label>
    <input type="password" name="password" id="password" />    
<div class="login_submit">
<button type="submit" class="btns" id="submitButton">Login</button>
</div>
</form>
</div>

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
