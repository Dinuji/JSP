<?php

require("../DB/dbcon.php");

	
if(isset($_POST['Sname'])&&isset($_POST['Oname'])&&isset($_POST['NIC'])&&isset($_POST['TPNum'])&&isset($_POST['address'])&&isset($_POST['RouteId'])) {
	

	$name = $_POST['Sname'];
	$oname = $_POST['Oname'];
	$nic = $_POST['NIC'];
	$tpnum = $_POST['TPNum'];
	$address = $_POST['address'];
	$routeid = $_POST['RouteId'];

	$sql = "insert into shop (`Name`,`OwnerName`,`OwnerNIC`,`TPNumber`,`Address`,`RouteId`) values ('".$name."','".$oname."','".$nic."','".$tpnum."','".$address."','".$routeid."')";



		
		 $result=mysql_query($sql);


		if($result==1){
		echo "$name"." shop added succesfully!";
		}else{
		echo "Something went wrong.";
			}


}
?>


























