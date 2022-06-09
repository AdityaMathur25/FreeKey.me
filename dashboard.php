<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/logindesign.css" />
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
        <button type="button" onclick="location.href='documentation.php';" class="btn btn-outline-primary">DOWNLOAD</button>
    <button type="button" onclick="location.href='logout.php';" class="btn btn-primary">LOGOUT</button></p>
    
           </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<body>
    <div class="app">
        <p align="center" style="font-size:30px">Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="userinfo.php">Userinfo</a><br><a href="logout.php">Logout</a><br><h3><a href="application.php">Create Your Application</a></h3></p>
        <p align = "center"> <a href="mapp.php">MANAGE YOUR APPLICATION</a><a class="anc-ap" href="mgen.php">GENERATE KEY MANUALLY</a></p>
    </div>
</body>
</html>
