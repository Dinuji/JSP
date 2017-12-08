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

<!-------------------------------------------------------------------------->

<br>
<div class="h2div" >Add Reload Stock </div>
<br>

<div class="div">
<br>
<form action="../sources/reload_main.php" method="post">
      <table border="0">
        <tr>
          
          <th><label class="">Amount</label></th>
       
          
          
          <td><input type="number" min="0.00" step="0.01" name="amount" placeholder="Amount"></td>
          
        </tr>

                <tr><td>  </td>     <td>  </td></tr>
            <tr><td>  </td>   <td>  </td></tr>



        <tr>
          <td><input class="bttn" type="submit" name="submit" value="Add Stock"></td>
          <td><input class="bttn" type="reset" name="reset" value="Cancel"></td>
        
      </table>
    </form>
            
    



</div>

<!-------------------------------------------------------------------------->






<br>
<div class="h2div" >Transfer </div>
<br>

<div class="div">

    <!--actionpage eka wenas karanna-->
    <form action="../sources/save_transferred_reload_stock.php" method="post">
        <table border="0">

            
            <tr>
                <td style=" width: 150px">
                  <label > Select FSE:  </label>
                </td>
                <td>
                    <select name="fse_id">
                        
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
                <td style=" width: 150px">
                    <label > Amount : </label>
                </td>
                <td><input type="number" min="0.00" step="0.01" name="amount" placeholder="Amount"  title="only a number"></td>
            </tr>

            <tr><td>  </td>     <td>  </td></tr>
            <tr><td>  </td>   <td>  </td></tr> 

              
               
            <tr>
              <td ><input class="bttn" type="submit" value="Transfer" name="transfer"></td>
              <td > <input class="bttn" type="reset" name="button" id="button" value="Cancel" onclick="clear()">
            </tr>

            


    </form>
</div>
<br>





</center>
  </body>
</html>