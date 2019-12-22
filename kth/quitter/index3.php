<?php 
session_start();
include_once('header.php');
include_once('functions.php');

$_SESSION['userid'] = 3;
?>

<!doctype html>
<html lang="en">

<head>
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Quitter</title>
</head>

<body>
<?php
if (isset($_SESSION['message'])){
	echo "<b>". $_SESSION['message']."</b>";
	unset($_SESSION['message']);
}
?>
<div id="content">

	<form method='post' action='add.php'>
		<h1>What do you wanna quit today?</h1>
		<textarea name='body' rows='2' cols='69'></textarea>
		<p><input type='submit' value='submit'/></p>
	</form>

<?php
	$users = show_users($_SESSION['userid']);
	if (count($users)){
	$myusers = array_keys($users);
	}else{
	$myusers = array();
}
$myusers[] = $_SESSION['userid'];

$posts = show_posts($myusers,10);

if (count($posts)){
?>
<table border='1' cellspacing='0' cellpadding='5' width='500'>
<?php
foreach ($posts as $key => $list){
	echo "<tr valign='top'>\n";
	echo "<td>".$list['userid'] ."</td>\n";
	echo "<td>".$list['body'] ."<br/>\n";
	echo "<small>".$list['stamp'] ."</small></td>\n";
	echo "</tr>\n";
}
?>
</table>
<?php
}else{
?>
<p><b>You haven't posted anything yet!</b></p>
<?php
}
?>

</div>

</body>
</html>