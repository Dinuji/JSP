<?php
	require "dbcon.php";
	
	$fseid=filter_input(INPUT_POST, "fseid");
	$shopname=filter_input(INPUT_POST, "shopname");
	
	$ammount=(int)filter_input(INPUT_POST, "ammount");//exist
	$exist=(int)filter_input(INPUT_POST, "exist");

	$date=date("Y.m.d");
	$rate=0.96;

	//get last invoice number
	$getLastInvoice="select reloadinvoiceNo from reloadsales order by reloadsalesid DESC limit 1";
	$resultinvoice=mysqli_query($con, $getLastInvoice);

	if(mysqli_num_rows($resultinvoice)>0 ){
		//echo "testing";
		$rowinvoice=mysqli_fetch_assoc($resultinvoice);
		$lastInvoice =(int)$rowinvoice["reloadinvoiceNo"]+1;	
	}else{
		$lastInvoice=1;
	}

	/*$sqlGetNowAmmount= "select ammount from fsereloadstock where fseid='$fseid'"; 

	$result=mysqli_query($con, $sqlGetNowAmmount);

	if(mysqli_num_rows($result)>0 ){

		$Nowammount= mysqli_fetch_assoc($result);
		
	}
	else{
		echo "error now ammount";
		$Nowammount=0;
	}*/

	$newAmmount=(float)$exist-(float)$ammount;

	$price=(float)($ammount*$rate);

	//echo $ammount." ".$price." ".$newAmmount; //testing

	$query="insert into reloadsales(reloadinvoiceNo,fseid,shopname,date,ammount,price) values($lastInvoice,'$fseid','$shopname','$date','$ammount','$price')  ";

		$row=mysqli_query($con, $query);
		if($row==1){
			echo " sell card Reload Ammount ".$ammount ;

			$queryUpdate="update fsereloadstock set ammount=$newAmmount where fseid='$fseid'";
		    $rowUpdate=mysqli_query($con, $queryUpdate);

		}else{
			echo " Error Occurred ";
		}



?>