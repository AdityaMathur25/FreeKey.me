<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
   
    <link rel="icon" href="images1/logo.ico">
    <title>Login</title>
</head>

<body>
<?php
// include("auth_session.php");
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_connect_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='text-large'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'  >Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="box">
        <a href="index.html">
            <div class="ribbon-1"> Noisy.io </div>
        </a>
    </div>
    <div class="login-card">
        <header>
            <p class="text-large">Sign In</p>
            <p class="text-small">Log in to your account to continue.</p>
        </header>
        <div class="logo-image">
            <img src="images1/logo.png" id="logo">
        </div>
        <section class="form-container">
            <form method="post" name="login">
                <div class="input-entity">
                    <label for="user" class="text-small-bold text-small labels">USERNAME</label>
                    <input type="text" name="username" placeholder="e.g. Noisy01" id="user">
                    <img src="images1/user.png" class="icon">
                </div>

                <div class="input-entity">
                    <div class="labels">
                        <label for="pass" class="text-small-bold text-small">PASSWORD</label>
                        <a href="#" class="text-small-bold text-small">Forgot Password ?</a>
                    </div>
                    <input type="password" name="password" placeholder="Password" id="pass">
                    <img src="images1/lock.png" class="icon">
                    <i id="icon" class="fa-duotone fa-eye"></i>
                    <img src="images1/eye.png" id="eye" class="icon eye">
                                        
                </div>

                <button type="submit">Log In</button>
            </form>
            <div class="sign-up">
                <p>Not registered ? <a class="create" href="registration.php">Create an account</a></p>
            </div>
        </section>
    </div>
    <script>
        const x = document.getElementById('pass');
        const eye = document.getElementById('eye');
        eye.addEventListener('click', function (e) {
            if (x.type === "password") {
    x.type = "text";
    eye.src = "images1/eye-slash.png";
  } else {
    x.type = "password";
    eye.src = "images1/eye.png";
  }
  });
    </script>

</body>
</html>
<?php
    }
?>