<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Sales</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>

<br>


<br>
<div class="h2div" > Sales</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">Date</th>
		<th class="tablerecharge">FSE 1</th>
		<th class="tablerecharge">FSE 4</th>
		<th class="tablerecharge">FSE 6</th>
        <th class="tablerecharge">FSE 7</th>
        <th class="tablerecharge">FSE 8</th>
        
	</tr>

    <?php
            $sql_query = "select * from  graphsales";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $date = $data['Date'];
                $f1 = $data['FSE1'];
                $f4 = $data['FSE4'];
                $f6 = $data['FSE6'];
                $f7 = $data['FSE7'];
                $f8 = $data['FSE8'];
               

        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$date.'</td>
                		<td class="tablerecharge">'.$f1.'</td>
                		<td class="tablerecharge">'.$f4.'</td>
                		<td class="tablerecharge">'.$f6.'</td>
                        <td class="tablerecharge">'.$f7.'</td>
                        <td class="tablerecharge">'.$f8.'</td>
                        
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