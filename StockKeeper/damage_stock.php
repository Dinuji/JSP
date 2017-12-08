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
                <form action="../sources/clear_damaged_source.php" method="post">
                <button name="submit" class="bttn" width="50px"> Clear</button>
                  </form>
              </div>
              <br>



                <div class="h2div" >Add Damage Cards </div>
                <br>

                <div class="div">

                

                <form action="../sources/save_add_damaged_stock.php" method="post">
            <table border="0">
                
                <tr>
                    <td style=" width: 200px"><label class="">Date : </label></td>
                    <td style=" width: 200px"><input type="date"  name="date"></td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">FSE Id : </label></td>
                     <td style=" width: 250px">
                    <select name="fseid">
                        
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

                         

                <tr>
                    <td style=" width: 200px"><label class="">Type : </label></td>
                    <td>
                    <select name="type">
                        
                        <?php
                            
                            $sql_query4 ="SELECT Type FROM mainstock_summary";
                            $result=mysql_query($sql_query4);
                            if($result!="")
                            {
                                while ($row = mysql_fetch_array($result))
                                {
                                   

                                    echo '<option value="'.$row['Type'].'" >'.$row['Type'].'</option>';

                                }
                            }
                        ?>
                    </select>

                </td>
                </tr>
                <tr>
                    <td style=" width: 200px"><label class="">Serial Number : </label></td>
                    <td style=" width: 200px"><input type="text"  name="serial"></td>
                </tr>
                

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>
                <tr>
                    <td style=" width: 250px"><input class="bttn" type="submit" value="Add Card" name="submit"></td>
                    <td style=" width: 200px"> <input class="bttn" type="reset" name="cancel" id="button" value="Cancel" onclick="clear()">
            </tr>
                
              
            </table>
        </form>
                 




 
                </div>
                <br>

</center>
  </body>
</html>
