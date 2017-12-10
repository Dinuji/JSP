<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jsp');

//get connection
$mysqli=new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);

if(!$mysqli){
	die("Connection failed ;".$mysqli->error);
}
//query to get data from the table

$query = sprintf("SELECT Date,FSE1,FSE4,FSE6,FSE7,FSE8 FROM graphsales WHERE Date BETWEEN DATE_SUB(NOW(),INTERVAL 100 DAY) AND NOW()");

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
