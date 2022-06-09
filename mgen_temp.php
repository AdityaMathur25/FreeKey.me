<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="assets/logindesign.css">
<header class="header">
<script>
         var checker = document.getElementById('checkme');
 var sendbtn = document.getElementById('submit');
 // when unchecked or checked, run the function
 checker.onchange = function(){
if(this.checked){
    sendbtn.disabled = false;
} else {
    sendbtn.disabled = true;
}

}
</script>
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
  include("auth_session.php");
    // Connect to database 
    require('db.php');      
    // mysqli_connect("servername","username","password","database_name")
   
    // Get all the categories from category table
    $sql = "SELECT * FROM `dataa` where user = '".$_SESSION['username']."' ";
    $all_categories = mysqli_query($con,$sql);
?>
   
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">    
</head>

<body>

    <P style = "font-size:30px" >THIS OPTION IS The TEMP FILE</p>
   
    <div class = "form">
<form action="/osx/generate.php" method = "get" align = "center">
<p align = "center" style = "font-size:40px" > GENERATOR </p>
        <label>Application:</label>
        <select name="aname" id="qwe">
        <option value=" ------- select app ------- ">SELECT</option>
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($dataa= mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option><?php echo $dataa["app"]; $cay = $dataa["veri"];  ?></option>
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $dataa["app"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
        <!-- <script>
$(document).ready(function(){
	
$("#qwe").on("change",function(){
   var GetValue=$("#qwe").val();
   $("#vre").val(GetValue);
});

});

</script> -->
        <br>
        <br>
        <!-- //<input type="hidden" name="verp" id="vre" value="" required ><br> --> 
        
        <label>HWID:</label>
        <input type="text" name="hwid" required><br>
        <br>
        <br>
        <input type="checkbox" id="checkme" checked/>
        <input type="submit" class="btn btn-outline-dark" value="Submit" id="submit">
        <script>
         var checker = document.getElementById('checkme');
 var sendbtn = document.getElementById('submit');
 // when unchecked or checked, run the function
 checker.onchange = function(){
if(this.checked){
    sendbtn.disabled = false;
} else {
    sendbtn.disabled = true;
}

}
</script>
    </form>
    </div>>
    <br>

</body>
</html>