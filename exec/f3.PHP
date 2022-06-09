<!-- <?php
  $fileLocation = getenv("DOCUMENT_ROOT") . "/myfile.php";
  $file = fopen($fileLocation,"w");
 
  $content = "<?php \n $sql = DELETE FROM $ram WHERE create_at < ('" . date("Y-m-d H:i:s"). "' - INTERVAL 4 HOUR); \n $rs = mysqli_query($conn, $sql);?>";
  
  fwrite($file,$content);
  fclose($file);
  echo $content;
?> 
<?php
 $fileLocation = getenv("DOCUMENT_ROOT") . "/myfile.php";
 $file = fopen($fileLocation,"w");
 touch($file);
 $fileLocation1 = getenv("DOCUMENT_ROOT") . "/myfile1.php";
 $file1 = fopen($fileLocation,"w");
 touch($file1);
 //fwrite($file,"ADITYA");
echo copy($file, $file1);
?>