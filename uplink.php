<?php
require('db.php');
$tname = $_GET["name"];
$name = substr($tname, 0, -1);
$sql = "SELECT `links` FROM `dataa` WHERE `app` = '".$name."' ";
$rs = mysqli_query($con, $sql);
if ($rs) {
    $data = mysqli_fetch_array($rs);
    echo $data['links'];
} else {
  echo 'error';
}



?>