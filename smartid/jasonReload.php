<?php
	require "dbcon.php";

	$fseid=filter_input(INPUT_POST, "fseid");
	//$fseid="fse1";

	$sqlGetAmmount= "select ammount from fsereloadstock where fseid='$fseid'"; 

	$result=mysqli_query($con, $sqlGetAmmount);

	if(mysqli_num_rows($result)>0 ){

		$ammount= mysqli_fetch_assoc($result);
		
	}

	$response["exist"]=$ammount["ammount"];

	echo json_encode(array("server_response"=>$response));

	mysqli_close($con);

?>