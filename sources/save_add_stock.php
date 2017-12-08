<?php
require("../DB/dbcon.php");



if (isset($_POST['Start20']) && isset($_POST['End20']))
	{
		
		$Start20 = $_POST['Start20'];
		$End20 = $_POST['End20'];
		$Type=20;
		for($i=$Start20;$i<=$End20;$i++){

					$sql= "insert into main_stock_deatils(`Type`,`Serial`) values ('".$Type."','".$i."')";

					$result=mysql_query($sql);}
				

		$sql2="UPDATE mainstock_summary set RemainingAmount=RemainingAmount+($End20-$Start20) where Type = 20";
		mysql_query($sql2);
		
	}


if (isset($_POST['Start50']) && isset($_POST['End50']))
	{
		$Start50 = $_POST['Start50'];
		$End50 = $_POST['End50'];
		$Type=50;
		for($i=$Start50;$i<=$End50;$i++){

					$sql= "insert into main_stock_deatils(`Type`,`Serial`) values ('".$Type."','".$i."')";

					$result=mysql_query($sql);}

		$sql2="UPDATE mainstock_summary set RemainingAmount=RemainingAmount+($End50-$Start50) where Type = 50";
		mysql_query($sql2);
				}

if (isset($_POST['Start100']) && isset($_POST['End100']))
	{
		$Start100 = $_POST['Start100'];
		$End100 = $_POST['End100'];
		$Type=100;
		for($i=$Start100;$i<=$End100;$i++){

					$sql= "insert into main_stock_deatils(`Type`,`Serial`) values ('".$Type."','".$i."')";

					$result=mysql_query($sql);}
		$sql2="UPDATE mainstock_summary set RemainingAmount=RemainingAmount+($End100-$Start100) where Type = 100";
		mysql_query($sql2);
				}

if (isset($_POST['Start200']) && isset($_POST['End200']))
	{
		$Start200 = $_POST['Start200'];
		$End200 = $_POST['End200'];
		$Type=200;
		for($i=$Start200;$i<=$End200;$i++){

					$sql= "insert into main_stock_deatils(`Type`,`Serial`) values ('".$Type."','".$i."')";

					$result=mysql_query($sql);}
			$sql2="UPDATE mainstock_summary set RemainingAmount=RemainingAmount+($End200-$Start200) where Type = 200";
		mysql_query($sql2);
				}

if (isset($_POST['Start500']) && isset($_POST['End500']))
	{
		$Start500 = $_POST['Start500'];
		$End500 = $_POST['End500'];
		$Type=500;
		for($i=$Start500;$i<=$End500;$i++){

					$sql= "insert into main_stock_deatils(`Type`,`Serial`) values ('".$Type."','".$i."')";

					$result=mysql_query($sql);}
					$sql2="UPDATE mainstock_summary set RemainingAmount=RemainingAmount+($End500-$Start500) where Type = 500";
		mysql_query($sql2);
				}

if (isset($_POST['Start1000']) && isset($_POST['End1000']))
	{
		$Start1000 = $_POST['Start1000'];
		$End1000 = $_POST['End1000'];
		$Type=1000;
		for($i=$Start1000;$i<=$End1000;$i++){

					$sql= "insert into main_stock_deatils(`Type`,`Serial`) values ('".$Type."','".$i."')";

					$result=mysql_query($sql);}
					$sql2="UPDATE mainstock_summary set RemainingAmount=RemainingAmount+($End1000-$Start1000) where Type = 1000";
		mysql_query($sql2);
				}

					

			
 

























echo "succesfully added";













?>