<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="css/update.css">
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

?>
<table border="2" class="table table-striped" align = "center" >
  <tr>
    <td>KEY</td>
    <td>STATUS</td>
    <td>HWID</td>
    <td>Delete</td>
  </tr>

<?php

include("auth_session.php");
require('db.php');// Using database connection file here
$app = $_GET['app'];
$sql = "SELECT * FROM `checkk` where username = '".$app."' ";
$records = mysqli_query($con,$sql); // fetch data from database

while($data = mysqli_fetch_array($records))
{
    
?>
  <tr class="active-row" align = "left">
    <td><?php echo $data['keyy']; ?></td> 
    <td><?php echo $data['exp']; ?></td> 
    <td><?php echo $data['hwid']; ?></td>
    <td><td><a href="delete1.php?id=<?php echo $data['keyy']; ?>&app=<?php echo $app; ?> "> Delete</a></td></td>

  </tr>	
<?php
}
?>
</table>

