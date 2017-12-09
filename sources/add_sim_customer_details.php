<?php
require("../DB/dbcon.php");

?>

<?php

if(isset($_POST['submit'])){

	$no=$_POST['no'];
	$pef=$_POST['pef'];
	$nic=$_POST['nic'];
	$v = "V";
	$Nic = $nic.$v;
	


	$pattern = "/^\d{3}\d{3}\d{4}( x \d{1,6})?$/";

	if( !preg_match( $pattern, $no ) )
    {
        echo "The phone number you entered is not valid. ";
    }

    else{
	
	$sql="UPDATE sim set PEF_Id=$pef, Customer_NIC=$Nic WHERE SIM_No=$no";
	mysql_query($sql);
	
	echo "Customer Details were added succesfully.";
	
}

}

?>