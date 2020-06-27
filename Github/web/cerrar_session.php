<?php
	session_start();
	$username = $_SESSION['username'];
	$fichero = '/var/www/html/logs.txt';
	$dataToLog = array (date("Y-m-d H:i:s"),$username,$_SERVER['REMOTE_ADDR'],'LOG OUT');
	$data = implode(" - ",$dataToLog);
	$data .= PHP_EOL;
	file_put_contents($fichero, $data, FILE_APPEND | LOCK_EX);
	session_destroy();
	header("Location:ottomatic.html");
?>
