<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    
    <title>Recharge Cards</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0" onload='hideDifference()'>
<center>
	

<br>
<div class="h2div" >Summary</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">Type</th>
		<th class="tablerecharge">Remaining Amount</th>
		<th class="tablerecharge">Re-Order level</th>
		<th class="tablerecharge">Buffer level</th>
	</tr>

    <!-- Selecting summary of recharge cards from the database -->
    <?php
            $sql_query = "select * from  mainstock_summary";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $card_Type = $data['Type'];
                $card_RemainingAmount = $data['RemainingAmount'];
                $card_ReorderLevel = $data['ReorderLevel'];
                $card_BufferLevel = $data['BufferLevel'];
        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$card_Type.'</td>
                		<td class="tablerecharge">'.$card_RemainingAmount.'</td>
                		<td class="tablerecharge">'.$card_ReorderLevel.'</td>
                		<td class="tablerecharge">'.$card_BufferLevel.'</td>
                	</tr>';

            }
	?>

	</table>
			
	

<br>

</div>

<!--Enter your name: <input type="text" id="fname" onkeyup="myFunction()">

<p>My name is: <span id="demo"></span></p>

<script>
function calculateDifference() {
    var x = document.getElementById("End20").value;
    document.getElementById("demo").innerHTML = x;
}
</script>-->
<script>
function calculateDifference20() {
    var x = document.getElementById("End20").value - document.getElementById("Start20").value ;
    document.getElementById("demo1").innerHTML = x;
}
</script>

<script>
function calculateDifference50() {
    var x = document.getElementById("End50").value - document.getElementById("Start50").value ;
    document.getElementById("demo2").innerHTML = x;
}
</script>

<script>
function calculateDifference100() {
    var x = document.getElementById("End100").value - document.getElementById("Start100").value ;
    document.getElementById("demo3").innerHTML = x;
}
</script>

<script>
function calculateDifference200() {
    var x = document.getElementById("End200").value - document.getElementById("Start200").value ;
    document.getElementById("demo4").innerHTML = x;
}
</script>

<script>
function calculateDifference500() {
    var x = document.getElementById("End500").value - document.getElementById("Start500").value ;
    document.getElementById("demo5").innerHTML = x;
}
</script>

<script>
function calculateDifference1000() {
    var x = document.getElementById("End1000").value - document.getElementById("Start1000").value ;
    document.getElementById("demo6").innerHTML = x;
}
</script>

<br>
<div class="h2div" >Add to main stock </div>
<br>

<div class="div">
<form action="../sources/save_add_stock.php" method="post";>
      <table border="0">
        <tr>
          <th><label class="">Card Type</label></th>
          <th><label class="">Starting serial no</label></th>
          <th><label class="">Ending serial No</label></th>
          <th><label class="">Amount</label></th>
        </tr>
        <tr>
          <td><label class="">20 card</label></td>
          <td><input type="number" class="" name="Start20" id="Start20"></td>
          <td><input type="number" class="" name="End20" id="End20" onkeyup="calculateDifference20()"></td>
          <td><span id="demo1"></span></td>
        </tr>
        <tr>
          <td><label class="">50 card</label></td>
          <td><input type="number" class="" name="Start50" id="Start50"></td>
          <td><input type="number" class="" name="End50" id="End50" onkeyup="calculateDifference50()"></td>
          <td><span id="demo2"></span></td>
        </tr>
        <tr>
          <td><label class="" >100 card</label></td>
          <td><input type="number" class="" name="Start100" id="Start100"></td>
          <td><input type="number" class="" name="End100" id="End100" onkeyup="calculateDifference100()"></td>
          <td><span id="demo3"></span></td>
        </tr>
        <tr>
          <td><label class="" >200 card </label></td>
          <td><input type="number" class="" name="Start200" id="Start200"></td>
          <td><input type="number" class="" name="End200" id="End200" onkeyup="calculateDifference200()"></td>
          <td><span id="demo4"></span></td>
        </tr>
        <tr>
          <td><label class="" >500 card</label></td>
          <td><input type="number" class="" name="Start500" id="Start500"></td>
          <td><input type="number" class="" name="End500" id="End500" onkeyup="calculateDifference500()"></td>
          <td><span id="demo5"></span></td>
        </tr>
        <tr>
          <td><label class="">1000 card</label></td>
          <td><input type="number" class="" name="Start1000" id="Start1000"></td>
          <td><input type="number" class="" name="End1000" id="End1000" onkeyup="calculateDifference1000()"></td>
          <td><span id="demo6"></span></td>
        </tr>
        <tr>
          <td colspan="2"><input class="bttn" type="submit" name="submit" value="Add Stock"></td>
          <td colspan="2"><input class="bttn" type="reset" name="reset" value="Cancel"></td>
      </tr>
        
      </table>
    </form>
 </div>



<br>
<div class="h2div" >Transfer </div>
<br>

<div class="div">
    <br>

    
    <form action="../sources/save_transfered_stock.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">

            <tr>
                <td style=" width: 200px">
                    Date:
                </td>
                <td><input type="date" name="date"></td>
            </tr>

            <tr>
                <td style=" width: 200px">
                    FSE:
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
                <td style=" width: 200px">
                    Amount of Rs.20 cards:
                </td>
                <td><input type="number" min="0" name="amount20" placeholder="Number of 20 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 200px">
                    Amount of Rs.50 cards:
                </td>
                <td><input type="number" min="0" name="amount50" placeholder="Number of 50 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 200px">
                    Amount of Rs.100 cards:
                </td>
                <td><input type="number" min="0" name="amount100" placeholder="Number of 100 cards"  title="only a number"></td>
            </tr>
             <tr>
                <td style=" width: 200px">
                    Amount of Rs.200 cards:
                </td>
                <td><input type="number" min="0" name="amount200" placeholder="Number of 200 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 200px">
                    Amount of Rs.500 cards:
                </td>
                <td><input type="number" min="0" name="amount500" placeholder="Number of 500 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 200px">
                    Amount of Rs.1000 cards:
                </td>
                <td><input type="number" min="0" name="amount1000" placeholder="Number of 1000 cards"  title="only a number"></td>
            </tr>

              
               
            <tr>
              <td  style=" width: 200px"><input class="bttn" type="submit" value="Transfer" name="transfer"></td>
              <td  style=" width: 200px"> <input class="bttn" type="submit" name="button" id="button" value="Cancel" onclick="clear()">
            </tr>

            


    </form>
</div>







<br>
</center>
  </body>
</html>