<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "db.php";
include "include/commments.class.php";

/*
/	This array is going to be populated with either
/	the data that was sent to the script, or the
/	error messages.
/*/

$Date		        = date("F j, Y");

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	/* Everything is OK, insert to database: */
	
	$mysqli->query("	INSERT INTO comments(name,email,body,dt,uid,postid)
					VALUES (
						'".$arr['name']."',
						'".$arr['email']."',
						'".$arr['body']."',
						'".$Date."',
						'".$arr['ruid']."',
						'".$arr['sid']."'
					)");
	
	$arr['dt'] = date('r',time());
	//$arr['id'] = $mysqli->insert_id();
	
	/*
	/	The data in $arr is escaped for the mysql query,
	/	but we need the unescaped variables, so we apply,
	/	stripslashes to all the elements in the array:
	/*/
	
	$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr);

	/* Outputting the markup of the just-inserted comment: */

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	/* Outputtng the error messages */
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

?>