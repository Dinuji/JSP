

<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Add shop </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>


<br>
<div class="h2div" >New Shop</div>
<br>

<div class="div">
<br>

<form action="../sources/save_add_shop.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">Shop Name : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="Sname" placeholder="Enter Shop Name"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Owner Name : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="Oname" placeholder="Enter Owner's Name"></td>
                </tr>

                
                <tr>
                    <td style=" width: 200px"><label class="">Owner NIC : </label></td>
                    <td style=" width: 200px"><input type="text" maxlength="10"class="" name="NIC" placeholder="Enter NIC"></td>
                </tr>
                
                
                
                <tr>
                    <td style=" width: 200px"><label class="">Contact Number : </label></td>
                    <td style=" width: 200px"><input type="number" maxlength="10"class="" name="TPNum" placeholder="Enter TP No"></td>
                </tr>

                <tr>
                    <td style=" width: 200px"><label class="">Address : </label></td>
                    <td style=" width: 200px"><input type="text" class="" name="address" placeholder="Enter Address"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Route Id: </label></td>
                    <td style=" width: 200px">
                    <select name="RouteId">
                        <option value="Select Route" selected ><-------Route ID---------></option>
                        <?php
                            
                            $sql_query2 ="SELECT * FROM route ";
                            $result=mysql_query($sql_query2);
                            if($result!="")
                            {
                                while ($row = mysql_fetch_array($result))
                                {
                                    echo '<option value="'.$row['Id'].'" >'.$row['Id'].'-'.$row['Name'].'</option>';

                                }
                            }
                        ?>
                    </select>

                </td>
                </tr>

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Add Shop" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="submit" name="cancel" id="button" value="Cancel" onclick="clear()"></td>
            </tr>
                
              
            </table>
        </form> 
  

<br>

</div>

<br>



</center>
  </body>
</html>