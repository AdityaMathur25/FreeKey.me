
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "adityama_demo1";
$con = mysqli_connect($servername,$username,$pass,$dbname);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
