<?php
	require("config.php");
	$dsn = DatabaseType .':host=' . Host . ';dbname=' . DatabaseName;
	$dbh = new PDO ($dsn, DatabaseUser, DatabasePassword);

	$sql = "SELECT `email` FROM `gustbook` WHERE `id` = '1';";

	$sth = $dbh->prepare($sql);

	$sth->execute();

	var_dump($sth->fetch());
	var_dump($sth->fetchAll());
?>	
