

<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Add Route </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>


<br>
<div class="h2div" >New Route</div>
<br>

<div class="div">
<br>

<form action="../sources/savw_add_route.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">Route Name : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="Rname" placeholder="Enter Route Name"></td>
                </tr>

                <tr>
                    <td style=" width: 200px"><label class="">Distance : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="Distance" placeholder="Enter Distance"></td>
                </tr>

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Add Route" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="reset" name="reset" id="button" value="Cancel" onclick="clear()">
            </tr>
                
              
            </table>
        </form> 
  

<br>

</div>

<br>



</center>
  </body>
</html>