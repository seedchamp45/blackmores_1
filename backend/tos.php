<?php include('header.php');?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">
<?php

if($pages = $mysqli->query("SELECT * FROM  pages WHERE id='3'")){

    $pagerow = mysqli_fetch_array($pages);

    $pages->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

?>
<div class="ptitle-bar"><h1>Terms of Use</h1></div>

<p><?php echo $pagerow['page'];?></p>

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
