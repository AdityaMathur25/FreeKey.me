<?php
 include ("chop.php");
foreach (glob("c1/*.php") as $filename) {
   require_once ($filename);
   
}
?>