<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>fse stock </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		



   
    <?php


if(isset($_POST['id'])){
	$id=$_POST['id'];

	$query20="select * from transferred_stock where FSEId=$id and Type=20";
	$res20=mysql_query($query20);
	$count20=0;
	if($res20){
		
		while($data=mysql_fetch_array($res20)){
			
			$type=$data['Type'];
			

		
			if($type==20){
				$count20++;
			}
			


		}

		echo '<h2> Stock for FSE ID :' .$id. '</h2><br>';

		echo '<br>
				<div class="h2div" >FSE Stock Summery</div>
				<br>

				<div class="div">
				<br>

				<table class="table1 normaltable" >

					<tr>
						
						<th class="tablerecharge">Type</th>
						<th class="tablerecharge">Amount</th>
						
					</tr>';
		echo '
                	<tr>
                		
                		<td class="tablerecharge">'."20".'</td>
                		<td class="tablerecharge">'.$count20.'</td>
                		
                	</tr>';
	}


$query50="select * from transferred_stock where FSEId=$id and Type=50";
	$res50=mysql_query($query50);
	$count50=0;
	if($res50){
		
		while($data=mysql_fetch_array($res50)){
			
			$type=$data['Type'];
			

		
			if($type==50){
				$count50++;
			}
			


		}
		echo '
                	<tr>
                		
                		<td class="tablerecharge">'."50".'</td>
                		<td class="tablerecharge">'.$count50.'</td>
                		
                	</tr>';
	}

	$query100="select * from transferred_stock where FSEId=$id and Type=100";
	$res100=mysql_query($query100);
	$count100=0;
	if($res100){
		
		while($data=mysql_fetch_array($res100)){
			
			$type=$data['Type'];
			

		
			if($type==100){
				$count100++;
			}
			


		}
		echo '
                	<tr>
                		
                		<td class="tablerecharge">'."100".'</td>
                		<td class="tablerecharge">'.$count100.'</td>
                		
                	</tr>';
	}

	$query200="select * from transferred_stock where FSEId=$id and Type=200";
	$res200=mysql_query($query200);
	$count200=0;
	if($res200){
		
		while($data=mysql_fetch_array($res200)){
			
			$type=$data['Type'];
			

		
			if($type==200){
				$count200++;
			}
			


		}
		echo '
                	<tr>
                		
                		<td class="tablerecharge">'."200".'</td>
                		<td class="tablerecharge">'.$count200.'</td>
                		
                	</tr>';
	}

	$query500="select * from transferred_stock where FSEId=$id and Type=500";
	$res500=mysql_query($query500);
	$count500=0;
	if($res500){
		
		while($data=mysql_fetch_array($res500)){
			
			$type=$data['Type'];
			

		
			if($type==500){
				$count500++;
			}
			


		}
		echo '
                	<tr>
                		
                		<td class="tablerecharge">'."500".'</td>
                		<td class="tablerecharge">'.$count500.'</td>
                		
                	</tr>';
	}
	$query1000="select * from transferred_stock where FSEId=$id and Type=1000";
	$res1000=mysql_query($query1000);
	$count1000=0;
	if($res1000){
		
		while($data=mysql_fetch_array($res1000)){
			
			$type=$data['Type'];
			

		
			if($type==1000){
				$count1000++;
			}
			


		}
		echo '
                	<tr>
                		
                		<td class="tablerecharge">'."1000".'</td>
                		<td class="tablerecharge">'.$count1000.'</td>
                		
                	</tr>';
	}

}




?>



	</table>
			
	

<br>

</div>

<br>

<br>
<div class="h2div" >FSE Stock Details</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">Date</th>
		<th class="tablerecharge">Type</th>
		<th class="tablerecharge">Serial Number</th>
		
	</tr>

    <!-- Selecting user data from the database -->
    <?php


if(isset($_POST['id'])){
	$id=$_POST['id'];

	$query="select * from transferred_stock where FSEId=$id";
	$res=mysql_query($query);
	if($res){
		while($data=mysql_fetch_array($res)){
			$date=$data['TransferredDate'];
			$type=$data['Type'];
			$serial=$data['SerialNumber'];

			echo '
                	<tr>
                		<td class="tablerecharge">'.$date.'</td>
                		<td class="tablerecharge">'.$type.'</td>
                		<td class="tablerecharge">'.$serial.'</td>
                		
                	</tr>';


			
		}
	}
}
?>



	</table>
			
	

<br>

</div>

</center>
  </body>
</html>