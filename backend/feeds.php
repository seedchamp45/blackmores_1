<?php include('header.php');?>

<div class="wrapper">

<div class="left-box">
<div class="post-box">

<div class="ptitle-bar"><h1>RSS Feeds</h1></div>

<div class="rss-row"><img class="ico-rss" src="images/rss.png" width="16" height="16" /><a href="rss_all.html">Newest Posts</a></div>

<?php
if($CatSql = $mysqli->query("SELECT * FROM categories ORDER BY cname ASC")){

   
while ($CatROW = mysqli_fetch_array($CatSql)) {
	$id= $CatROW['id'];
	$cname = $CatROW['cname'];
?>


<div class="rss-row"><img class="ico-rss" src="images/rss.png" width="16" height="16" /><a href="rss_cat-<?php echo $id;?>.html"> <?php echo $cname;?></a></div>
<?php }

     $CatSql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

?>

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
