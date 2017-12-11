<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>View Employees</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<br>


<br>
<div class="h2div" > Employees</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">ID</th>
		<th class="tablerecharge">First Name</th>
		<th class="tablerecharge">Last Name</th>
		<th class="tablerecharge">Gender</th>
        <th class="tablerecharge">NIC</th>
        <th class="tablerecharge">DOB</th>
        <th class="tablerecharge">Type</th>
        <th class="tablerecharge">Employee ID</th>
        <th class="tablerecharge">TP No</th>
        <th class="tablerecharge">Address</th>
	</tr>

    <!-- Selecting employee data from the database -->
    <?php
            $sql_query = "select * from  employee";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $id = $data['Id'];
                $fname = $data['FirstName'];
                $lname = $data['LastName'];
                $gender = $data['Gender'];
                $nic = $data['NIC'];
                $dob = $data['DOB'];
                $type = $data['Type'];
                $empid = $data['EmpId'];
                $tpno = $data['TpNum'];
                $add = $data['Address'];

        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$id.'</td>
                		<td class="tablerecharge">'.$fname.'</td>
                		<td class="tablerecharge">'.$lname.'</td>
                		<td class="tablerecharge">'.$gender.'</td>
                        <td class="tablerecharge">'.$nic.'</td>
                        <td class="tablerecharge">'.$dob.'</td>
                        <td class="tablerecharge">'.$type.'</td>
                        <td class="tablerecharge">'.$empid.'</td>
                        <td class="tablerecharge">'.$tpno.'</td>
                        <td class="tablerecharge">'.$add.'</td>
                	</tr>';

            }
	?>

	</table>
			
	

<br>

</div>
        
               <br>
<div class="h2div" >Delete Employee</div>
<br>

<div class="div">
<br>


    <form action="#" method="post">
    <table border="0">

            <tr>
                    <td ><label class="">Employee Id: </label></td>
                    <td >
                    <select name="id">
                        <option value="Select User" selected ><-------Employee ID---------></option>
                        <?php
                            
                            $sql_query2 ="SELECT * FROM employee ";
                            $result=mysql_query($sql_query2);
                            if($result!="")
                            {
                                while ($row = mysql_fetch_array($result))
                                {
                                    echo '<option value="'.$row['Id'].'" >'.$row['Id'].'-'.$row['FirstName'].'</option>';

                                }
                            }
                        ?>
                    </select>

                </td>
                </tr>

                <tr><td  colspan="2"><a href="#profile.php" target="abc">
                  <input class="bttn" type="submit" value="Delete Employee" name="submit"> </input></a></tr></td></tr>
    </table> </form>

    <?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];

    $sql="delete from employee where Id='$id'";
    mysql_query($sql);
}
?>
    
<br>

</div>







<br>

</center>
  </body>
</html>