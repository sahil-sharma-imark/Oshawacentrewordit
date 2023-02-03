<?php
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
//echo getcwd();
 include($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
 include($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
if ( isset( $_POST['email'] ) ){
    global $wpdb;
    $tablename=$wpdb->prefix.'completegame';
    $data=array(
        'email' => $_POST['email'],
        'status' => 'complete'
    );
    $wpdb->insert( $tablename, $data);
}
?>