<?php
require('../DB/dbcon.php');



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="post">
	
	<input type="text" name="id" placeholder="enter ID ">

</form>

<?php

	if (isset($_POST['id'])) {
		$id = $_POST['id'];

		$sql = "select * from employee where Id = '$id'";
		$result = mysql_query($sql);

		if ($result) {
			echo '<table>';

			while ($data = mysql_fetch_array($result)) {
				$fname = $data['FirstName'];
				$lname = $data['LastName'];
				$gen = $data['Gender'];
				$nic = $data['NIC'];
				$dob = $data['DOB'];
				$type = $data['Type'];
				$empid = $data['EmpId'];
				$tpnum = $data['TpNum'];
				$address = $data['Address'];

				echo '<tr><td><strong>Firstname </td></strong> :'.'<td>'.$fname.'</td></tr>';
				echo '<tr><td><strong>Lastname  </td> </strong>:'.'<td>'.$lname.'</td></tr>';
				echo '<tr><td><strong>Gender </td></strong>    :'.'<td>'.$gen.'</td></tr>';
				echo '<tr><td><strong>NIC </td></strong> :'.'<td>'.$nic.'</td></tr>';
				echo '<tr><td><strong>DOB </td></strong> :'.'<td>'.$dob.'</td></tr>';
				echo '<tr><td><strong>Type </td></strong> :'.'<td>'.$type.'</td></tr>';
				echo '<tr><td><strong>EmployeeId </td></strong> :'.'<td>'.$empid.'</td></tr>';
				echo '<tr><td><strong>TpNum </td></strong> :'.'<td>'.$tpnum.'</td></tr>';
				echo '<tr><td><strong>Address </td></strong> :'.'<td>'.$address.'</td></tr>';

				break;

			}

			echo '</table>';
		}
	}


?>



</body>
</html>