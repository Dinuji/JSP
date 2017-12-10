<?php
require("../DB/dbcon.php");
?>
<?php
require('../sources/loginValidate.php');
?>




<html lang="en">
  <head>
    <title> fse_Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
 
             




<br>
	<div class="h2div" >My Sales Summery</div>
	<br>

	<div class="div">
	<br>
            <table class="table1 normaltable" >

  <tr>
    
    <th class="tablerecharge">Date</th>
    <th class="tablerecharge">Amount</th>
    
  </tr>
  </center>

  <?php

  	$id=$_SESSION ['userIdInTable'];
  	if($id==1){
  		$sql="SELECT Date,FSE1 FROM graphsales";
  		$res=mysql_query($sql);
  		if($res){
    
    	while($data=mysql_fetch_array($res)){

    		$date=$data['Date'];
    		$FSE1=$data['FSE1'];

    		echo '
                  <tr>
                    
                    <td class="tablerecharge">'.$date.'</td>
                    <td class="tablerecharge">'.$FSE1.'</td>
                    
                  </tr>';

  	}
  }
}

if($id==4){
  		$sql="SELECT Date,FSE4 FROM graphsales";
  		$res=mysql_query($sql);
  		if($res){
    
    	while($data=mysql_fetch_array($res)){

    		$date=$data['Date'];
    		$FSE4=$data['FSE4'];

    		echo '
                  <tr>
                    
                    <td class="tablerecharge">'.$date.'</td>
                    <td class="tablerecharge">'.$FSE4.'</td>
                    
                  </tr>';

  	}
  }
}
if($id==6){
  		$sql="SELECT Date,FSE6 FROM graphsales";
  		$res=mysql_query($sql);
  		if($res){
    
    	while($data=mysql_fetch_array($res)){

    		$date=$data['Date'];
    		$FSE6=$data['FSE6'];

    		echo '
                  <tr>
                    
                    <td class="tablerecharge">'.$date.'</td>
                    <td class="tablerecharge">'.$FSE6.'</td>
                    
                  </tr>';

  	}
  }
}

if($id==7){
  		$sql="SELECT Date,FSE7 FROM graphsales";
  		$res=mysql_query($sql);
  		if($res){
    
    	while($data=mysql_fetch_array($res)){

    		$date=$data['Date'];
    		$FSE7=$data['FSE7'];

    		echo '
                  <tr>
                    
                    <td class="tablerecharge">'.$date.'</td>
                    <td class="tablerecharge">'.$FSE7.'</td>
                    
                  </tr>';

  	}
  }
}

if($id==8){
  		$sql="SELECT Date,FSE8 FROM graphsales";
  		$res=mysql_query($sql);
  		if($res){
    
    	while($data=mysql_fetch_array($res)){

    		$date=$data['Date'];
    		$FSE8=$data['FSE8'];

    		echo '
                  <tr>
                    
                    <td class="tablerecharge">'.$date.'</td>
                    <td class="tablerecharge">'.$FSE8.'</td>
                    
                  </tr>';

  	}
  }
}


  ?>
  </body>
</html>
