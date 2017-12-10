<?php
	
	$dbhost = "uoc-mydb-instance.ciaqpoqp6i0b.us-east-2.rds.amazonaws.com:3306";
	$dbuser = "jsproot";
	$dbpass = "jsprootpass";
	$errMsg = "";
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	if(! $conn) //if not connected
	{
		die('Could not connect to db'.mysql_error());
	}
	mysql_select_db("jsp");
	session_start();
	

?>