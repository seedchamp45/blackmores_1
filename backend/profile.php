<?php include('header_profile.php'); ?>
		<div class="Profile-Box">
        <div class="Profile-Picture">
        <?php if (empty($avatar)){ ?>
	<img src="templates/<?php echo $settings['template'];?>/images/default-avatar.png" width="150" height="150">
	<?php }elseif (!empty($avatar)){?>
	<img src="timthumb.php?src=http://<?php echo $settings['siteurl'];?>/avatars/<?php echo $ThisUserRow['avatar'];?>&amp;h=150&amp;w=150&amp;q=100" alt="User Avatar" class="img_thumb"/>
	<?php }?>
        </div><!--Profile-Picture-->
        <div class="puser-name"><h1><?php echo $ThisUserRow['username'];?></h1></div>
<div class="puser-name"><span class="p-date">Member Since <?php echo $ThisUserRow['reg_date'];?></span></div>
<div class="puser-name"><p><?php echo $ThisUserRow['about'];?></p></div>
        </div><!--Profile-Box-->
        
        
        <div class="user-bars">Latest posts by <?php echo $ThisUserRow['username'];?> <a href="user_posts-<?php echo $upid;?>-<?php echo $ThisULink;?>.html" class="all-links">[view all posts by <?php echo $ThisUserRow['username'];?>]</a></div>
		<div id="contain">
                  	
<?php
	
	$result = $mysqli->query("SELECT * FROM posts WHERE uid=$upid ORDER BY id DESC LIMIT 0, 12");
	
	while($row = mysqli_fetch_array($result))
  	{
		$long = $row['description'];
		$strd = strlen ($long);
		if ($strd > 95) {
		$dlong = substr($long,0,93).'...';
		}else{
		$dlong = $long;}
		
		$LongTitle = $row['title'];
		$strt = strlen ($LongTitle);
		if ($strt > 40) {
		$tlong = substr($LongTitle,0,37).'...';
		}else{
		$tlong = $LongTitle;}
		
		$PageLink = preg_replace("![^a-z0-9]+!i", "-", $LongTitle);
		$PageLink = strtolower($PageLink);
		
		
		//new code
		$mes_id = $row['id'];
		$up = $row['likes'];
		
		if ($Uid >0){
		//Check Votes

		if($VcSql= $mysqli->query("SELECT uid FROM favip WHERE postid='$mes_id' and uid='$Uid'")){

   		 $VcRow = mysqli_num_rows($VcSql);
	
		}else{
	
     	printf("Error: %s\n", $mysqli->error);

		}
			
		}
		
	
?>
  			<div class="box">
            <a href="views.php?id=<?php echo $row['id'];?>" target="_blank" title="<?php echo $row['title'];?>">
            <img src="timthumb.php?src=http://<?php echo $settings['siteurl'];?>/uploaded_images/<?php echo $row['image']; ?>&amp;h=200&amp;w=275&amp;q=100" alt="<?php echo $row['title']; ?>" class="img_thumb"/></a>
            <div class="box-title"><h3><a href="post-<?php echo $row['id'];?>-<?php echo $PageLink;?>.html" target="_self"><?php echo $tlong;?></a></h3></div><!--box-title-->
            <div class="box-des"><p><?php echo $dlong;?></p></div><!--box-title-->
            <div class="like-box">
            <div class='up'>
<?php if(!isset($_SESSION['username'])){?>
<a href="" class="like" id="<?php echo $mes_id;?>" name="up"><div class="likes two"><?php echo $up; ?></div></a>
<?php }else{ ?>
<?php if ($VcRow == NULL){?>
<a href="" class="like" id="<?php echo $mes_id;?>" name="up"><div class="likes two"><?php echo $up; ?></div></a>
<?php }elseif ($VcRow ==1) {?>
<a href="" class="like" id="<?php echo $mes_id;?>" name="up"><div class="likes one"><?php echo $up; ?></div></a>
<?php }
}
?>
<div class="tot-views"><?php echo $row['tot'];?></div>
</div><!--up-->

            </div><!--like-box-->
          </div><!--box-->
<?php } ?>
		</div>
		

 
 <div class="user-bars">Latest likes by <?php echo $ThisUserRow['username'];?> <a href="user_likes-<?php echo $upid;?>-<?php echo $ThisULink;?>.html" class="all-links">[view all likes by <?php echo $ThisUserRow['username'];?>]</a></div>
		<div id="contain-2">
                  	
<?php
	
	$likesSql = $mysqli->query("SELECT * FROM favip LEFT JOIN posts ON favip.postid=posts.id WHERE favip.uid=$upid ORDER BY favip.id DESC LIMIT 0, 12");
	
	while($likesrow = mysqli_fetch_array($likesSql))
  	{
		$likeslong = $likesrow['description'];
		$Likesstrd = strlen ($likeslong);
		if ($Likesstrd > 95) {
		$dlikeslong = substr($likeslong,0,93).'...';
		}else{
		$dlikeslong = $likeslong;}
		
		$LikesLTitle = $likesrow['title'];
		$strt = strlen ($LikesLTitle);
		if ($strt > 40) {
		$tlong = substr($LikesLTitle,0,37).'...';
		}else{
		$tlong = $LikesLTitle;}
		
		$LikesLink = preg_replace("![^a-z0-9]+!i", "-", $LikesLTitle);
		$LikesLink = strtolower($LikesLink);
		
		
		//new code
		$Lmes_id = $likesrow['id'];
		$Lup = $likesrow['likes'];
		
		if ($Uid >0){
		//Check Votes

		if($LVcSql= $mysqli->query("SELECT uid FROM favip WHERE postid='$Lmes_id' and uid='$Uid'")){

   		 $LVcRow = mysqli_num_rows($LVcSql);
	
		}else{
	
     	printf("Error: %s\n", $mysqli->error);

		}
			
		}
		
	
?>


  			<div class="box">
            <a href="views.php?id=<?php echo $likesrow['id'];?>" target="_blank" title="<?php echo $likesrow['title'];?>">
            <img src="timthumb.php?src=http://<?php echo $settings['siteurl'];?>/uploaded_images/<?php echo $likesrow['image']; ?>&amp;h=200&amp;w=275&amp;q=100" alt="<?php echo $likesrow['title']; ?>" class="img_thumb"/></a>
            <div class="box-title"><h3><a href="post-<?php echo $likesrow['id'];?>-<?php echo $LikesLink;?>.html" target="_self"><?php echo $tlong;?></a></h3></div><!--box-title-->
            <div class="box-des"><p><?php echo $dlikeslong;?></p></div><!--box-title-->
            <div class="like-box">
            <div class='up'>
<?php if(!isset($_SESSION['username'])){?>
<a href="" class="like" id="<?php echo $Lmes_id;?>" name="up"><div class="likes two"><?php echo $Lup; ?></div></a>
<?php }else{ ?>
<?php if ($LVcRow == NULL){?>
<a href="" class="like" id="<?php echo $Lmes_id;?>" name="up"><div class="likes two"><?php echo $Lup; ?></div></a>
<?php }elseif ($LVcRow ==1) {?>
<a href="" class="like" id="<?php echo $Lmes_id;?>" name="up"><div class="likes one"><?php echo $Lup; ?></div></a>
<?php }
}
?>
<div class="tot-views"><?php echo $likesrow['tot'];?></div>

</div><!--up-->

            </div><!--like-box-->
          </div><!--box-->
<?php } ?>
		</div>


		
		<script src="js/jquery.masonry.min.js"></script>
		<script src="js/jquery.infinitescroll.min.js"></script>
		
		<script>
			$(function(){
				var $container = $('#contain');
				$container.imagesLoaded(function(){
  					$container.masonry({
    					itemSelector : '.box',
    					columnWidth : 305
  					});
				});
				
			});
			
			$(function(){
				var $container = $('#contain_2');
				$container.imagesLoaded(function(){
  					$container.masonry({
    					itemSelector : '.box',
    					columnWidth : 305
  					});
				});
				
			});
		</script>
                 

<?php include('footer_other.php');?>
