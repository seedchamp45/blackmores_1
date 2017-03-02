<?php include("header.php");?>
<div class="maintitle">Manage Active Listings</div>
<div class="clear"></div>
<?php
error_reporting(E_ALL ^ E_NOTICE);
//Delete script
$del = $mysqli->escape_string($_GET['del']);
$delete = $mysqli->escape_string($_GET['delete']);
if ($delete == 'yes'){
//Get items to delete
if($DData = $mysqli->query("SELECT * FROM posts WHERE id='$del'")){

    $DRow = mysqli_fetch_array($DData);
	
	$DelImg = $DRow['image'];

    $DData->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}
//Delete the data
unlink("../uploaded_images/$DelImg");
	
$delete=$mysqli->query("DELETE FROM posts WHERE id='$del'") or die(mysqli_error());

?>  
<div class="infomsgbox">Post successfully deleted</div>

<?php } ?>

<div class="box">
<div class="inbox">
<?php

	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = $mysqli->query("SELECT COUNT(*) as num FROM posts ORDER BY id DESC");
	$total_pages = mysqli_fetch_array($query);
	$total_pages = $total_pages['num'];
	
	/* Setup vars for query. */
	$targetpage = "posts.php"; 	//your file name  (the name of this file)
	$limit = 15; 								//how many items to show per page
	$page=$_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$result = $mysqli->query("SELECT * FROM posts ORDER BY id DESC LIMIT $start, $limit");
		
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">« previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";		
	}
?>
<table width="930" class="datatable" border="0" cellspacing="0" cellpadding="0">
<thead>
  <tr>
    <td width="422">Post Titile</td>
    <td width="173">Category</td>
    <td width="133">Added Date</td>
    <td width="200">Actions</td>
  </tr>
 </thead>
<tbody>
	<?php
		while($row = mysqli_fetch_array($result))
		{
			$ipostName = $row['title'];
			$ipostLink = preg_replace("![^a-z0-9]+!i", "-", $ipostName);
			$ipostLink = strtolower($ipostLink);
			$cat = $row['catid'];
			$dt = $row['date'];
	
	if($CatSql = $mysqli->query("SELECT * FROM categories WHERE id='$cat'")){
	
    $CatRow = mysqli_fetch_array($CatSql);
	$Cat = $CatRow['cname'];
			
	$CatSql->close();
	}else{
    printf("Error: %s\n", $mysqli->error);
	}

   		
	
	?>
		<tr>
    <td><a href="../post-<?php echo $row['id'];?>-<?php echo $ipostLink;?>.html" target="_blank"><?php echo $row['title'];?></a></td>
    
    <td><?php echo $CatRow['cname'];?></td>
    <td><?php echo $dt;?></td>
    <td>
    <center>
	<a class="red" href="delete_post.php?page=<?php echo $page;?>&del=<?php echo $row['id'];?>">Delete</a>
    <a class="green" href="edit_posts.php?id=<?php echo $row['id'];?>">Edit</a>
	</center>
    	</td>
  </tr>
	
<?php }	?>
 </tbody>
</table> 
<?=$pagination?>
<?php
if ($q=$mysqli->query("COUNT id FROM posts ORDER BY id DESC")){

	$num=mysqli_num_rows($q);
	if ($num == 0)
	{
	echo '<div class="msg">There are no listingss to display at this moment.</div>';
	}
	}
?>
</div>
</div>
	
<?php include("footer.php");?>