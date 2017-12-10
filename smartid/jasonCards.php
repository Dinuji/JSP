<?php
	require "dbcon.php";

	//$fseid=filter_input(INPUT_POST, "fseid");
	$fseid="fse1";
				
	$count20;
	$count50;
	$count100;
	$count500;
	$count1000;

	$firstcard20;
	$firstcard50;
	$firstcard100;
	$firstcard500;
	$firstcard1000;

	$getCount20Query="select count(serialNo) from fsecardstock where type='20' and fseid='$fseid'";
	$resultCount20=mysqli_query($con, $getCount20Query);
	if(mysqli_num_rows($resultCount20)>0 ){

		$rowCount20=mysqli_fetch_assoc($resultCount20);
		$count20 =(int)$rowCount20["count(serialNo)"];	
	}else{
		$count20=0;
	}	


	$sql20= "select serialNo from fsecardstock where type='20' and fseid='$fseid' order by serialNo asc limit 1 "; 

	$result20=mysqli_query($con, $sql20);

	if(mysqli_num_rows($result20)>0 ){

		$row20 = mysqli_fetch_assoc($result20);
			//getting firts cerialNo from card30 table to $firstcard30
		$firstcard20 = (int)$row20["serialNo"];		
	}
	else{
		$firstcard20=0;
	}


	$getCount50Query="select count(serialNo) from fsecardstock where type='50' and fseid='$fseid'";

	$resultCount50=mysqli_query($con, $getCount50Query);
	if(mysqli_num_rows($resultCount50)>0 ){

		$rowCount50=mysqli_fetch_assoc($resultCount50);
		$count50 =(int)$rowCount50["count(serialNo)"];	
	}
	else{
		$count50=0;
	}
		
	//query to get 1st cerial number from card50 table
	$sql50= "select serialNo from fsecardstock where type='50' and fseid='$fseid' order by serialNo asc limit 1";

	$result50=mysqli_query($con, $sql50);

	if(mysqli_num_rows($result50)>0 ){

		$row50 = mysqli_fetch_assoc($result50);
		$firstcard50 = (int)$row50["serialNo"];				
								
	}else{
		$firstcard50=0;
	}



	$getCount100Query="select count(serialNo) from fsecardstock where type='100' and fseid='$fseid'";

	$resultCount100=mysqli_query($con, $getCount100Query);
	if(mysqli_num_rows($resultCount100)>0 ){

		$rowCount100=mysqli_fetch_assoc($resultCount100);
		$count100 =(int)$rowCount100["count(serialNo)"];	
	}
	else{
		$count100=0;
	}
			

	$sql100= "select serialNo from fsecardstock where type='100' and fseid='$fseid' order by serialNo asc limit 1"; 

	$result100=mysqli_query($con, $sql100);



	if(mysqli_num_rows($result100)>0 ){

		$row100 = mysqli_fetch_assoc($result100);
			//getting firts cerialNo from card100 table to $firstcard100
		$firstcard100 = (int)$row100["serialNo"];
	}
	else{
		$firstcard100=0;
	}	


	$getCount500Query="select count(serialNo) from fsecardstock where type='500' and fseid='$fseid'";

	$resultCount500=mysqli_query($con, $getCount500Query);
	if(mysqli_num_rows($resultCount500)>0 ){

		$rowCount500=mysqli_fetch_assoc($resultCount500);
		
	    $count500 =(int)$rowCount500["count(serialNo)"];	
	}else{
		$count500=0;
	}
	
	
	//query to get 1st cerial number from card500 table
	$sql500= "select serialNo from fsecardstock where type='500' and fseid='$fseid' order by serialNo asc limit 1"; 

	$result500=mysqli_query($con, $sql500);

	if(mysqli_num_rows($result500)>0 ){

		$row500 = mysqli_fetch_assoc($result500);
		//getting firts cerialNo from card500 table to $firstcard500
		$firstcard500 = (int)$row500["serialNo"];
	}else{
		$firstcard500=0;
	}


	$getCount1000Query="select count(serialNo) from fsecardstock where type='1000' and fseid='$fseid'";

	$resultCount1000=mysqli_query($con, $getCount1000Query);
	if(mysqli_num_rows($resultCount1000)>0 ){

		$rowCount1000=mysqli_fetch_assoc($resultCount1000);
		
	$count1000 =(int)$rowCount1000["count(serialNo)"];	
	}else{
		$count1000=0;
	}
	
		
	$sql1000= "select serialNo from fsecardstock where type='1000' and fseid='$fseid' order by serialNo asc limit 1"; 

	$result1000=mysqli_query($con, $sql1000);	

	if(mysqli_num_rows($result1000)>0 ){

		$row1000 = mysqli_fetch_assoc($result1000);
		//getting firts cerialNo from card200 table to $firstcard200
		$firstcard1000 = (int)$row1000["serialNo"];
	}else{
		$firstcard1000=0;
	}
	/*
	if($firstcard20==NULL){
		$firstcard20=0;
	}
	if($firstcard50==NULL){
		$firstcard50=0;
	}
	if($firstcard100==NULL){
		$firstcard100=0;
	}
	if($firstcard500==NULL){
		$firstcard500=0;
	}
	if($firstcard1000==NULL){
		$firstcard1000=0;
	}


	if($count20==NULL){
		$count20 =0;
	}
	if($count50==NULL){
		$count50=0;
	}
	if($count100==NULL){
		$count100=0;
	}
	if($count500==NULL){
		$count500=0;
	}
	if($count1000==NULL){
		$count1000=0;
	}*/

	$response=array();

	$response["card20"]=(string)$firstcard20;	
	$response["card50"]=(string)$firstcard50;
	$response["card100"]=(string)$firstcard100;
	$response["card500"]=(string)$firstcard500;
	$response["card1000"]=(string)$firstcard1000;


	$response["count20"]=(string)$count20;	
	$response["count50"]=(string)$count50;
	$response["count100"]=(string)$count100;
	$response["count500"]=(string)$count500;
	$response["count1000"]=(string)$count1000;

	echo json_encode(array("server_response"=>$response));

	mysqli_close($con);


?>