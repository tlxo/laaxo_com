<?php
session_start();
include_once('header.php');
include_once('functions.php');

$SERVER = 'localhost';
$USER = 'tlaakso_kth';
$PASS = 'kth666quitter';
$DATABASE = 'tlaakso_quitter';
   

if (!($mylink = mysql_connect( $SERVER, $USER, $PASS))){
	echo  "<h3>Sorry, could not connect to database.</h3><br/>
	Please contact your system's admin for more help\n";
	exit;
}

mysql_select_db( $DATABASE );
?>