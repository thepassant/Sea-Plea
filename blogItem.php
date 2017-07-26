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
Blogs
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
$blogid=  $_GET["blogid"];

$bloglist = "SELECT * FROM `blog` where blogID=".$blogid." ORDER BY `blogDate` DESC";
$allblogresults = $conn->query($bloglist);
if ($allblogresults->num_rows > 0) { 
	  $blogrow = $allblogresults->fetch_assoc();

?>
				<div class="about details row">
			<h2><?=$blogrow["blogTitle"]?></h2>
			<h5><i class="fa fa-calendar-o"></i> <?=$blogrow["blogDate"]?></h5>
			<p class="para"><?=$blogrow["blogBody"]?></p>
		    </div>

			<?php }?>	
				<div>
			<h3><i class="fa fa-comment"></i> Comments</h3>
			<?php 
			$commentlist = "SELECT * FROM `blogcomments`,users  where blogID=".$blogid."  and
							blogcomments.userID=users.id ORDER BY `blogcomments`.`bcDate` ASC";
			$commentresult = $conn->query($commentlist);
			if ($commentresult->num_rows > 0) { 
	  			while($commentrow = $commentresult->fetch_assoc()){
	  			echo "<h4>".$commentrow["bcBody"]."</h4>" 	;
	  			echo $commentrow["name"]." ".$commentrow["Lname"]."<br>" 	;
	  			}}
			?>
			

			<form class="form-horizontal" action="Codes/blogcomment.php" method="post"  >
		  <div class="panel-body">          
                               <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Reply </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <textarea class="form-control" name="Body" rows="5"></textarea>
                                    <input type="hidden" value="<?=$blogid?>" name="blogid"> 
                                            </div>   

                                        </div>
                       <input class="btn btn-primary" type="submit" value="Reply" >
                                </div>                          
                                </div> 
                                </div>
	
		</form>
			</div>			
			</div>
		
			<div class="col-md-4 blog_right">
				<!-- start social_network_likes -->
					
				
				<ul class="tag_nav list-unstyled">
<?php  
		if($_SESSION['type']!=="Staff") {?>
					<h4>Actions</h4>
						<li><a href="blogCreate.php">New Blog</a></li>
						<li><a href="myblogs.php">My Blogs</a></li>
			
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