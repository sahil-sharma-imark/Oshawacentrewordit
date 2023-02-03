<?php
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
//echo getcwd();
 include($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

//$email = $_POST['email']; 
$to = $_POST['email'];
$subject = 'Thanks For Playing the Game Oshawa Centre WordIt';
$body = 'Thanks for playing the Oshawa Centre WordIt game. You have been entered into the draw and you will be notified if you are selected as the winner';
$headers = array('Content-Type: text/html; charset=UTF-8','From: Oshawa Centre WordIt <support@oshawacentrewordit.com>');
wp_mail( $to, $subject, $body, $headers );


?>