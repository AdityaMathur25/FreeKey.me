<?php
include("auth_session.php");
      
        if(isset($_POST['button1'])) {
            echo "This is Button1 that is selected";
        }
        if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
        }
        if(isset($_POST['button3'])) {
            echo "This is Button2 that is selected";
        }
    ?>
      <style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
    <form method="post">
        <input type="submit" name="button1"
                value="Button1"/>
          
        <input type="submit" name="button2"
                value="Button2"/>
    </form>
    <a href="dashboard.php" >This is a link</a>