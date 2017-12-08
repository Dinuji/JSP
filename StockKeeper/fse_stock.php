<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>FSE_Stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>
<br>
<div class="h2div" >FSE Stock</div>
<br>


<div class="div">

 
    <form action="fse_stock_summery.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">

            <tr>
                <td align="center" style=" width: 150px">
                    Select FSE:
                </td>
                <td colspan="2" align="left" style=" width: 250px">
                    <select name="id">
                        <option style=" width: 250px" value="Select FSE" selected ><-----Select FSE-----></option>
                        <?php
                            
                            $sql_query2 ="SELECT * FROM user WHERE Type='FSE'";
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

                </td></tr>

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>

                <tr>

                <td align="center" style=" width: 300px"><input class="bttn" type="submit" value="Show Stock" name="submit"></td>
                
                <td style=" width: 300px"> <input class="bttn" type="submit" name="button" id="button" value="Cancel" onclick="clear()"> </td>
            </tr>
            

                     
               
            
        </table>
            


    </form>
</div>
<br>

</center>
  </body>
</html>