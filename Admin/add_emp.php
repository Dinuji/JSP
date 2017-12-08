<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Add Employee </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>


<br>
<div class="h2div" >New Employee</div>
<br>

<div class="div">
<br>

<form action="../sources/save_add_employee.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">First Name : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="FName" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Last Name : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="LName" placeholder="Enter User Name"></td>
                </tr>

                <tr>
                    <td style=" width: 200px"><label class="">Gender : </label></td>
                    <td style=" width: 200px"><select name="Gender">
                        <option value="male">Male</option>
                      <option value="Female">Female</option>
                      </select></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">NIC : </label></td>
                    <td style=" width: 200px"><input type="text" maxlength="10"class="" name="Nic" placeholder="Enter NIC"></td>
                </tr>
                
                <tr>
                    <td style=" width: 200px"><label class=""> Date Of Birth: </label></td>
                    <td style=" width: 200px"><input type="date" name="Dob"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Type : </label></td>
                    <td style=" width: 200px">
                        <select name="type" placeholder="Select a user type">
                        <option value="FSE">FSE</option>
                      <option value="Administrator">Administrator</option>
                      <option value="Manager">Manager</option>
                      <option value="StockKeeper">StockKeeper</option>
                        </select></td>
                </tr>

                <tr>
                    <td style=" width: 200px"><label class="">Employee ID : </label></td>
                    <td style=" width: 200px"><input type="text" maxlength="5"class="" name="Empid" placeholder="Enter Employee ID"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Telephone Number : </label></td>
                    <td style=" width: 200px"><input type="number" maxlength="10"class="" name="TelNum" placeholder="Enter TP No"></td>
                </tr>

                <tr>
                    <td style=" width: 200px"><label class="">Address : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="Address" placeholder="Enter Address"></td>
                </tr>

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Add Employee" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="submit" name="cancel" id="button" value="Cancel" onclick="clear()">
            </tr>
                
              
            </table>
        </form> 
  

<br>

</div>

<br>



</center>
  </body>
</html>