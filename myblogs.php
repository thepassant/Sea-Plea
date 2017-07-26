<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
My Blogs
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
		<div class="main row">
			<div class="col-md-8 blog_left">
<?php
include 'codes/impo.php';
$bloglist = "SELECT * FROM `blog` where userID=".$_SESSION["id"]." ORDER BY `blogDate` DESC";
$allblogresults = $conn->query($bloglist);
if ($allblogresults->num_rows > 0) { 
	  while ($blogrow = $allblogresults->fetch_assoc()) {
$comment = "SELECT * FROM `blogcomments` where blogID=".$blogrow["blogID"];
$commentresults = $conn->query($comment);
$author = "SELECT name,Lname FROM users , blog where blog.userID=users.id and blogID= ".$blogrow["blogID"];
$authorresults = $conn->query($author);
$authorrow = $authorresults->fetch_assoc();
?>
				<h4><a href="blogItem.php?blogid=<?=$blogrow["blogID"]?>"><?=$blogrow["blogTitle"]?> </a></h4>
				<div class="blog_list">
					  <ul class="list-unstyled">
						<li><i class="fa fa-calendar-o"></i><span><?=$blogrow["blogDate"]?></span></li>
						<li><i class="fa fa-comment"></i><span><?=$commentresults->num_rows?> Comments</span></li>
				  		<li><i class="fa fa-user"></i><span><?=$authorrow["name"]?> <?=$authorrow["Lname"]?></span></li>
					  </ul>
				</div>
				
					<p class="para"><?=$blogrow["blogBody"]?></p>
				<div class="read_more">
					<a href="blogItem.php?blogid=<?=$blogrow["blogID"]?>" class="fa-btn btn-1 btn-1e">view more</a>
					<a href="blogEdit.php?blogid=<?=$blogrow["blogID"]?>" class="fa-btn btn-1 btn-1e">Edit</a>
					<a href="Codes/deleteblog.php?blogid=<?=$blogrow["blogID"]?>" class="fa-btn btn-1 btn-1e">Delete</a>
				</div>

			<?php }}?>
				
			</div>
			<div class="col-md-4 blog_right">
				<!-- start social_network_likes -->
					
				
				<ul class="tag_nav list-unstyled">
<?php  
		if($_SESSION['type']!=="Staff") {?>
					<h4>Actions</h4>
						<li><a href="blogCreate.php">New Blog</a></li>
						<li><a href="blog.php">All Blogs</a></li>
			
						<div class="clearfix"></div>
	<?php }?>
				</ul>
				
			</div>
			<div class="clearfix"></div>
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
</html>