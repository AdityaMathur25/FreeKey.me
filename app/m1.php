<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="assets/logindesign.css">

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
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2><p align = center >ALL ABOUT YOUR APPLICATION </p></h2>

<table border="2" class="table table-striped" align = "center" >
  <tr>
    <td>APP NAME</td>
    <td>VERSION</td>
    <td>Total User</td>
    <td>Current User</td>
    <td>Key Details</td>
    <td>HWID</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php
$name = $_GET['key'];
include("auth1.php");
require('db.php');// Using database connection file here
$sql = "SELECT * FROM `dataa` where user = '".$name."' ";
$records = mysqli_query($con,$sql); // fetch data from database
while($data = mysqli_fetch_array($records))
{
    
?>
  <tr class="active-row" align = "left">
    <td><?php echo $data['app']; ?></td> 
    <td><?php echo $data['veri']; ?></td> 
    <td><?php  $man = $data['app']; $cnt = mysqli_query($con,"SELECT id FROM $man  ORDER BY id DESC  LIMIT 1;"); while($doh = mysqli_fetch_array($cnt)) echo $doh['id'] ;?></td>
    <td><?php  $man = $data['app']; $cnt = mysqli_num_rows(mysqli_query($con,"SELECT * FROM $man;")); echo $cnt?></td>
    <td><a href="current.php?app=<?php echo $data['app']; ?>">View</a></td>
    <td><?php echo $data['hwid']; ?></td> 
    <td><a href="edit.php?id=<?php echo $data['id']; ?>&pname=<?php echo $data['app']; ?>&veri=<?php echo $data['veri']; ?>&updatep=<?php echo $data['links']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>&app=<?php echo $data['app']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
