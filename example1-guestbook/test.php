<?php
	require("config.php")
	$dsn = DatabaseType .':host=' . Host . ';dbname=' . DatabaseName;
	$dbh = new PDO ($dsn, DatabaseUser, DatabasePassword);

	$sql = "SELECT `email` FROM `guestbook` WHERE `id` = '1';";
?>