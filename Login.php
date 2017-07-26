
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
	
</div>

<div class="main_bg"><!-- start main -->
	<div class="container">
	<h1>Login</h1>
		
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->

</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<?php $type = $_GET['type'];?>
		
		<form class="form-horizontal" action="codes/usersignin.php" method="post"  >
		<div class="form-group">
		<h3><label class="col-md-3 col-xs-12 control-label">Email</label></h3>
            <div class="col-md-6 col-xs-12">                                            
                <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="email" name="email" class="form-control"/>
                </div>                                            
            </div>
        </div>
        <div class="form-group">
        <h3><label class="col-md-3 col-xs-12 control-label">Password</label></h3>
            <div class="col-md-6 col-xs-12">                                            
                <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="password" name="password" class="form-control"/>
                <input type="hidden" name="type" value="<?=$type?>"/>
                </div>                                            
            </div>
		</div>
		<div class="form-group">
            <input class="btn btn-primary" type="submit" value="Login !" >
         <?php
if($type === "Student") echo "<a href='signup.php' class='btn btn-primary'>Register New Student Account</a>";
         ?>  
        </div>
		</form>
		</div>
	</div>
</div>
</body>
</html>