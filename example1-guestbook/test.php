<?php
	require("config.php");
	$dsn = DatabaseType .':host=' . Host . ';dbname=' . DatabaseName;
	$dbh = new PDO ($dsn, DatabaseUser, DatabasePassword);

	$sql = "SELECT * FROM `gustbook` WHERE `id` = ?;";

	$sth = $dbh->prepare($sql);

	$sth->execute(array(1));

	echo "<pre>";
	var_dump($sth->fetch());
	//var_dump($sth->fetchAll());
	
	$sth->execute(array(2));
	var_dump($sth->fetch());
	$sth->execute(array(3));
	var_dump($sth->fetch());
	echo "</pre>";
?>	
