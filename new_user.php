<?php
	$userStr = htmlspecialchars($_REQUEST['email']) . ',' . htmlspecialchars($_REQUEST['password']) . " \n";
	$handler = fopen("users.txt", 'a') or die("Can't open file");
	fwrite($handler, $userStr);
	fclose($handler);
	$_SESSION['userRec'] = array("email" => htmlspecialchars($_REQUEST['email']));
	header("Location: ./");
	exit;
?>