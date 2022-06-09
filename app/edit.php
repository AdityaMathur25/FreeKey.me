<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="css/update.css"> -->
 <link rel="stylesheet" href="assets/logindesign.css" />
 <link rel="stylesheet" href="css/a1.css" />
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
           </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<?php

require('db.php');
include("auth1.php"); // Using database connection file here
$pname = $_GET['pname'];
$id = $_GET['id']; 
$version = $_GET['veri'];
$updatep = $_GET['updatep'];




$qry = mysqli_query($con,"select * from dataa where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    
    $appname = $_POST['appname'];	
    $version = $_POST['version'];	
    $updatep = $_POST['updatep'];
    $ehwid = $_POST['hwid'];
    $edit = mysqli_query($con,"update dataa set app='$appname' where id='$id'");
    $sqp = mysqli_query($con , "update dataa set veri='$version' where id='$id'");
    $sql = mysqli_query($con,"ALTER TABLE $pname RENAME $appname ;");
    $sqs = mysqli_query($con , "update dataa set links='$updatep' where id='$id'");
    $psl = mysqli_query($con,"update dataa set hwid='$ehwid' where id='$id'");

	
    if($edit)
    {

        mysqli_close($con); // Close connection
        header("location:m1.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo (mysqli_error($con));
    }    	
}
?>

<h3>Update Data</h3>
<div class="form">
<form method="post" align = "center">
<label for="appname">Application Name :</label> <input type="text" name="appname" value="<?php echo $data['app'] ?>" placeholder="Enter Full Name" Required><br><br>
<label for="version">Vesion :</label> <input type="number" name="version" value="<?php echo $data['veri'] ?>" placeholder="Enter Version" Required><br><br>
<label for="version">Update Link :</label> <input type="text" name="updatep" value="<?php echo $data['links'] ?>" placeholder="Enter UPDATE LINK" ><br><br>
  <label for="hwid" class = "poti">HWID :</label>
  <select name="hwid" id="hwid" class="btn btn-outline-dark dropdown-toggle" >
    <option value="enable">Enable</option>
    <option value="dissable">dissable</option>
  </select><br><br>

  <input type="submit" name="update" class="btn btn-outline-dark poti" value="Update"><br><br>
</form>
</div>