
<?php
require('../sources/loginValidate.php');

echo '<html lang="en">
  <head>
    <title>View Employees</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
        <br>


<br>
<div class="h2div" > My Profile</div>
<br>

<div class="div">
<br>
';




session_start();


    $id=$_SESSION ['userIdInTable'];

    $query="select * from user where Id = $id";
    $result=mysql_query($query);

    if ($result) {
            echo '<table class="table1 normaltable">';

            while ($data = mysql_fetch_array($result)) {
                $id = $data['Id'];
                $name = $data['Name'];
                $uname = $data['UserName'];
                
                $type = $data['Type'];
                

                echo '<img  src="../Images/StockKeeperImages/sk.png" width="120px" height="120px" margin="10px"> ';
                echo '<tr><td width=150px><strong>ID </td></strong> '.'<td width=150px>'.$id.'</td></tr>';
                echo '<tr><td><strong>Name  </td> </strong>'.'<td>'.$name.'</td></tr>';
                echo '<tr><td><strong>Position </td></strong> '.'<td>'.$type.'</td></tr>';
                echo '<tr><td><strong>User Name </td></strong>    '.'<td>'.$uname.'</td></tr>';
                
                

                break;

            }

            echo '</table>';

            echo '<br><br>';

            echo '
                <a href="../sources/change_password.php" target="abc"><input type="submit" class="bttnnew" value="Change Password" name="changepw"></input></a>
            ';
        }


echo '<br>

</div>

<br>

</center>
  </body>
</html>';

?>