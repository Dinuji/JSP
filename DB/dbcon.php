<?php
	
	$dbhost = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$errMsg = "";
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	if(! $conn) //if not connected
	{
		die('Could not connect to db'.mysql_error());
	}
	mysql_select_db("jsp");
	session_start();
	

?>