<?php
require("../DB/dbcon.php");

?>

<?php
if(isset($_POST['submit'])){
	$no=$_POST['no'];

	$pattern = "/^\d{3}\d{3}\d{4}( x \d{1,6})?$/";

	if( !preg_match( $pattern, $no ) )
    {
        echo "The phone number you entered is not valid. ";
    }

    else{

    $sql1="select * from sim where SIM_No=$no";
   	$res=mysql_query($sql1);
   	if(mysql_num_rows($res)==1){
   		echo "The sim you entered already exists. Please check the number. ";
   	}
	
	else{
	$sql="INSERT INTO sim(SIM_No) VALUES($no)";
	mysql_query($sql);

	echo "The sim was added successfully";
}
}
	
}


?>