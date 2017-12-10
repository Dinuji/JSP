<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>FSE_Stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>
<br>
<div class="h2div" >FSE Stock</div>
<br>


<div class="div">

 
    <form action="fse_stock_summery.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">




            <tr>
                <td align="center" style=" width: 150px">
                    Select FSE:
                </td>
                <td colspan="2" align="left" style=" width: 250px">
                    <select name="id">
                        <option style=" width: 250px" value="Select FSE" selected ><-----Select FSE-----></option>
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

                </td></tr>

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>

                <tr>

                <td align="center" style=" width: 300px"><input class="bttn" type="submit" value="Show Stock" name="submit"></td>
                
                <td style=" width: 300px"> <input class="bttn" type="submit" name="button" id="button" value="Cancel" onclick="clear()"> </td>
            </tr>
            

                     
               
            
        </table>
            


    </form>
</div>


<br>
<div class="h2div" >FSE Sales</div>
<br>
        
<div class="div">

      <form action="#" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">


            <tr>
                <td align="center" style=" width: 150px">
                    Date:
                </td>
                <td><input type="date" name="date"></td>
            </tr>

            <tr>
                <td align="center" style=" width: 150px">
                    Select FSE:
                </td>
                <td colspan="2" align="left" style=" width: 250px">
                    <select name="id">
                        <option style=" width: 250px" value="Select FSE" selected ><-----Select FSE-----></option>
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

                </td></tr>


            <tr>
                <td align="center" style=" width: 150px">
                    Sales Amount:
                </td>
                <td><input type="number" min="0.00" step="0.01" name="sales"></td>
            </tr>

                <tr><td></td><td></td></tr>
                <tr><td></td><td></td></tr>

                <tr>

                <td align="center" style=" width: 300px"><input class="bttn" type="submit" value="Submit" name="submit"></td>
                
                <td style=" width: 300px"> <input class="bttn" type="submit" name="button" id="button" value="Cancel" onclick="clear()"> </td>
            </tr>
            

                     
               
            
        </table>
            


    </form>  



</div>
<br>

</center>


<?php
        if(isset($_POST['submit'])){
            if(empty($_POST['date']) || empty($_POST['id']) || empty($_POST['sales'])){
                echo "<div class='danger' style='background-color: #CF5151; color:black; font-family: Georgia;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a>
                    <b>Please fill in all the fields.</b>
                    </div>";
            }


            else{

                $date=$_POST['date'];
                $id=$_POST['id'];
                $sales=$_POST['sales'];

                $sql2="select * from graphsales where Date='$date'";
                $result=mysql_query($sql2);

                if($_POST['id']==1){

                if(mysql_num_rows($result)>0){
                    $sql3="UPDATE graphsales set FSE1='$sales' where Date='$date'";
                    mysql_query($sql3);

                    $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                    mysql_query($sql1);
                }

                else{

                $sql="INSERT INTO graphsales(Date,FSE1) VALUES('$date','$sales')";
                mysql_query($sql);

                $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                mysql_query($sql1);
            }

            }

            else if($_POST['id']==4){

                if(mysql_num_rows($result)>0){
                    $sql3="UPDATE graphsales set FSE4='$sales' where Date='$date'";
                    mysql_query($sql3);

                    $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                    mysql_query($sql1);
                }
                else{
                $sql="INSERT INTO graphsales(Date,FSE4) VALUES('$date','$sales')";
                mysql_query($sql);

                $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                mysql_query($sql1);
            }

            }

            else if($_POST['id']==6){
                if(mysql_num_rows($result)>0){
                    $sql3="UPDATE graphsales set FSE6='$sales' where Date='$date'";
                    mysql_query($sql3);

                    $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                    mysql_query($sql1);
                }

                else{
                $sql="INSERT INTO graphsales(Date,FSE6) VALUES('$date','$sales')";
                mysql_query($sql);

                $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                mysql_query($sql1);
            }

            }

            else if($_POST['id']==7){

                if(mysql_num_rows($result)>0){
                    $sql3="UPDATE graphsales set FSE7='$sales' where Date='$date'";
                    mysql_query($sql3);

                    $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                    mysql_query($sql1);
                }
                else{
                $sql="INSERT INTO graphsales(Date,FSE7) VALUES('$date','$sales')";
                mysql_query($sql);

                $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                mysql_query($sql1);
            }

            }

            else if($_POST['id']==8){

                if(mysql_num_rows($result)>0){
                    $sql3="UPDATE graphsales set FSE8='$sales' where Date='$date'";
                    mysql_query($sql3);

                    $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                    mysql_query($sql1);
                }
                else{
                $sql="INSERT INTO graphsales(Date,FSE8) VALUES('$date','$sales')";
                mysql_query($sql);

                $sql1="INSERT INTO piegraphtable(Date,FSEId,Amount) VALUES('$date','$id','$sales')";
                mysql_query($sql1);
            }

            }



            }
        }

?>
  </body>
</html>