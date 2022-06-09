<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registeration.css">
    <title>Registeration</title>
</head>

<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='register'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='register'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="box">
        <a href="index.html">
            <div class="ribbon-1"> Noisy.io </div>
        </a>
    </div>
    <div class="register-form">
        <header>
            <p class="text-large">Register</p>
            <p class="text-small">Already have an account? <a href="login.php" class="link-text">Login</a></p>
            <img src="images1/logo.png" id="logo">
        </header>
        <form class="form-container" action="" method="post">
            <div class="entity">
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <img src="images1/user.png" class="icon">
            </div>

            <div class="entity">
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email" placeholder="Email">
                <img src="images1/@.png" class="icon">
            </div>

            <div class="entity">
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password" placeholder="Enter Your Password">
                <img src="images1/lock.png" class="icon">
                <img src="images1/eye.png" id="eye1"  class="icon eye">
            </div>

            <div class="entity shift-up">
                <label for="re-password">RE-ENTER PASSWORD</label>
                <input type="password" name="re-password" id="re-password" placeholder="Re-enter Password">
                <img src="images1/lock.png" class="icon">
                <img src="images1/eye.png" id ="eye2"class="icon eye">
            </div>

            <input type="checkbox" name="agree" id="agree" class="agree">
            <label for="agree" id="agree">I agree to terms and conditions</label>

            <button type="submit">Register Now</button>
        </form>
    </div>
    <script>
        const x = document.getElementById('password');
        const eye = document.getElementById('eye1');
        eye.addEventListener('click', function (e) {
            if (x.type === "password") {
    x.type = "text";
    eye.src = "images1/eye-slash.png";
  } else {
    x.type = "password";
    eye.src = "images1/eye.png";
  }
});
  const y = document.getElementById('re-password');
        const eye2 = document.getElementById('eye2');
        eye2.addEventListener('click', function (e) {
            if (y.type === "password") {
    y.type = "text";
    eye2.src = "images1/eye-slash.png";
  } else {
    y.type = "password";
    eye2.src = "images1/eye.png";
  }
          });
    </script>
</body>

</html>
<?php
    }
?>