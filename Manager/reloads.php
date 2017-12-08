<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Reloads</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
        


        <br>
<div class="h2div" >Reload Summary</div>
<br>

<div class="div">
<br>

            <?php
            $sql_query = "select * from  reloads";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $am = $data['Amount'];             
                
               
        
                echo '
                     <h3> Remaining amount :  </h3>
                      <h2> '.$am.'  </h2>';

            }
    ?>



             
    

<br>

</div>


<!-------------------------------------------------------->



<br>
<div class="h2div" >Reload Summary of FSE's</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

    <tr>
        <th class="tablerecharge">FSE ID</th>
        <th class="tablerecharge"> Amount</th>
        
    </tr>

    <!-- Selecting data from the database -->
    <?php
            $sql_query = "select * from  reload_transferred_stock";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $id = $data['FseId'];             
                $amount = $data['Amount'];
               
        
                echo '
                    <tr>
                        <td class="tablerecharge">'.$id.'</td>
                        <td class="tablerecharge">'.$amount.'</td>
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