<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>View Route</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<br>


<br>
<div class="h2div" >Routes</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">ID</th>
		<th class="tablerecharge">Name</th>
		<th class="tablerecharge">Distance</th>
	</tr>

    <!-- Selecting route data from the database -->
    <?php
            $sql_query = "select * from  route";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $id = $data['Id'];
                $name = $data['Name'];
                $dis = $data['Distance'];
              

        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$id.'</td>
                		<td class="tablerecharge">'.$name.'</td>
                		<td class="tablerecharge">'.$dis.'</td>
                		
                	</tr>';

            }
	?>

	</table>
			
	

<br>

</div>

<br>

</center>
  </body>
</html>