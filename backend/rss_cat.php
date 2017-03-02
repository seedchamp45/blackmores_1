<?php
include('db.php');

$id = $mysqli->escape_string($_GET['id']);

if($squ = $mysqli->query("SELECT * FROM settings WHERE id='1'")){

    $settings = mysqli_fetch_array($squ);
	$SiteName = $settings['name'];
	$SiteDisc = $settings['descrp'];
	$SiteUrl = $settings['siteurl'];
    $squ->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}


if($cat = $mysqli->query("SELECT * FROM categories WHERE id='$id'")){
	 $CatRow = mysqli_fetch_array($cat);
	 $CatName = $CatRow['cname'];
	 	 
     $cat->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

header("Content-type: text/xml");


echo'<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
<channel>
<title>'.$SiteName.' - '.$CatName.'</title>
<link>http://'.$SiteUrl.'</link>
<description>'.$SiteDisc.'</description>
<language>en-us</language>';


if($sql = $mysqli->query("SELECT * FROM posts WHERE catid=$id ORDER BY id DESC LIMIT 10")){

while($row = mysqli_fetch_array($sql)){
	$title = $row['title'];
	$postName = $title;
	$postLink = preg_replace("![^a-z0-9]+!i", "-", $postName);
	$postLink = strtolower($postLink);
	
	$pdate = $row['date'];


	$long = $row['description'];
	$str = strlen ($long);
	if ($str > 500) {
	$description = substr($long,0,500).'...';
	}else{
	$description = $long;}
	
	$id = $row['id'];
	$imageName = $row['image'];
	
	

$TitleNew = strip_tags($title);

$DsicNew = strip_tags($description); 

$link= 'http://'.$SiteUrl.'/listing-'.$id.'-'.$postLink.'.html';

$imgurl = 'http://'.$SiteUrl.'/uploaded_images/'.$imageName;

echo '<item>
    <title>'.$TitleNew.'</title>
    <link>'.$link.'</link>
	<guid>'.$link.'</guid>
    <description><![CDATA[ <a href="'.$link.'" rel="self"><img align="left" vspace="4" hspace="6" src="'.$imgurl.'" title="'.$TitleNew.'" alt="'.$TitleNew.'" width="150" /></a>]]>'.$DsicNew.'</description>
    <pubDate>'.$pdate.'</pubDate>
  </item>';
}
    $sql->close();
}else{
     printf("Error: %s\n", $mysqli->error);
}

echo "</channel></rss>";

?>