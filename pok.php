<?php
$pageName = basename($_SERVER['SCRIPT_NAME']);
//echo $pageName;
function chopExtension($filename) {
    return substr($filename, 0, strrpos($filename, '.'));
}

$p = (chopExtension($pageName));
echo $p;

?>