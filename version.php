<?php
require('db.php');
$tname = $_GET["name"];
$name = substr($tname, 0, -1);
$tvers = $_GET["ver"];
$vers = substr($tvers, 0, -1);
$sql = "SELECT * FROM `dataa` WHERE `veri` = '".$vers."' ";
$rs = mysqli_query($con, $sql);
if ($rs) {
  if (mysqli_num_rows($rs) > 0) {
    echo 'true';
    
  } else {
    echo 'false';
  }
} else {
  echo 'error';
}

?>