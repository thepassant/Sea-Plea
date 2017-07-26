<?php  session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>BIS Academy | Home </title>

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
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html"><img src="images/Logo.png" height="150" width="200"> </a></h1>
		</div>
		
</div>
</div>
<div class="container">
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
</div>
<div class="slider_bg"><!-- start slider -->
	<div class="container">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide">
				<h2>See & Plea</h2>
				<p>Our website provides the attendance for the students to motivate them to attend the lectures even 

<span class="hide_text"> if they have an excuse and help the doctors to follow up the students' level by making a quiz after every lecture video. It provides an interaction between the student and the doctor via the blogs and provides many facilities for the students according to the plea problem </span></p>
				
			</div>
			<div class="da-slide">
				<h2>online educations</h2>
				<p>Online education is a type of educational instruction that is delivered via the internet to students using their home computers. <span class="hide_text">During the last decade, online degrees and courses have become popular alternative for a wide range of nontraditional students, include those who want to continue working full-time or raising families. </span></p>
				
			</div>
			<div class="da-slide">
				<h2>See & Plea</h2>
				<p>Our website provides the attendance for the students to motivate them to attend the lectures even 

<span class="hide_text"> if they have an excuse and help the doctors to follow up the students' level by making a quiz after every lecture video. It provides an interaction between the student and the doctor via the blogs and provides many facilities for the students according to the plea problem </span></p>
				<!--<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>-->
			</div>
			<div class="da-slide">
				<h2>online educations</h2>
				<p>Online education is a type of educational instruction that is delivered via the internet to students using their home computers. <span class="hide_text">During the last decade, online degrees and courses have become popular alternative for a wide range of nontraditional students, include those who want to continue working full-time or raising families. </span></p>
				
			</div>
	   </div>
	</div>
</div><!-- end slider -->
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-4 images_1_of_4 text-center">
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="#">Student</a></h4>
				<p class="para"></p>
				<a href="Login.php?type=Student" class="fa-btn btn-1 btn-1e">Login</a>
			</div>
			<div class="col-md-4 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a href="#">Doctor</a></h4>
				<p class="para"></p>
				<a href="Login.php?type=Doctor" class="fa-btn btn-1 btn-1e">Login</a>
			</div>
			<div class="col-md-4 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-cog"></i></span>
				<h4><a href="#">Student Affairs</a></h4>
				<p class="para"></p>
				<a href="Login.php?type=Staff" class="fa-btn btn-1 btn-1e">Login</a>
			</div>		
			
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			
	
				<!----start-img-cursual---->
				<!----start-img-cursual---->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="http://www.helwan.edu.eg/commerce/index.php?pg=bis" target="_blank">BIS College - Helwan</a></h4>
								<p>
									In 1961, the Higher Institute of Financial and Commercial Sciences was established in Zamalek as a private institute affiliated to the National Institutes. However, in 1965, the Institute was transferred to the Ministry of Higher Education and changed its name to the Higher Commercial Institute in Cairo.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/fawry.jpg" alt="Fawry">
							</div>
							<div class="cau_left">
								<h4><a href="http://fawry.com/ar/" target="_blank">fawry</a></h4>
								<p>
									Fawry is a pioneering E-Payment Network in Egypt, offering financial services to consumers and businesses through more than 65 thousand locations and a variety of channels.
								</p>
							</div>
						</div>
						
						
						
						
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/ahli.png" alt="Ahli Masr Bank">
							</div>
							<div class="cau_left">
								<h4><a href="http://www.nbe.com.eg" target="_blank">National Bank Of Egypt</a></h4>
								<p>
									NBE is the oldest commercial bank in Egypt. It was established on June 25, 1898 with a capital of £ 1 million.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/voda.png" alt="Vodafone Egypt">
							</div>
							<div class="cau_left">
								<h4><a href="http://www.vodafone.com.eg" target="_blank">Vodafone Cash</a></h4>
								<p>
									you can use vodafone cash to pay for the fees and make your life so easy 
								</p>
							</div>
						</div>
						
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/bee.png" alt="Bee">
							</div>
							<div class="cau_left">
								<h4><a href="http://www.bee.com.eg" target="_blank">bee</a></h4>
								<p>
									TBE for Payment Solutions and Services S.A.E. working under brand name “Bee” has now launched in Egypt. 
								</p>
							</div>
						</div>

						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/bankmisr.jpg" alt="Misr Bank">
							</div>
							<div class="cau_left">
								<h4><a href="http://www.banquemisr.com" target="_blank">misr bank</a></h4>
								<p>
									ince 1920, the great Egyptian economist, Mohamed Talaat Pasha Harb , come up with the concept of establishing a​ bank with a mission. 
								</p>
							</div>
						</div>
						
						
						
					</div>
					<!----//End-img-cursual---->
	</div>
</div>
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
</html>