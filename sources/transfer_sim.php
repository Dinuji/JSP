<?php
require("../DB/dbcon.php");

?>

<?php

if(isset($_POST['submit'])){

	$no=$_POST['no'];
	$fse_id=$_POST['fse_id'];

	$pattern = "/^\d{3}\d{3}\d{4}( x \d{1,6})?$/";

	if( !preg_match( $pattern, $no ) )
    {
        echo "The phone number you entered is not valid. ";
    }

    else{
	
	$sql="UPDATE sim SET FSE_Id=$fse_id WHERE SIM_No=$no";
	mysql_query($sql);
	echo "Transferred succesfully";
}

}

?>