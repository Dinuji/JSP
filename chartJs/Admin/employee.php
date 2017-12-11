<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="../sources/save_add_employee.php" method="post">
		First Name :
		<input type="text" name="FName"> 
		<br>
		Last Name :
		<input type="text" name="LName">
		<br>
		Gender :  Male :
		<input type="radio" name="Gender" value="Male">
		Female :
		<input type="radio" name="Gender" value="Female" checked="checked">
		<br>
		NIC :
		<input type="text" name="Nic">
		<br>
		Date Of Birth :
		<input type="text" name="Dob">
		<br>
		Type : Admin :
		<input type="radio" name="type" value="Administrator" checked="checked">
		Manager :
		<input type="radio" name="type" value="Manager">
		Stock Keeper :
		<input type="radio" name="type" value="StockKeeper">
		FSE :
		<input type="radio" name="type" value="FSE">
		<br>
		Telephone Number :
		<input type="text" name="TelNum">
		<br>
		Address :
		<input type="text" name="Address"><br>

		<input type="submit" name="submit" value="Enter">

	</form >

	</form>

		



</body>
</html>