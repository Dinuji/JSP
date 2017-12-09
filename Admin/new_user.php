<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Add User </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>


<br>
<div class="h2div" >New User</div>
<br>

<div class="div">
<br>

<form action="../sources/save_add_user.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">Name : </label></td>
                    <td style=" width: 200px"><input type="text" name="name" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">User Name : </label></td>
                    <td style=" width: 200px"><input type="text"  name="username" placeholder="Enter User Name"></td>
                </tr>
                
                <tr>
                    <td style=" width: 200px"><label class="">Password : </label></td>
                    <td style=" width: 200px"><input type="password"  name="password" placeholder="Minimum lenghth is 7"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Retype Password : </label></td>
                    <td style=" width: 200px"><input type="password"  name="repassword" placeholder=Minimum lenghth is 7"></td>
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
                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 200px"><input class="bttn" type="submit" value="Add User" name="add"></td>
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