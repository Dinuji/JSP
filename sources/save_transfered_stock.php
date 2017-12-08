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
        $card_range1 = array();
        $card_range2 = array();
        $card_range3 = array();
        $card_range4 = array();
        $card_range5 = array();
        $card_range6 = array();
        $serial_range1 = "Not transfered";
        $serial_range2 = "Not transfered";
         $serial_range3 = "Not transfered";
        $serial_range4 = "Not transfered";
        $serial_range5 = "Not transfered";
         $serial_range6 = "Not transfered";
        $transfered_date = $_POST['date'];
        $transfered_fse_id = $_POST['fse_id'];
        $transfered_amount20 = $_POST['amount20'];
        $transfered_amount50 = $_POST['amount50'];
        $transfered_amount100 = $_POST['amount100'];
        $transfered_amount200 = $_POST['amount200'];
        $transfered_amount500 = $_POST['amount500'];
        $transfered_amount1000 = $_POST['amount1000'];

        $sql_query1 = "select * from  main_stock_deatils where Type=20 limit $transfered_amount20";
        $sql_query2 = "select * from  main_stock_deatils where Type=50 limit $transfered_amount50";
        $sql_query3 = "select * from  main_stock_deatils where Type=100 limit $transfered_amount100";
        $sql_query4 = "select * from  main_stock_deatils where Type=200 limit $transfered_amount200";
        $sql_query5 = "select * from  main_stock_deatils where Type=500 limit $transfered_amount500";
        $sql_query6 = "select * from  main_stock_deatils where Type=1000 limit $transfered_amount1000";

        $result1 = mysql_query($sql_query1);
        $result2 = mysql_query($sql_query2);
        $result3 = mysql_query($sql_query3);
        $result4 = mysql_query($sql_query4);
        $result5 = mysql_query($sql_query5);
        $result6 = mysql_query($sql_query6);

//for 20

  if($transfered_amount20 !=null or $transfered_amount20!=0)
  {
            while ($data = mysql_fetch_array($result1)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query1 = "insert into transferred_stock values
            ('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
             mysql_query($sql_insert_query1);
               
              $sql_delete_query1 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query1);
               array_push($card_range1, $card_Serial);

            }
            //decrease th remaining amount in mainstock_summary
            $sql_update_query1 = "UPDATE mainstock_summary set RemainingAmount=RemainingAmount-$transfered_amount20 where Type=20";
              mysql_query($sql_update_query1);

            $serial_range1 = min($card_range1) ." to". max($card_range1);

            //update, insert to graphtable1 to draw the barchart 
            $sql_query8 = "SELECT * FROM graphtable1 WHERE Id = $transfered_fse_id";
            $result8=mysql_query($sql_query8);
            if(mysql_num_rows($result8) == 1){
                
                $sql_query10="UPDATE graphtable1 SET Count=Count+$transfered_amount20 WHERE Id= $transfered_fse_id";
                mysql_query($sql_query10);
            }
            else{
            $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($transfered_fse_id,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$transfered_fse_id))" ;
             mysql_query($sql_query6);}

             //update,insert into graphtable2 to draw barchart2
             $sql_query9 = "SELECT * FROM graphtable2 WHERE Type = $card_Type";
             $result9=mysql_query($sql_query9);
            if(mysql_num_rows($result9) == 1){
                
                $sql_query11="UPDATE graphtable2 SET Count=Count+$transfered_amount20 WHERE Type=$card_Type";
                mysql_query($sql_query11);
            }
            else{
             $sql_query7="INSERT INTO graphtable2(Type,Count) VALUES($card_Type,(SELECT COUNT(*) FROM transferred_stock WHERE Type=$card_Type))" ;
               mysql_query($sql_query7);}

               //Buffer Level
             $sqlLimit="SELECT * FROM mainstock_summary WHERE Type=20";
             $res=mysql_query($sqlLimit);
             while ($data = mysql_fetch_array($res)) 
            {
                $RemainingAmount = $data['RemainingAmount'];
                $BufferLevel = $data['BufferLevel'];
                  if($RemainingAmount<=$BufferLevel){
                    //$message = "Refill Stock";
                    echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The stock of Rs.20 has reached the buffer level. Please Refill.</b>
                    </div>";
                  }
                
               
            
    }
  }


//for 50
    if ($transfered_amount50!=null or $transfered_amount50!=0) 
    {
        
             while ($data = mysql_fetch_array($result2)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query2 = "insert into transferred_stock values
            ('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
             mysql_query($sql_insert_query2);
               
            $sql_delete_query2 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query2);

               array_push($card_range2, $card_Serial);
              
            }
            //decrease th remaining amount in mainstock_summary
            $sql_update_query1 = "UPDATE mainstock_summary set RemainingAmount=RemainingAmount-$transfered_amount50 where Type=50";
               mysql_query($sql_update_query1);


            $serial_range2 = min($card_range2) ." to". max($card_range2);


            $sql_query8 = "SELECT * FROM graphtable1 WHERE Id = $transfered_fse_id";
            $result8=mysql_query($sql_query8);
            if(mysql_num_rows($result8) == 1){
                
                $sql_query10="UPDATE graphtable1 SET Count=Count+$transfered_amount50 WHERE Id= $transfered_fse_id";
                mysql_query($sql_query10);
            }
            else{
            $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($transfered_fse_id,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$transfered_fse_id))" ;
             mysql_query($sql_query6);}

             $sql_query9 = "SELECT * FROM graphtable2 WHERE Type = $card_Type";
             $result9=mysql_query($sql_query9);
            if(mysql_num_rows($result9) == 1){
                
                $sql_query11="UPDATE graphtable2 SET Count=Count+$transfered_amount50 WHERE Type=$card_Type";
                mysql_query($sql_query11);
            }
            else{
             $sql_query7="INSERT INTO graphtable2(Type,Count) VALUES($card_Type,(SELECT COUNT(*) FROM transferred_stock WHERE Type=$card_Type))" ;
               mysql_query($sql_query7);}

               //buffer level
               $sqlLimit="SELECT * FROM mainstock_summary WHERE Type=50";
             $res=mysql_query($sqlLimit);
             while ($data = mysql_fetch_array($res)) 
            {
                $RemainingAmount = $data['RemainingAmount'];
                $BufferLevel = $data['BufferLevel'];
                  if($RemainingAmount<=$BufferLevel){
                    //$message = "Refill Stock";
                    echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The stock of Rs.50 has reached the buffer level. Please Refill.</b>
                    </div>";
                  }

        
}
    }

//for 100
    if ($transfered_amount100!=null or $transfered_amount100!=0) 
    {

             while ($data = mysql_fetch_array($result3)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query3 = "insert into transferred_stock values
            ('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
             mysql_query($sql_insert_query3);
               
            $sql_delete_query3 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query3);
               array_push($card_range3, $card_Serial);
              
            }
            $sql_update_query1 = "UPDATE mainstock_summary set RemainingAmount=RemainingAmount-$transfered_amount100 where Type=100";
               mysql_query($sql_update_query1);

            $serial_range3 = min($card_range3) ." to". max($card_range3);
            $sql_query8 = "SELECT * FROM graphtable1 WHERE Id = $transfered_fse_id";
            $result8=mysql_query($sql_query8);
            if(mysql_num_rows($result8) == 1){
                
                $sql_query10="UPDATE graphtable1 SET Count=Count+$transfered_amount100 WHERE Id= $transfered_fse_id";
                mysql_query($sql_query10);
            }
            else{
            $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($transfered_fse_id,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$transfered_fse_id))" ;
             mysql_query($sql_query6);}

             $sql_query9 = "SELECT * FROM graphtable2 WHERE Type = $card_Type";
             $result9=mysql_query($sql_query9);
            if(mysql_num_rows($result9) == 1){
                
                $sql_query11="UPDATE graphtable2 SET Count=Count+$transfered_amount100 WHERE Type=$card_Type";
                mysql_query($sql_query11);
            }
            else{
             $sql_query7="INSERT INTO graphtable2(Type,Count) VALUES($card_Type,(SELECT COUNT(*) FROM transferred_stock WHERE Type=$card_Type))" ;
               mysql_query($sql_query7);}

               //buffer level
               $sqlLimit="SELECT * FROM mainstock_summary WHERE Type=100";
             $res=mysql_query($sqlLimit);
             while ($data = mysql_fetch_array($res)) 
            {
                $RemainingAmount = $data['RemainingAmount'];
                $BufferLevel = $data['BufferLevel'];
                  if($RemainingAmount<=$BufferLevel){
                    //$message = "Refill Stock";
                    echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The stock of Rs.100 has reached the buffer level. Please Refill.</b>
                    </div>";
                  }
        }   
    }

//for 200
    if ($transfered_amount200!=null or $transfered_amount200!=0) 
    {
        
             while ($data = mysql_fetch_array($result4)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query4 = "insert into transferred_stock values
            ('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
             mysql_query($sql_insert_query4);
               
               $sql_delete_query4 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query4);

               array_push($card_range4, $card_Serial);
              
            }
            $sql_update_query1 = "UPDATE mainstock_summary set RemainingAmount=RemainingAmount-$transfered_amount200 where Type=200";
               mysql_query($sql_update_query1);

            $serial_range4 = min($card_range4) ." to". max($card_range4);
            $sql_query8 = "SELECT * FROM graphtable1 WHERE Id = $transfered_fse_id";
            $result8=mysql_query($sql_query8);
            if(mysql_num_rows($result8) == 1){
                
                $sql_query10="UPDATE graphtable1 SET Count=Count+$transfered_amount200 WHERE Id= $transfered_fse_id";
                mysql_query($sql_query10);
            }
            else{
            $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($transfered_fse_id,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$transfered_fse_id))" ;
             mysql_query($sql_query6);}

             $sql_query9 = "SELECT * FROM graphtable2 WHERE Type = $card_Type";
             $result9=mysql_query($sql_query9);
            if(mysql_num_rows($result9) == 1){
                
                $sql_query11="UPDATE graphtable2 SET Count=Count+$transfered_amount200 WHERE Type=$card_Type";
                mysql_query($sql_query11);
            }
            else{
             $sql_query7="INSERT INTO graphtable2(Type,Count) VALUES($card_Type,(SELECT COUNT(*) FROM transferred_stock WHERE Type=$card_Type))" ;
               mysql_query($sql_query7);}

               //buffer level
               $sqlLimit="SELECT * FROM mainstock_summary WHERE Type=200";
             $res=mysql_query($sqlLimit);
             while ($data = mysql_fetch_array($res)) 
            {
                $RemainingAmount = $data['RemainingAmount'];
                $BufferLevel = $data['BufferLevel'];
                  if($RemainingAmount<=$BufferLevel){
                    //$message = "Refill Stock";
                    echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The stock of Rs.200 has reached the buffer level. Please Refill.</b>
                    </div>";
                  }
}
    }

//for 500
    if ($transfered_amount500!=null or $transfered_amount500!=0) 
    {
        
             while ($data = mysql_fetch_array($result5)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query5 = "insert into transferred_stock values
            ('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
             mysql_query($sql_insert_query5);
               
               $sql_delete_query5 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query5);

             

               array_push($card_range5, $card_Serial);
              
            }
            $sql_update_query1 = "UPDATE mainstock_summary set RemainingAmount=RemainingAmount-$transfered_amount500 where Type=500";
               mysql_query($sql_update_query1);

            $serial_range5 = min($card_range5) ." to". max($card_range5);
            $sql_query8 = "SELECT * FROM graphtable1 WHERE Id = $transfered_fse_id";
            $result8=mysql_query($sql_query8);
            if(mysql_num_rows($result8) == 1){
                
                $sql_query10="UPDATE graphtable1 SET Count=Count+$transfered_amount500 WHERE Id= $transfered_fse_id";
                mysql_query($sql_query10);
            }
            else{
            $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($transfered_fse_id,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$transfered_fse_id))" ;
             mysql_query($sql_query6);}

             $sql_query9 = "SELECT * FROM graphtable2 WHERE Type = $card_Type";
             $result9=mysql_query($sql_query9);
            if(mysql_num_rows($result9) == 1){
                
                $sql_query11="UPDATE graphtable2 SET Count=Count+$transfered_amount500 WHERE Type=$card_Type";
                mysql_query($sql_query11);
            }
            else{
             $sql_query7="INSERT INTO graphtable2(Type,Count) VALUES($card_Type,(SELECT COUNT(*) FROM transferred_stock WHERE Type=$card_Type))" ;
               mysql_query($sql_query7);}

               //buffer level
               $sqlLimit="SELECT * FROM mainstock_summary WHERE Type=500";
             $res=mysql_query($sqlLimit);
             while ($data = mysql_fetch_array($res)) 
            {
                $RemainingAmount = $data['RemainingAmount'];
                $BufferLevel = $data['BufferLevel'];
                  if($RemainingAmount<=$BufferLevel){
                    //$message = "Refill Stock";
                    echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The stock of Rs.500 has reached the buffer level. Please Refill.</b>
                    </div>";
                  }
             }
    }

//for 1000
    if ($transfered_amount1000!=null or $transfered_amount1000!=0) 
    {
          
             while ($data = mysql_fetch_array($result6)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
              

              //Insert details in to  transferred_stock

               $sql_insert_query6 = "insert into transferred_stock values
            ('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
             mysql_query($sql_insert_query6);
               
               //delete details from main_stock_deatils table
             $sql_delete_query6 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query6);

             //push card serial in to array to find the range
               array_push($card_range6, $card_Serial);
              
            }

            $sql_update_query1 = "UPDATE mainstock_summary set RemainingAmount=RemainingAmount-$transfered_amount1000 where Type=1000";
               mysql_query($sql_update_query1);

            $serial_range6 = min($card_range6) ." to". max($card_range6);

            $sql_query8 = "SELECT * FROM graphtable1 WHERE Id = $transfered_fse_id";
            $result8=mysql_query($sql_query8);
            if(mysql_num_rows($result8) == 1){
                
                $sql_query10="UPDATE graphtable1 SET Count=Count+$transfered_amount1000 WHERE Id= $transfered_fse_id";
                mysql_query($sql_query10);
            }
            else{
            $sql_query6="INSERT INTO graphtable1(Id,Count) VALUES($transfered_fse_id,(SELECT COUNT(*) FROM transferred_stock WHERE FSEId=$transfered_fse_id))" ;
             mysql_query($sql_query6);}

             $sql_query9 = "SELECT * FROM graphtable2 WHERE Type = $card_Type";
             $result9=mysql_query($sql_query9);
            if(mysql_num_rows($result9) == 1){
                
                $sql_query11="UPDATE graphtable2 SET Count=Count+$transfered_amount1000 WHERE Type=$card_Type";
                mysql_query($sql_query11);
            }
            else{
             $sql_query7="INSERT INTO graphtable2(Type,Count) VALUES($card_Type,(SELECT COUNT(*) FROM transferred_stock WHERE Type=$card_Type))" ;
               mysql_query($sql_query7);}

               //buffer level
               $sqlLimit="SELECT * FROM mainstock_summary WHERE Type=1000";
             $res=mysql_query($sqlLimit);
             while ($data = mysql_fetch_array($res)) 
            {
                $RemainingAmount = $data['RemainingAmount'];
                $BufferLevel = $data['BufferLevel'];
                  if($RemainingAmount<=$BufferLevel){
                    //$message = "Refill Stock";
                    echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>The stock of Rs.1000 has reached the buffer level. Please Refill.</b>
                    </div>";
                  }

            
    }
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
      <td>Date</td>
      <td colspan='2'>".$transfered_date."</td>     

    </tr>
    <tr>
      <td>FSE ID</td>
      <td colspan='2'>".$transfered_fse_id."</td>     

    </tr>
    </table></center>";

echo"<br>";

    echo "<center><table class='normaltable'>

    <tr>
      <th>Card Type</th>
      <th>Range</th>
      <th>Amount</th>
    </tr>
        <tr>
            <td>Rs.20 cards</td>
            <td>".$serial_range1."</td>
            <td>".$transfered_amount20."</td>
        </tr>
    <tr>
      <td>Rs.50 cards</td>
      <td>".$serial_range2."</td>
      <td>".$transfered_amount50."</td>
    </tr>
    <tr>
      <td>Rs.100 cards</td>
      <td>".$serial_range3."</td>
      <td>".$transfered_amount100."</td>
    </tr>
    <tr>
      <td>Rs.200 cards</td>
      <td>".$serial_range4."</td>
      <td>".$transfered_amount200."</td>
    </tr>
    <tr>
      <td>Rs.500 cards</td>
      <td>".$serial_range5."</td>
      <td>".$transfered_amount500."</td>
    </tr>
    <tr>
      <td>Rs.1000 cards</td>
      <td>".$serial_range6."</td>
      <td>".$transfered_amount1000."</td>
    </tr>
    </table>";

echo"<br>
<a href='../StockKeeper/home.php'><button class='bttn' > Back to Home Page</button></a></center>";

  echo "</div>";



    }
 ?>




</body>
</html>