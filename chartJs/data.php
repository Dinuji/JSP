<?php

header('Content-Type: application/json');

define('DB_HOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jsp');

$mysqli=new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);

if(!$mysqli){
	die("Connection failed ;".$mysqli->error);
}
//for($i=1;$i<15;$i++){
	//$x="INSERT INTO graphtable1(Id,Count) VALUES(3,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=3))" ;
	//$result2=$mysqli->query($x);
//}

$query = sprintf("SELECT Id, Count FROM graphtable1 ORDER BY Id");

$result=$mysqli->query($query);

$data=array();
foreach ($result as $row){
	$data[] = $row;
}

$result->close();

$mysqli->close();

print json_encode($data);







