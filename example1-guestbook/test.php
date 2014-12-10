<?php
	require("config.php");
	$dsn = DatabaseType .':host=' . Host . ';dbname=' . DatabaseName;
	$dbh = new PDO ($dsn, DatabaseUser, DatabasePassword);
/*
	$sql = "SELECT * FROM `gustbook` WHERE `id` = ? AND `name` = ?;";

	$sth = $dbh->prepare($sql);

	$sth->execute(array(1, 'test'));

	echo "<pre>";
	var_dump($sth->fetch());
	//var_dump($sth->fetchAll());
	
	//$sth->execute(array(2));
	//var_dump($sth->fetch());
	//$sth->execute(array(3));
	//var_dump($sth->fetch());
	echo "</pre>";

	$sql = "INSERT INTO `gustbook` (`name`, `email`, `messages`) VALUES ( ?, ? ,?);";

	$sth = $dbh->prepare($sql);

	var_dump($sth->execute(array('erickson', 'erickson@gmail.com', 'itac')));
*/
	$sql = "INSERT INTO `gustbook` (`name`, `email`, `messages`) VALUES ( ?, ? ,?);";

	$sth = $dbh->prepare($sql);

	$sth->execute(array($_POST['inputname'], $_POST['inputemail'], $_POST['inputMessages']));
?>	
