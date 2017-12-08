<?php
	
	$dbhost = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$errMsg = "";
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	if(! $conn) //if not connected
	{
		die('Could not connect to db'.mysql_error());
	}
	
	mysql_select_db("jsp"); //select database
	
	//validate
	if(isset($_POST['login_sbtn']))
	{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			//select user query
			$sqlQuerry = " select * from user where UserName = '$username' and Password = '$password' ";
			$retVal = mysql_query($sqlQuerry);
			$data = mysql_fetch_array($retVal);
			
			if(mysql_num_rows($retVal) > 0)
			{
				session_start();
	
				$userIdInTable = $data['Id'];
				$userNameInTable = $data['Name'];
				$userTypeInTable = $data['Type'];
				
				$_SESSION ['userIdInTable']   = $userIdInTable;
				$_SESSION ['userNameInTable'] = $userNameInTable;
				$_SESSION ['userTypeInTable'] = $userTypeInTable;
				
				//Login different type of users
				if ($_SESSION ['userTypeInTable'] == "Administrator") 
				{
					echo '<script>';
					echo 'location.href="../Admin/index.php"';
					echo '</script>';
				}
				elseif($_SESSION ['userTypeInTable'] == "Manager")
				{
					echo '<script>';
					echo 'location.href="../Manager/index.php"';
					echo '</script>';
				}
				elseif($_SESSION ['userTypeInTable'] == "StockKeeper")
				{
					echo '<script>';
					echo 'location.href="../StockKeeper/index.php"';
					echo '</script>';
				}
				elseif($_SESSION ['userTypeInTable'] == "FSE")
				{
					echo '<script>';
					echo 'location.href="../FSE/index.php"';
					echo '</script>';
				}
			}	

			else
			{
				$errMsg = 'Error. User UserName or Passwrod incorrect';
			}
		
			if($errMsg != "")
			{
				echo '<script>';
				echo 'alert("Enter a valid UserName or password");';
				echo 'location.href="../index.php"';
				echo '</script>';
			}	
		
		
		
	}
	
	if(isset($_POST['logout'])){
		$_SESSION ['userIdInTable'] = '';
		$_SESSION ['userNameInTable'] = '';
		$_SESSION ['userTypeInTable'] = '';
		session_destroy(); 
		echo '<script>';
		echo 'location.href="../index.php"';
		echo '</script>';
	}
?>