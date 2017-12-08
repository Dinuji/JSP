<!DOCTYPE html>
<html>
<head>
  <title>save transfered stock</title>
  <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>



<?php
require("../DB/dbcon.php");

if(isset($_POST['transfer']))
    { //amount variables
        
        
        
        $transferred_fse_id = $_POST['fse_id'];
        $transferred_amount = $_POST['amount'];
        

        $sql_query1 = "update reloads set Amount = Amount - $transferred_amount ";
        mysql_query($sql_query1);

        $sql_query3 = "select * from reload_transferred_stock where FseId=$transferred_fse_id";

        $result = mysql_query($sql_query3);
        if(mysql_num_rows($result)==1){
            $sql_query4="update reload_transferred_stock set Amount=Amount+$transferred_amount where ";
            mysql_query($sql_query4);
        }
        else{
        $sql_query2 = "insert into reload_transferred_stock values ($transferred_fse_id,$transferred_amount)";
        
        mysql_query($sql_query2);}
        


            
    }

  /*for($i=1;$i<15;$i++){
  
    $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($i,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$i))" ;
             mysql_query($sql_query6);}*/

    //echo $serial_range1;
    //echo $serial_range2;
    //echo $serial_range3;
    //echo $serial_range4;
    //echo $serial_range5;
    //echo $serial_range6;

echo "<br>";
echo"<div class='h2div' >Report of the transaction</div>";
echo"<br>";

echo"<div class='div'>";
echo"<br>";
  

    echo "<center><table class='normaltable'>
    
    <tr>
      <td>FSE ID</td>
      <td colspan='2'>".$transferred_fse_id."</td>     

    </tr>
    <tr>
      <td>FSE ID</td>
      <td colspan='2'>".$transferred_amount."</td>     

    </tr>
    </table></center>";


 ?>




</body>
</html>