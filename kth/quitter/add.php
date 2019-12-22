<?php
session_start();
include_once("header.php");
include_once("functions.php");

$userid = $_SESSION['userid'];
$body = substr($_POST['body'],0,140);

add_post($userid,$body);

header("Location:index.php");
?>