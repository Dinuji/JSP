<?php

require("../DB/dbcon.php");

	
if(isset($_POST['date'])&&isset($_POST['fseid'])&&isset($_POST['type'])&&isset($_POST['serial'])) {
	

	$date = $_POST['date'];
	$fseid = $_POST['fseid'];
	$type = $_POST['type'];
	$serial = $_POST['serial'];
	

	$sql = "insert into damaged_main (`Date`,`FSEId`,`Type`,`SerialNumber`) values ('".$date."','".$fseid."','".$type."','".$serial."')";



		
		 $result=mysql_query($sql);


		if($result==1){
		echo "$serial"." damaged card added succesfully!";
		}else{
		echo "Something went wrong.";
			}


}
?>
