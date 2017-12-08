<?php
require("../DB/dbcon.php");

?>

<?php


$fname = $_POST["name"];
$uname = $_POST["username"];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$type=$_POST['type'];
$name = "/^[A-Z][a-zA-Z]+$";
$emailvalidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($name) || empty($uname) || empty($password) || empty($repassword) || empty($type)){

	echo "
<div class= 'alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields..!</b>
      </div>  
	";
	exit();
}
else{

/*if(!preg_match($emailvalidation, $email))
{

	echo "
<div class= 'alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>not a valid email address</b>
      </div>  
	";





	exit();
}*/
if(strlen($password) < 7){

	echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>Weak Password!.</b>
                    </div>";



	
	exit();
}
if(strlen($repassword ) < 7){

	
	echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>Weak Password!.</b>
                    </div>"; 
    

	exit();
}

if($password != $repassword){

	
	echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The passwords you entered don't match!</b>
                    </div>";
	exit();
}


$sql= "select Id from user where UserName = '$uname' limit 1";
$check_query = mysql_query($sql);
$count_uname = mysql_num_rows($check_query);

if($count_uname > 0){


	echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>This user name is already taken. Please use a different user name.</b>
                    </div>";
	
	exit();
}
else {
	
	$sql = "INSERT INTO `user` (`Name`, `UserName`, `password`, `Type`) VALUES ('$fname', '$uname', '$password', '$type')";
	$run_query = mysql_query($sql);
    
    if($run_query){

    	echo "<div class='success' style='background-color: green; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>You have been registered succesfully!</b>
                    </div>";
    	
    }





}

}














?><?php

require("../DB/dbcon.php");

	
if(isset($_POST['name'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['type'])) {
	

	$name = $_POST['name'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$type = $_POST['type'];
	

	$sql = "insert into user (`Name`,`UserName`,`Password`,`Type`) values ('".$name."','".$uname."','".$pass."','".$type."')";
		$result=mysql_query($sql);


		if($result==1){
		echo "$name"." user added succesfully!";
		}else{
		echo "Something went wrong.";
			}


}
?>

























