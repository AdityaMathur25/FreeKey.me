<?php
include("auth_session.php");
require('db.php');
//$ver = "1";
$app = $_GET['fname'];
$veru = $_GET['ver'];
$cap = $_GET['pon'];

//$aid = substr($app, 0, -1);
// $servername = "localhost";
// $username = "adityama_demo1";
// $pass = "2R,79,ttV{hx";
// $dbname = "adityama_demo1";
// $conn = mysqli_connect($servername,$username,$pass,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$dad = "dataa";
// sql to create table
$sql = "CREATE TABLE $app (`id` INT(10) NOT NULL AUTO_INCREMENT , `keyy` VARCHAR(40) NOT NULL , `create_at` DATETIME NOT NULL , `hwid` VARCHAR(40) NOT NULL, `vers` VARCHAR(5) NOT NULL DEFAULT '1'  , PRIMARY KEY (`id`))";



if (mysqli_query($con, $sql)) {
  //$fileLocation = getenv("DOCUMENT_ROOT") . "c1/$app.php";
  $fp = fopen("c1/$app.php","wb");
  echo copy("assets/temp.php", "c1/$app.php");
  //touch($fileLocation);
  $appp = "admin";
  $popo = "dataa";
  $popi =  "INSERT INTO `dataa` (`user`, `app` , `veri`) VALUES ('".$cap."', '".$app."' , '".$veru."' )";
  if (mysqli_query($con, $popi)) {
  } else {
   $ret =  "Error Creating Application : " . mysqli_error($con);
  }
    // mkdir("$app");
    $ret = "Your Application ".$app." created successfully";
   
  
} else {
  $ret =  "Error Creating Application : " . mysqli_error($con);
}
mysqli_close($con);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<header class="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="assets/key.png" width="30" height="30" class="d-inline-block align-top" alt="">
    THE KEY Generator
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li>
        <div class="buttons">
    <button type="button" onclick="location.href='dashboard.php';" class="btn btn-primary">DASHBOARD</button>
    <button type="button" onclick="location.href='logout.php';" class="btn btn-primary">LOGOUT</button>
    
    
           </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<?php echo $ret?>