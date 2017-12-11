<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>View Shop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<br>


<br>
<div class="h2div" >Shops</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">Shop ID</th>
		<th class="tablerecharge">Shop Name</th>
		<th class="tablerecharge">Owner Name</th>
		<th class="tablerecharge">Owner NIC</th>
        <th class="tablerecharge">Contact No</th>
        <th class="tablerecharge">Address</th>
        <th class="tablerecharge">Route ID</th>
	</tr>

    <!-- Selecting shop data from the database -->
    <?php
            $sql_query = "select * from  shop";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $id = $data['ShopId'];
                $sname = $data['Name'];
                $oname = $data['OwnerName'];
                $nic = $data['OwnerNIC'];
                $tp = $data['TPNumber'];
                $add = $data['Address'];
                $rid = $data['RouteId'];

        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$id.'</td>
                		<td class="tablerecharge">'.$sname.'</td>
                		<td class="tablerecharge">'.$oname.'</td>
                		<td class="tablerecharge">'.$nic.'</td>
                        <td class="tablerecharge">'.$tp.'</td>
                        <td class="tablerecharge">'.$add.'</td>
                        <td class="tablerecharge">'.$rid.'</td>
                	</tr>';

            }
	?>

	</table>
			
	

<br>

</div>



                <div class="h2div" >Delete Shops</div>
<br>

<div class="div">
<br>


    <form action="#" method="post">
    <table border="0">

            <tr>
                    <td ><label class="">Shop Id: </label></td>
                    <td >
                    <select name="id">
                        <option value="Select User" selected ><-------Select Shop---------></option>
                        <?php
                            
                            $sql_query2 ="SELECT * FROM shop ";
                            $result=mysql_query($sql_query2);
                            if($result!="")
                            {
                                while ($row = mysql_fetch_array($result))
                                {
                                    echo '<option value="'.$row['ShopId'].'" >'.$row['Id'].'-'.$row['Name'].'</option>';

                                }
                            }
                        ?>
                    </select>

                </td>
                </tr>

                <tr><td  colspan="2"><a href="#profile.php" target="abc">
                  <input class="bttn" type="submit" value="Delete Shop" name="submit"> </input></a></tr></td></tr>
    </table> </form>

    <?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];

    $sql="delete from shop where ShopId='$id'";
    mysql_query($sql);
}
?>
    
<br>

</div>








<br>

</center>
  </body>
</html>