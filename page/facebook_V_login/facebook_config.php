<?php
if(!session_id())
{
	session_start();
}
require_once __DIR__ . '/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1644999395805431', // Replace {app-id} with your app id
  'app_secret' => '1f32adc7c864e78cc3d347ad47f733da',
  'default_graph_version' => 'v2.2',
]);
?>