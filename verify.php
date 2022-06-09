<?php
require('db.php');
$db = $_GET['name'];
//$db = substr($tdb, 0, -1);
$enb = "SELECT * FROM `dataa` where `hwid` = 'enable' and `app` = '".$db."'";
$dsb = "SELECT * FROM `dataa` where `hwid` = 'dissable' and `app` = '".$db."'";


$a1 = mysqli_query($con,$enb);

    if (mysqli_num_rows($a1)>0){
        //echo 'op';
        $key = $_GET['key'];
       // $sql = "SELECT * FROM $db WHERE `keyy` = '".$key."' And `hwid` = '".$hwid."' ";
       $sql = "SELECT * FROM $db WHERE `hwid` IS NULL OR `hwid` = ' ' AND `keyy` = '".$key."'  ";
        $b1 = mysqli_query($con,$sql);
        if(mysqli_num_rows($b1) > 0 ) {
            $hwid = $_GET['hwid'];
            $spl = "UPDATE $db SET `hwid` = '".$hwid."' WHERE `keyy` = '".$key."'";
            $c1 = mysqli_query($con,$spl);
            echo 'true';
        }
        else{
            $hwid = $_GET['hwid'];
            $pop = "SELECT * FROM $db WHERE `keyy` = '".$key."' And `hwid` = '".$hwid."' ";
            $d1 =  mysqli_query($con,$pop);
            if(mysqli_num_rows($d1) > 0 ) {
                echo 'true';
            }
            else{
                echo 'false';
            }
        }
    }
    else{
        $key = $_GET['key'];
        //$key = substr($tkey, 0, -1);
        $hwid = $_GET['hwid'];
       // $hwid = substr($thwid, 0, -1);
        $sml = "SELECT * from $db where `keyy` = '".$key."' ";
        $xs = mysqli_query($con,$sml);
            if (mysqli_num_rows($xs) > 0){
              echo 'true';
            }
             else {
            echo 'false';
            }
    }






?>