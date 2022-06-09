<?php
include("auth_session.php");
// $bar = $_GET['key'];
 $baz = $_SESSION['username'];;
// $foo = @$bar ?: $baz;
// echo $foo ;
$name = $_GET['key'] ?? $baz;
echo $name;
?>