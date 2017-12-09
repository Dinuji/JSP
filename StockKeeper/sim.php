<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Sim</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<br>


<br>
<div class="h2div" >Details of Sim Cards</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">SIM No</th>
		<th class="tablerecharge">FSE Id</th>
		<th class="tablerecharge">PEF Id</th>
		<th class="tablerecharge">Customer NIC</th>
	</tr>

    
    <?php
            $sql_query = "select * from  sim";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $no = $data['SIM_No'];
                $fse = $data['FSE_Id'];
                $pef = $data['PEF_Id'];
                $nic = $data['Customer_NIC'];
        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$no.'</td>
                		<td class="tablerecharge">'.$fse.'</td>
                		<td class="tablerecharge">'.$pef.'</td>
                		<td class="tablerecharge">'.$nic.'</td>
                	</tr>';

            }
	?>

	</table>
			
	

<br>

</div>
<!.........................................................................................>

<br>
<div class="h2div" >Add SIMs</div>
<br>

<div class="div">
<br>
        <form action="../sources/add_sim.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">SIM No : </label></td>
                    <td style=" width: 200px"><input type="text"  name="no" placeholder="Enter SIM Number"></td>
               
                </tr>
                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Add SIM" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="submit" name="cancel" id="button" value="Cancel" onclick="clear()"></td>
            </tr>
                
              
            </table>
        </form> 



</div>


<!.........................................................................................>

<br>
<div class="h2div" >Transfer SIMs</div>
<br>

<div class="div">
<br>

            <form action="../sources/transfer_sim.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">SIM No : </label></td>
                    <td style=" width: 200px"><input type="text"  name="no" placeholder="Enter SIM Number"></td>               
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">FSE Id : </label></td>
                    <td>
                    <select name="fse_id">
                        
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

                </td>               
                </tr>
                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Transfer" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="submit" name="cancel" id="button" value="Cancel" onclick="clear()"></td>
            </tr>
                
              
            </table>
        </form> 


</div>
<!.........................................................................................>

<br>
<div class="h2div" >Add Customer Details</div>
<br>

<div class="div">
<br>

    <form action="../sources/add_sim_customer_details.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">SIM No : </label></td>
                    <td style=" width: 200px"><input type="text"  name="no" placeholder="Enter SIM Number"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">PEF Id : </label></td>
                    <td style=" width: 200px"><input type="text"  name="pef" placeholder="Enter PEF ID"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Customer's NIC : </label></td>
                    <td style=" width: 200px"><input type="text"  name="nic" maxlength="9" placeholder="Enter Customer's NIC">V</td>
                </tr>
                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Add" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="submit" name="cancel" id="button" value="Cancel" onclick="clear()"></td>
            </tr>
                
              
            </table>
        </form>


</div>


<br>

</center>
  </body>
</html>