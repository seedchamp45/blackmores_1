<?php include('header.php');?>
<div class="maintitle">Dashboard</div>
<div class="box">
<div class="inbox">
<div class="leftTable">
<table width="455" class="datatable" border="0" cellspacing="0" cellpadding="0">
<thead>
  <tr>
    <td width="300">Post Statistics</td>
    <td width="160"></td>
   </tr>
 </thead>
<tbody>
<tr>
    <td>Total Site Views</td>

     <td><?php echo $settings['site_hits'];?></td>
</tr>
<tr>
<td>Total Users</td>
<?php
$totsale = $mysqli->query("SELECT id, username FROM users ORDER BY id DESC") or die ($mysqli->query());
$latest = mysqli_fetch_array($totsale);
$totsalenum = mysqli_num_rows($totsale);   
?>     
<td><?php echo $totsalenum;?></td>
</tr>
<tr>
    <td>Latest User</td>
   <td><?php echo $latest['username'];?></td>
</tr>
</tbody>
</table> 
</div>
<!--#-->
<div class="rightTable">
<table width="455" class="datatable" border="0" cellspacing="0" cellpadding="0">
<thead>
  <tr>
    <td width="300">Post Statistics</td>
    <td width="160"></td>
   </tr>
 </thead>
<tbody>
<tr>
    <td>Total Posts</td>
<?php
$totads = $mysqli->query("SELECT id FROM posts") or die ($mysqli_eroor());
$totadsnum = mysqli_num_rows($totads);   
?>     
	 <td><?php echo $totadsnum;?></td>
</tr>
<tr>
    <td>Total Post Page Views</td>
<?php    
$TLViw = $mysqli->query("SELECT SUM(hits) AS VIEWS FROM posts"); 
$VLRow = mysqli_fetch_assoc($TLViw);      
?>      
    <td><?php echo $VLRow['VIEWS'];?></td>
</tr>
<tr>
    <td>Total Post Likes</td>
<?php    
$TotViw = $mysqli->query("SELECT SUM(likes) AS LIKES FROM posts"); 
$ViwRow = mysqli_fetch_assoc($TotViw);   
?>     
    <td><?php echo $ViwRow['LIKES'];?></td>
</tr>
</tbody>
</table> 
</div>
<div class="clear"></div>
<!--#-->
<div class="smalltitle">Latest 10 Posts</div>

<table width="925" class="datatable" border="0" cellspacing="0" cellpadding="0">
<thead>
  <tr>
    <td width="678">Listing Title</td>
    <td width="150">Added Date</td>
   </tr>
 </thead>
<tbody>
	<?php
	$presult = $mysqli->query("SELECT * FROM posts ORDER BY id DESC LIMIT 10") or die (mysqli_error()); 
		while($prow = mysqli_fetch_array($presult))
		{
			$ipostName = $prow['title'];
			$ipostLink = preg_replace("![^a-z0-9]+!i", "-", $ipostName);
			$ipostLink = strtolower($ipostLink);
			$dt = $prow['date'];
			
			?>
		<tr>
    <td><a href="../post-<?php echo $prow['id'];?>-<?php echo $ipostLink;?>.html" target="_blank"><?php echo $prow['title'];?></a></td>
    <td><?php echo $dt;?></td>
</tr>
	
<?php }	?>
 </tbody>
</table> 

</div>
</div><!--box-->
<?php include('footer.php');?>

 