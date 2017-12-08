<?php
require("../DB/dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>change pw</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body bgcolor="#e0e0e0">
<center>
        <br>
    <br>
<div class="h2div" >Changing Password</div>
<br>

<div class="div">
<br>

<form action="password.php" method="post">
	<table border="0">
	<tr>
		<td style=" width: 200px"><label class="">User Name : </label></td>
		<td style=" width: 200px"><input type="text" name="UserName" required/></td>
	</tr>
	<tr>
		<td style=" width: 200px">Current Password:</td>
		<td style=" width: 200px"><input type="password" name="CurrentPassw" required/> </td>
	</tr>
	<tr>
		<td style=" width: 200px">New Password:</td>
		<td style=" width: 200px"><input type="password" name="newPassw"> </td>
	</tr>
	<tr>
		<td style=" width: 200px">Retype Password:</td>
		<td style=" width: 200px"><input type="password" name="retypePassw" required/></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input class="bttn" type="submit" name="submit" ></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input class="bttn" type="submit" name="cancel" id="button" value="Cancel" onclick="clear()"></input></td>
	</tr>
	<tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
	</table>
</form>
<br>

</div>

<br>

</center>

</body>
</html>