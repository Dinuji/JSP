<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>View Users</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<br>


<br>
<div class="h2div" >Users</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">ID</th>
		<th class="tablerecharge">Name</th>
		<th class="tablerecharge">User Name</th>
		
        <th class="tablerecharge">Type</th>
	</tr>

    <!-- Selecting user data from the database -->
    <?php
            $sql_query = "select * from  user";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $id = $data['Id'];
                $name = $data['Name'];
                $uname = $data['UserName'];
                
                $type = $data['Type'];

        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$id.'</td>
                		<td class="tablerecharge">'.$name.'</td>
                		<td class="tablerecharge">'.$uname.'</td>
                		
                        <td class="tablerecharge">'.$type.'</td>
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