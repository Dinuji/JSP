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
	                  <a href="#profile.php" target="abc">
                  <input class="bttn" type="submit" value="Get PDF" name="pdf"> </input></a>

<br>

</div>



<br>

</center>
  </body>
</html>