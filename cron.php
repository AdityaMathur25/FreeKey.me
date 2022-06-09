<?php
require('db.php');
$sql = "DELETE FROM `om1` WHERE create_at < ('" . date("Y-m-d H:i:s"). "' - INTERVAL 1 miniute)";
$rs = mysqli_query($con, $sql);


?>