<?php
	require "dbcon.php";
	
	$fseid=filter_input(INPUT_POST, "fseid");
	
	
	$serial=(int)filter_input(INPUT_POST, "serial");

	$sql= "select serialNo from damagecheck where  ";



?>