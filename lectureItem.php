<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'codes/impo.php';
session_start();
$currlec=$_GET['lecID'];
$sqlAccountCheck = "Select * from lecture where lectureID=".$currlec;
$AccountResult = $conn->query($sqlAccountCheck);
if ($AccountResult->num_rows > 0) { 
	$row = $AccountResult->fetch_assoc();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>
<?=$row['lectureName']?>
</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html"><img src="images/Logo.png" height="150" width="200"> </a></h1>
		</div>
	
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		  		    <?php include 'indexnav.php'; ?>

		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
				
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
		<h2><?=$row['lectureName']?></h2>
		<h3>Subject Details :</h3>
<?php
		echo "<h4>Lecture Name : ".$row['lectureName']." </h4><br><h4>Lecture Date :  ".$row['lectureDate']." </h4><br><h4>Lecture Location :   ".$row['lectureLocation']."</h4><br>"; 
		
echo "<h4> Lecture Slides : <a href='admin/".$row['lectureSlide']."' download class='btn btn-info'><i class='fa fa-arrow-down'></i> Download !</a></h4> ";
?>
</div>
<video width="800" height="700" controls>
    <source src="admin/<?=$row['lectureURL']?>" type="video/mp4">
    </video>
    <br>             <a href="admin/<?=$row['lectureURL']?>" download class="btn btn-info"><i class="fa fa-arrow-down"></i> Download !</a> 

<h2>Related Quiz</h2>
<?php	$sqlclassCheck = "Select * from quiz where lectureID=".$row['lectureID'];
		$classResult = $conn->query($sqlclassCheck);
		if ($classResult->num_rows > 0) {
			while($rowlecture= $classResult->fetch_assoc()) {
				echo"<a href='Quiz.php?quizID=".$rowlecture['quizID']."&lecid=".$row['lectureID']."'>Take Quiz !</a><br>";
			}
		}

	
?>
		</div>
	</div>



</div><!-- end main -->
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by&nbsp;<a href="#">BIS Graduatin Project Team</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
<?php } ?>
</html>