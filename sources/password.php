<?php
require("../DB/dbcon.php");




if(isset($_POST['UserName']) && (isset($_POST['CurrentPassw'])) && (isset($_POST['newPassw'])) &&(isset($_POST['retypePassw']))){

	$UserName=$_POST['UserName'];
	$CurrentPassw=$_POST['CurrentPassw'];
	$newPassw=$_POST['newPassw'];
	$retypePassw=$_POST['retypePassw'];


	$sql="select * from user ";
	$res=mysql_query($sql);

	if($res){
		while($data=mysql_fetch_array($res)){
			$id=$data['Id'];
			$p=$data['Password'];
			$u=$data['UserName'];

			if($u==$UserName && $p==$CurrentPassw){
				if($newPassw==$retypePassw){

					$sql1="update user set Password=$newPassw where Id=$id";
					mysql_query($sql1);
				}
			}
		}
	}
echo "Password Changed Successfully";

}

?>