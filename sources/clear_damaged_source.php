<?php
require("../DB/dbcon.php");
?>

<?php
if(isset($_POST['submit'])){
$sql="truncate damaged_main";
mysql_query($sql);
}

echo "All Damaged Cards Returned";

?>