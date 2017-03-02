<?php
include ("db.php");

if($_POST)
{	
	if(!isset($_POST['name']) || strlen($_POST['name'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Hmm, you got to let us know your name.</div>');
	}
	if(!isset($_POST['email']) || strlen($_POST['email'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Let us know your email address, so we can get back to you.</div>');
	}
	$email_address = $_POST['email'];
	
	if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  	// The email address is valid
	} else {
  		die('<div class="msg-error">Come on!! This is not a real email address.</div>');
	}
	if(!isset($_POST['subject']) || strlen($_POST['subject'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">Tell us why you writing to us in the subject field.</div>');
	}
	if(!isset($_POST['message']) || strlen($_POST['message'])<1)
	{
		//required variables are empty
		die('<div class="msg-error">You got to tell us what is this all about.</div>');
	}

$q=$mysqli->query("select * from settings where id=1");
$s=mysqli_fetch_array($q);

$sitecontact = $s['email'];
$fromname=isset($_POST['name'])?$_POST['name']:"";
$frommail=isset($_POST['email'])?$_POST['email']:"";
$fromsubject=isset($_POST['subject'])?$_POST['subject']:"";
$frommessage=isset($_POST['message'])?$_POST['message']:"";

require_once('include/class.phpmailer.php');

$mail             = new PHPMailer();

$mail->AddReplyTo($frommail, $fromname);

$mail->SetFrom($frommail, $fromname);

$mail->AddReplyTo($frommail, $fromname);

$address = $s['email'];

$mail->AddAddress($address, $sitecontact);

$mail->Subject = $fromsubject;

$mail->MsgHTML($frommessage);

if(!$mail->Send()) {?>
<div class="msg-error">Error sending mail</div> <?php $mail->ErrorInfo;?>
<?php } else {?>
<div class="msg-ok">Message sent. We will contact you back as soon as possible.</div>

<?php }

}

?>