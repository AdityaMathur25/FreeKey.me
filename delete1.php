<?php

include("auth_session.php");
require('db.php');
 // Using database connection file here

$id = $_GET['id']; 
$app = $_GET['app'];// get id through query string

$del = mysqli_query($con,"delete from checkk where username = '$app' and keyy = '$id'"); // delete query

 if($del)
 {
     //$filedel = $app.".php";
//     //unlink("c1/$filedel");
     $sql = "delete from $app where keyy = '$id'";
     $delo = mysqli_query($con,$sql);
   
   
     mysqli_close($con); // Close connection
     header("location:mapp.php"); // redirects to all records page
    
     exit;	
 }
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>