<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jsp');

//get connection
$mysqli=new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);

if(!$mysqli){
	die("Connection failed ;".$mysqli->error);
}
//query to get data from the table

$query = sprintf("SELECT Date,FSE3,FSE5,FSE6 FROM graphsales WHERE Date BETWEEN DATE_SUB(NOW(),INTERVAL 30 DAY) AND NOW()");

//execute query
$result=$mysqli->query($query);

//loop thru the returned data
$data = array();
foreach ($result as $row) {
	$data[]=$row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//print the data
print(json_encode($data));
?>
