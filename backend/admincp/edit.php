<?php
include('../db.php');

$id = $mysqli->escape_string($_GET['id']);

if($_POST)
{		
		if(!isset($_POST['category']) || strlen($_POST['category'])<1)
	{
		//required variables are empty
		die('<div class="errormsgbox">Please select a category.</div>');
	}
	
	if(!isset($_POST['mLink']) || strlen($_POST['mLink'])<1)
	{
		//required variables are empty
		die('<div class="errormsgbox">Please add a URL.</div>');
	}
	
	$CheckUrl = $_POST['mLink'];

	if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $CheckUrl)) {
  		//do nothing
	}else {
  	
	die('<div class="errormsgbox">URL is not valid.</div>');
	
	}
	
	if(!isset($_POST['mName']) || strlen($_POST['mName'])<1)
	{
		//required variables are empty
		die('<div class="errormsgbox">Please add a title.</div>');
	}
	
	if(!isset($_POST['disc']) || strlen($_POST['disc'])<1)
	{
		//required variables are empty
		die('<div class="errormsgbox">Please add a small description.</div>');
	}

	
	
	$FileTitle			= $mysqli->escape_string($_POST['mName']); // file title
	$Category           = $mysqli->escape_string($_POST['category']); // category 
	$Link               = $mysqli->escape_string($_POST['mLink']); // afflite url
	$Description        = $mysqli->escape_string($_POST['disc']); // description
	
	
		
		
		$mysqli->query("UPDATE posts SET title='$FileTitle',url='$Link', description='$Description',catid='$Category' WHERE id=$id");
		
		die('<div class="infomsgbox">Post updated successfully.</div>');
		
   
   }else{
   		die('<div class="errormsgbox">There seems to be a problem. please try again.</div>');
   } 

?>