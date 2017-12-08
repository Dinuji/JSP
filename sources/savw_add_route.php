<?php

require("../DB/dbcon.php");

	
if(isset($_POST['Rname'])&&isset($_POST['Distance'])) {
	

	$rname = $_POST['Rname'];
	$distance = $_POST['Distance'];
	

	$sql = "insert into route (`Name`,`Distance`) values ('".$rname."','".$distance."')";
		$result=mysql_query($sql);


		if($result==1){
		echo "$rname"." route added succesfully!";
		}else{
		echo "Something went wrong.";
			}


}
?>