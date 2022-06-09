<?php
require ('db.php');
$db = $_GET['aname'];
function random_str(
    int $length = 64,
    string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
$a = random_str(12);
    $ca= $db."-".$a;
	

	$vb = "Active";

    $added_on = date("Y-m-d H:i:s");
	$sql = "INSERT INTO $db (`keyy`, `create_at`) VALUES ('".$ca."', '$added_on')";
	$oml = " INSERT INTO `checkk`(`keyy`,`username`,`exp`,`create_at`) VALUES ('".$ca."' , '".$db."' , '".$vb."' , '".$added_on."')";
   //$spl = "insert into oasis (create_at) values ('".$added_on."')";
	$rs = mysqli_query($con, $sql);
	$ps = mysqli_query($con, $oml);
    //$rp = mysqli_query($con, $spl);
	$affectedRows = mysqli_affected_rows($con);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
	else{
	    $successMsg = "Nothing Affected";
	}
    $b = "First visit Sucess";

    $name = "OASIS";


?>
    <link rel="icon" href="images/oasislogo.png">

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Key Generator</title>

		
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link href="css/styles.css" rel="stylesheet">
	
		<link href="css/loader.css" rel="stylesheet">
			
	</head>
	
<body>

		
		

		<section id="header">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8">
						<img class="logo" src="images/oasislogo.png" />
						<h1 class="white-text"><?php echo $db ?> OFFICIAL</h1>
						<div id="countdown" class="white-text"></div>
						<div class="box"> <input  type="text" name="Name" id="name" value=<?php echo "$ca";?>  size="20" style="font-size: 20pt" text-align: center;></div>
					</div>
				</div>
			</div>
			

		</section>



	

		<footer id="footer">
			<div class="container">
				<div class="row text-center">	
					<p>
						&copy; 2021 | THE KEY GENERATOR
					</p>
				</div>
			</div>		
		</footer>


	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SMOOTH SCROLL -->
		<script src="js/smooth-scroll.min.js"></script>
		<!-- PARALLAX IMG -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- SCROLL REVEAL -->
		<script src="js/scrollReveal.min.js"></script>
		<!-- FUNCTIONS -->
		<script src="js/functions.js"></script>
		<script>
			function myFunction() {
			  var copyText = document.getElementById("myInput");
			  copyText.select();
			  copyText.setSelectionRange(0, 99999);
			  navigator.clipboard.writeText(copyText.value);
			  
			  var tooltip = document.getElementById("myTooltip");
			  tooltip.innerHTML = "Copied: " + copyText.value;
			}
			
			function outFunc() {
			  var tooltip = document.getElementById("myTooltip");
			  tooltip.innerHTML = "Copy to clipboard";
			}
		</script>

</body>
?>
