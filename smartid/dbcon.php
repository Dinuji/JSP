<?php 
	//$host = "localhost";
    //$user = "root";
    //$db = "jbs";
	
	$host = "uoc-mydb-instance.ciaqpoqp6i0b.us-east-2.rds.amazonaws.com:3306";
    $user = "jsproot";
    $pass="jsprootpass";
	$db = "jsp";
    // connect database
    $con=mysqli_connect($host,$user,$pass,$db);
	//if($con)
		//echo "Connection is successful :)";
	//else
		//echo "What the ";
?>