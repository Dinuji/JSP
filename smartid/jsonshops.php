<?php
	require "dbcon.php";

	

	$sqlGetshop= "select Name from shop"; 

	/*$response=array();

	$result=mysqli_query($con, $sqlGetshop);

	if(mysqli_num_rows($result)>0 ){

		while($row=mysqli_fetch($result)){
			array_push($response,array($row[0]));
		}

		
	}else{
		echo "error";
	}*/

	$result = mysqli_query($con,$sqlGetshop);
    $storeArray = Array();
//while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
 //   $storeArray[] =  $row['Name'];  
//}
	while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
	//$row = mysqli_fetch_array($result, MYSQLI_NUM);
		array_push($storeArray,$row);


	
}
echo json_encode($storeArray);

	mysqli_close($con);

?>