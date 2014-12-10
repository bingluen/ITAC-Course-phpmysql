<?php
	require("config.php")
	$dsn = DatabaseType .':host=' . Host . ';dbname=' . DatabaseName;
	$dbh = new PDO ($dsn, DatabaseUser, DatabasePassword);
?>