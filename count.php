<?php
foreach (glob("cron.php") as $filename) {
    exec($filename, $output); // previously $Filename
}
?>