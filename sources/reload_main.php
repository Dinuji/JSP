<?php
require("../DB/dbcon.php");



if (isset($_POST['amount']))
	{
		echo "succesfully added";
		
		$amount = $_POST['amount'];
				
		$sql2="select * from reloads";
		$res=mysql_query($sql2);
		if(mysql_num_rows($res)==1){
			$sql3="update reloads set Amount=Amount+$amount";
			mysql_query($sql3);
		}
		else{
		$sql1="INSERT INTO reloads VALUES($amount) ";
		mysql_query($sql1);}
	}




					

			
 







































?>