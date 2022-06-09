<?php
include("auth_session.php");
$auth = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/logindesign.css" />
    <link rel="stylesheet" href="css/a1.css" />
    <title>Create Your Own Key System</title>
</head>
<header class="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">The Key Generator</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li>
        <div class="buttons">
        <button type="button" onclick="location.href='dashboard.php';" class="btn btn-outline-primary">DASHBOARD</button>
    <button type="button" onclick="location.href='logout.php';" class="btn btn-primary">LOGOUT</button></p>
    
           </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<body>
    <div class="form">
       <p class="font-weight-bold" align = "center" style="font-size:20px">WELCOME TO THE APP CREATION PAGE<br><?php echo $_SESSION['username']; ?></p>
<form action="/osx/proc.php" method = "get" align = "center">
<label for="fname">Application ID:</label>
<input type="text" id="fname" name="fname" value="Enter Your Application Name"><br> <br>
<label for="ver"> VERSION:</label>
<input type="number" id="ver" name="ver" value="Enter Your Application Name"><br>
<input type="hidden" id="pon" name="pon" value="<?php echo $_SESSION['username']; ?>">
<br>
<!-- <div class="upload-border"> -->

<input type="submit" class="btn btn-outline-dark" value="Submit">
</form>
</div>
</body>
</html>