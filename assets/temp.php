<?php

//include("auth_session.php");
require('db.php');
//require('chop.php');

$pageName = basename(__FILE__);
//echo $pageName;
$p = (chopExtension($pageName));
echo $p;
$name = $p;
$bpl = "UPDATE checkk set  exp ='EXPIRED' WHERE create_at < ('" . date("Y-m-d H:i:s"). "' - INTERVAL 4 HOUR)";
$sql = "DELETE FROM [name] WHERE create_at < ('" . date("Y-m-d H:i:s"). "' - INTERVAL 4 HOUR)";
$spl = str_replace(array('[name]'), array($name), $sql);
mysqli_query($con,$spl);
echo $spl;


?>