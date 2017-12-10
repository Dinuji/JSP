<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title> Damage Stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
 



              <div class="h2div" >Summary - Damaged Stock</div>
                <br>

                <div class="div">
                <br>

                    <table class="table1 normaltable" >                  

                      <tr>
                        <th class="tablerecharge"> Added Date</th>
                        <th class="tablerecharge">FSE Id</th>
                        <th class="tablerecharge">Type</th>
                        <th class="tablerecharge">Serial Number</th>

                         
                      </tr>

                      <!-- Selecting damage card  data from the database -->
                      <?php
                              $sql_querydam = "select * from  damaged_main"; 
                              $resultdam = mysql_query($sql_querydam);

                              while ($datadam = mysql_fetch_array($resultdam)) 
                              {
                                  
                                  $date = $datadam['Date'];
                                  $fseid = $datadam['FSEId'];
                                  $type = $datadam['Type'];
                                  $serial = $datadam['SerialNumber'];
        
                                  echo '
                                    <tr>
                                        <td class="tablerecharge">'.$date.'</td>
                                        <td class="tablerecharge">'.$fseid.'</td>
                                        <td class="tablerecharge">'.$type.'</td>
                                        <td class="tablerecharge">'.$serial.'</td>
                                    </tr>';
                              }
                        ?>

                      </table>   



                                <br>
                    <form action="sales zero.php" method="post">
                  <input class="bttn" type="submit" value="Get PDF" name="generate_pdf"> </input>
                    </form>

                <br>
                

              </div>
              <br>



               
                <br>

</center>
  </body>
</html>
