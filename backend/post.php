<?php include('header_post.php');

//user info

if($ThisUserSql = $mysqli->query("SELECT * FROM users WHERE id='$ThisUser'")){

   $ThisUserRow = mysqli_fetch_array($ThisUserSql);
   
   $avatar = $ThisUserRow['avatar'];
   
   $ThisUser = $ThisUserRow['username'];
   
   $ThisUserPro = preg_replace("![^a-z0-9]+!i", "-", $ThisUser);
   
   $ThisUserPro = strtolower($ThisUserPro);

   $ThisUserSql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

//category info

if($ThisCatSql = $mysqli->query("SELECT * FROM categories WHERE id='$ThisCid'")){

   $ThisCatRow = mysqli_fetch_array($ThisCatSql);
   
   $ThisCatSql->close();
   
}else{
   
     printf("Error: %s\n", $mysqli->error);

}

//URL info

$parse = parse_url($ThisURL);
$host = $parse['host'];
$host = str_replace ('www.','', $host); 


//Check Votes

if($VcSql= $mysqli->query("SELECT uid FROM favip WHERE postid='$id' and uid='$Uid'")){

    $VcRow = mysqli_num_rows($VcSql);
	
}else{
	
     printf("Error: %s\n", $mysqli->error);

}

?>

<script type="text/javascript">
$(function() {
$(".vote").click(function()
{
var id = $(this).attr("id");
var name = $(this).attr("name");
var dataString = 'id='+ id ;
var parent = $(this);

if (name=='up')
{
$(this).fadeIn(200).html;
$.ajax({
type: "POST",
url: "up_vote.php",
data: dataString,
cache: false,

success: function(html)
{
parent.html(html);
}
});
}
return false;
});
});
</script>

<div class="wrapper">
<div class="left-box">
<div class="post-box">
<div class="title-bar"><h1><?php echo $PostRow['title'];?></h1></div>
<div class="img-box"><a href="views.php?id=<?php echo $PostRow['id'];?>" target="_blank" title="<?php echo $PostRow['title'];?>"><img class="bimg" src="uploaded_images/<?php echo $PostRow['image'];?>" width="600" alt="<?php echo $PostRow['title'];?>"></a></div>
<div class="des-pbox"><p><?php echo $PostRow['description'];?></p></div>

</div><!--post-box-->

<div class="post-box">
<div class="title-bar"><h1>Maybe you will also like these</h1></div>
<div class="rand-box">
<?php
if($RandomPosts = $mysqli->query("SELECT * FROM posts WHERE catid=$ThisCid ORDER BY RAND() LIMIT 8")){

    while($RandomRow = mysqli_fetch_array($RandomPosts)){
		
		$RandTitle = $RandomRow['title'];
		$RndLink = preg_replace("![^a-z0-9]+!i", "-", $RandTitle);
		$RndLink = strtolower($RndLink);
	
?>   
<div class="ramndom-box">
<a href="post-<?php echo $RandomRow['id'];?>-<?php echo $RndLink;?>.html">
<img src="timthumb.php?src=http://<?php echo $settings['siteurl'];?>/uploaded_images/<?php echo $RandomRow['image'];?>&amp;h=144&amp;w=144&amp;q=100" alt="User Avatar" class="bimg"/>
</a>
</div><!--ramndom-box-->
<?php
	}
 $RandomPosts->close();

}else{
	
     printf("Error: %s\n", $mysqli->error);
}
?>
</div><!--rand-box-->
</div><!--post-box-->

<div class="post-box">
<!--Comments-->
<?php



include "include/commments.class.php";

$comments = array();
$result = $mysqli->query("SELECT * FROM comments WHERE postid='$id' ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>

<div class="title-bar"><h1>Lest Us Know What You Think</h1></div>

<div id="main">

<div id="addCommentContainer">

<?php
if(!isset($_SESSION['username'])){?>
<div class="slog-reg">Please <a class="login-box" href="login.html">login</a> or <a href="register.html">register</a> to submit a review</div>
<?php }else{
	
if (empty($Uavatar)){ 
	$AvatarImg =  'templates/'.$template.'/images/default-avatar.png" class="bimg';
}elseif (!empty($Uavatar)){
	$AvatarImg =  'avatars/'.$Uavatar;
 }
	
?>

<div class="comment-form">	
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<input type="hidden" name="name" id="name" value="<?php echo $Uname;?>" />
            
            <input type="hidden" name="ruid" id="ruid" value="<?php echo $Uid;?>" />
            
            <input type="hidden" name="avatarlink" id="avatarlink" value="<?php echo $AvatarImg;?>" />
            
            <input type="hidden" name="sid" id="sid" value="<?php echo $id;?>" />
            
            <input type="hidden" name="email" id="email" value="<?php echo $ThisUserRow['email'];?>"/>
                       
           <textarea name="body" id="body" cols="20" rows="5"></textarea>
            
            <input type="submit" id="submit" class="btns" value="Submit" /><label class="error"></label>
        </div>
    </form>
    </div>
 <?php }?>  
</div>

<div id="jr"></div>

<script type="text/javascript" src="js/jquery.comments.js"></script>

<?php

if($CmtSql = $mysqli->query("SELECT * FROM comments LEFT JOIN users ON comments.uid=users.id WHERE comments.postid=$id ORDER BY comments.id DESC LIMIT 0, 20")){

   while ($CmtRow = mysqli_fetch_array($CmtSql)){
   
   $name=$CmtRow['name'];
   $comment_dis=$CmtRow['body'];
   $comment_date=$CmtRow['dt']; 
   $comment_avatar=$CmtRow['avatar'];
   
 ?>

<div class="comment">
			<div class="comment-box">
				<div class="avatar">
                <?php	if (empty($comment_avatar)){ 
	echo  '<img src="templates/'.$settings['template'].'/images/default-avatar.png" class="bimg" width="50" height="50">';
		}elseif (!empty($comment_avatar)){

	echo  '<img src="timthumb.php?src=http://'.$settings['siteurl'].'/avatars/'.$comment_avatar.'&amp;h=50&amp;w=50&amp;q=100" alt="User Avatar" class="avatar"/>';
 }?>
				</div>
				
				<div class="name"><?php echo $name;?></div>
				<div class="date"><?php echo $comment_date;?></div>
			<p><?php echo $comment_dis;?></p>
	</div>
</div>   
 
<?php   
}
   $CmtSql->close();
   
}else{
   
     printf("Error: %s\n", $mysqli->error);

}

?>

</div>

<!--end comments-->

</div><!--post-box-->

</div><!--left-box-->

<div class="right-box">
<div class="r-box">
<div class="avatar-img">
<?php if (empty($avatar)){ ?>
	<img src="templates/<?php echo $settings['template'];?>/images/default-avatar.png" class="bimg" width="50" height="50">
<?php }elseif (!empty($avatar)){?>

<img src="timthumb.php?src=http://<?php echo $settings['siteurl'];?>/avatars/<?php echo $ThisUserRow['avatar'];?>&amp;h=50&amp;w=50&amp;q=100" alt="User Avatar" class="bimg"/>

<?php }?>
</div><!--avatar-img-->
<div class="user-name"><h2><a href="profile-<?php echo $ThisUserRow['id'];?>-<?php echo $ThisUserPro;?>.html"><?php echo $ThisUserRow['username'];?></a></h2></div>
<div class="user-name">Member Since <?php echo $ThisUserRow['reg_date'];?></div>
</div><!--r-box-->
<div class="r-box">
<div class="share-box">
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
<span class='st_sharethis_large' displayText='ShareThis'></span>
</div>
</div><!--r-box-->

<div class="r-box">
<div class='up'>
<div class="center">
<?php if(!isset($_SESSION['username'])){?>
<div class="vote two">
<a href="" class="vote" id="<?php echo $mes_id; ?>" name="up"><img class="like-imge" src="templates/<?php echo $settings['template'];?>/images/like.png" width="16" height="16"> Like This Post <?php echo $up; ?></a>
</div>
<?php }else{ ?>
<?php if ($VcRow == NULL){?>
<a href="" class="vote" id="<?php echo $mes_id; ?>" name="up"><img class="like-imge" src="templates/<?php echo $settings['template'];?>/images/like.png" width="16" height="16"> Like This Post <?php echo $up; ?></a>
<?php }elseif ($VcRow ==1) {?>
<a href="" class="vote" id="<?php echo $mes_id; ?>" name="up"><img class="like-imge" src="templates/<?php echo $settings['template'];?>/images/liked.png" width="16" height="16"> Unlike This Post <?php echo $up; ?></a>
<?php }
}
?>
</div><!--center-->
</div><!--up-->

</div><!--r-box-->

<div class="r-box">
<div class="l-info">Post:</div><div class="r-info"><?php echo $PostRow['date'];?></div>
<div class="l-info">Category:</div><div class="r-info"><?php echo $ThisCatRow['cname'];?></div>
<div class="l-info">Total Views:</div><div class="r-info"><?php echo $PostRow['hits'];;?></div>
<div class="l-info">Total Link Visits:</div><div class="r-info"><?php echo $PostRow['link_hits'];;?></div>
<div class="l-info">From:</div><div class="r-info"><a href="views.php?id=<?php echo $PostRow['id'];?>" target="_blank" title="<?php echo $PostRow['title'];?>">via <?php echo $host;?></a></div>
</div>

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
