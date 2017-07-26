<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'codes/impo.php';
session_start();
$id=$_SESSION['id'];
$sqlAccountCheck = "Select * from users where id='".$id."'";
$AccountResult = $conn->query($sqlAccountCheck);
if ($AccountResult->num_rows > 0) { 
	$row = $AccountResult->fetch_assoc();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>
<?=$row['name']?> <?=$row['Lname']?>
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
	
		
			<h2><img src="<?=$row['image']?>" alt="<?=$row['name']?> <?=$row['Lname']?>" height="100" width="100">
			<?=$row['name']?> <?=$row['Lname']?></h2>	
	</div>
	<div class="technology_list">
	<h4>Email : <?=$row['Email']?> </h4>
	<h4>Age : <?=$row['age']?></h4>
	<?php 
	if($row['type']==="Student"){?>
<h4>College ID : <?=$row['clgID']?></h4>
	<h4>GPA : <?=$row['GPA']?></h4>
	<h4>Level : <?=$row['Level']?></h4>
	<h4>Number of Hours : <?=$row['NoOfHours']?></h4>

	<?php }
	?>
	
	<?php 
  	if($row['type']==="Doctor") echo "	<h4>cv :  <a href=".$row['cv']."  target='_blank' > View </a></h4>";
  	?>


	<div class="read_more">
					<a href="editprofile.php" class="fa-btn btn-1 btn-1e">Edit Profile</a>
				</div>	
<div class="read_more">	
<?php if ($row['type']!=="Staff"){?>
  	<h4>My Subjects :</h4>
	<ul class="tag_nav list-unstyled">
  
<?php
        $sqlclassCheck = "SELECT * FROM attend,class WHERE attend.classID=class.classID and attend.userID=".$_SESSION["id"];
		$classResult = $conn->query($sqlclassCheck);
		if ($classResult->num_rows > 0){
				while($rowclasses = $classResult->fetch_assoc()){

			echo"<li><a class='fa-btn btn-1 btn-1e' href='classitem.php?classID=".$rowclasses['classID']."'>".$rowclasses['className']."</a></li>";

}}}?>
</ul>
</div>  
 
</div>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-3">

  </div>
  <div class="col-md-3">
  </div>
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