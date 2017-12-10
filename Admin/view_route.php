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
<div class="h2div" >Delete Route</div>
<br>

<div class="div">
<br>


    <form action="#" method="post">
    <table border="0">

            <tr>
                    <td ><label class="">Route Id: </label></td>
                    <td >
                    <select name="id">
                        <option value="Select User" selected ><-------Route ID---------></option>
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

                <tr><td  colspan="2"><a href="#profile.php" target="abc">
                  <input class="bttn" type="submit" value="Delete Route" name="submit"> </input></a></tr></td></tr>
    </table> </form>

    <?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];

    $sql="delete from route where Id='$id'";
    mysql_query($sql);
}
?>
    
<br>

</div>






<br>

</center>
  </body>
</html>