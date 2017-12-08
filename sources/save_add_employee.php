<?php
require("../DB/dbcon.php");


if(isset($_POST['FName']) && isset($_POST['LName']) && isset($_POST['Gender'])  && isset($_POST['Nic'])  && isset($_POST['Dob']) && isset($_POST['type'])  && isset($_POST['Empid'])  && isset($_POST['TelNum']) && isset ($_POST['Address'])) {


	
	$fname=$_POST['FName'];
	$lname=$_POST['LName'];
	$gender=$_POST['Gender'];
	$nic=$_POST['Nic'];
	$dob=$_POST['Dob'];
	$job=$_POST['type'];
	$empid=$_POST['Empid'];
	$telnum=$_POST['TelNum'];
	$address=$_POST['Address'];
	
	

	$sql = "insert into employee (`FirstName`,`LastName`,`Gender`,`NIC`,`DOB`, `Type`,`EmpId`,`TpNum`,`Address`) values ('".$fname."','".$lname."','".$gender."','".$nic."','".$dob."','".$job."','".$empid."','".$telnum."','".$address."')";

	$result = mysql_query($sql);

	if($result==1){
		echo "$fname"." employee added succesfully!";
		}else{
		echo "Something went wrong.";
			}

			}

?>










	

	