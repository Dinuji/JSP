<?php
require('../sources/loginValidate.php');
header('Content-Type: application/json');

define('DB_HOST', '127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jsp');

$mysqli=new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);

if(!$mysqli){
	die("Connection failed ;".$mysqli->error);
}
session_start();
$id=$_SESSION ['userIdInTable'];


$query1 = sprintf("SELECT Date, Amount FROM piegraphtable WHERE FseId=$id");

$result=$mysqli->query($query1);

$data=array();
foreach ($result as $row){
	$data[] = $row;
}

$result->close();

$mysqli->close();

print json_encode($data);




?>