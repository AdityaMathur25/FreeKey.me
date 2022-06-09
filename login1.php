<?php
require('db.php');
$tuser = $_GET['username'];
$username = substr($tuser, 0, -1);
$tpass = $_GET['password'];
$password = substr($tpass, 0, -1);
//$db = mysqli_connect('localhost', 'adityama_demo1', '2R,79,ttV{hx', 'adityama_demo1') or die('Not Connected');
    $query    = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
$rs = mysqli_query($con, $query);
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