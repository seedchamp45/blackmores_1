<?php include('header_cat.php'); 

$term = $mysqli->escape_string($_GET['term']);

?>
		<div id="contain">
<?php

	$page = $_GET["page"];
	$start = ($page - 1) * 20;

	$result = $mysqli->query("SELECT * FROM posts WHERE (title like '%$term%' or description like '%$term%') ORDER BY id DESC LIMIT $start, 20");
	
	while($row = mysqli_fetch_array($result))
  	{
		$long = $row['description'];
		$strd = strlen ($long);
		if ($strd > 140) {
		$dlong = substr($long,0,137).'...';
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
            <a href="views.php?id=<?php echo $row['id'];?>" target="_blank" title="<?php echo $row['title'];?>"><img src="uploaded_images/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" /></a>
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
		
		<nav id="page-nav">
  			<a href="data_cat.php?cid=<?php echo $cid;?>&page=2"></a>
		</nav>
		
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
				
				$container.infinitescroll({
    				navSelector  : '#page-nav',    // selector for the paged navigation 
      				nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
      				itemSelector : '.box',     // selector for all items you'll retrieve
      				loading: {
          				finishedMsg: 'No more posts to load.',
          				img: 'templates/<?php echo $settings['template'];?>/images/ajax-loader.gif'
        			}
  				},
  				// trigger Masonry as a callback
  				function( newElements ) {
    				var $newElems = $( newElements );
    				$container.masonry( 'appended', $newElems );
					//Voting
					$(".like").click(function()
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
url: "like_vote.php",
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
//End voting
  				});
			});
		</script>
       

<?php include('footer.php');?>