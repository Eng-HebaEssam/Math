<?php
	$dsn = 'mysql:host=mohabdelazize37720.ipagemysql.com;dbname=m3amath';
	$user = 'm3amath';
	$pass = 'Ahmed@123';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}