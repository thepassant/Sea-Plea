
<!DOCTYPE HTML>
<html>
<head>
<title>BIS Academy | List of All Complains </title>
<?php 
session_start();
?>
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
<?php
     require('codes/impo.php');
                            $myid= $_SESSION["id"];
                            $result = $conn->query("SELECT * FROM users WHERE id ='".$myid."'");
                            $editrow = $result->fetch_assoc();
?>

<div class="main_bg"><!-- start main -->
	<div class="container">
        <a href="Profile.php"><h2><img src="<?=$editrow['image']?>"  height="100" width="100">
            <?=$editrow['name']?> <?=$editrow['Lname']?></h2></a>
	<h1>List of All Complains</h1>
		
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->

</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		


       <?php
       $allcomplainsresults = $conn->query("select DISTINCT complain.complainID,
        complain.complainSubject,complain.complainDetails,complain.complainTime,users.name,
        users.Lname from complain,response,users WHERE users.type='Student' and complain.complainID=response.complainID
        and response.userID=users.id ORDER BY `complain`.`complainTime` DESC");
                while ($complainrow = $allcomplainsresults->fetch_assoc()) {
		echo "<a href='mycomplainsItem.php?compid=".$complainrow["complainID"]."''><h4>".$complainrow["complainSubject"]."</h4>
		      </a>".$complainrow["name"]." ".$complainrow["Lname"]." ".$complainrow["complainTime"]."<br>";
					                };
       ?>
		
		</div>
	</div>
</div>
</body>
</html>