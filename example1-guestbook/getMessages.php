<?php
	require("config.php");
	$dsn = DatabaseType .':host=' . Host . ';dbname=' . DatabaseName;
	$dbh = new PDO ($dsn, DatabaseUser, DatabasePassword);

	$sql = "SELECT * FROM `guestbook`;";
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$result = $sth->fetchAll();

	//echo '<pre>';
	//var_dump($result);
	//echo '</pre>';

	echo json_encode($result);
?>