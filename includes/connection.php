<?php
	$server = "elevweb.akershus-fk.no";
	$user = "hoth2507";
	$password = "feitkatt23";
	$databaseName = "hoth2507_dh";

	$conn = new MySQLi($server, $user, $password, $databaseName);
	if($conn -> connect_error)
	{
		die("Connection failed ".$conn->connect_error);
	}
	else
	{
		//echo("Connection Successfull<br>");
	}
	$conn->set_charset('utf8');

