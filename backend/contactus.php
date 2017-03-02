<?php include('header.php');?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">
<script>
$(document).ready(function()
{
    $('#ContactUs').on('submit', function(e)
    {
        e.preventDefault();
        $('#SubmitButton').attr('disabled', ''); // disable upload button
        //show uploading message
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    $('#SubmitButton').removeAttr('disabled'); //enable submit button
    $('#loadding').html('');
}
</script>
<div class="ptitle-bar"><h1>Contact Us</h1></div>

<div id="output"></div>
<div id="loadding"></div>

<div class="theForm">


<div class="loadding"></div>

<form action="send_contact.php" id="ContactUs" method="post">

<label>Name</label><input name="name" type="text">

<label>Email</label><input name="email" type="text">

<label>Subject</label><input name="subject" type="text">

<label>Message</label><textarea name="message"></textarea>
<div class="subbtn-div"> 
<button type="submit" class="btns" id="SubmitButton">Send</button>
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
