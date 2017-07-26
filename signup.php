
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

<div class="main_bg"><!-- start main -->
	<div class="container">
	<h1>Sign Up</h1>
		
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->

</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
		
		<form class="form-horizontal" action="admin/usersignup.php" method="post"  >
		  <div class="panel-body">
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="Fname" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Last name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="Lname" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock"></span></span>
                                                <input type="Email" name="email" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock"></span></span>
                                                <input type="password" name="password" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">age</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="age" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>   
                                 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">GPA</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="gpa" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>   
                                 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Level</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="lvl" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div> 
                                 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Number of hours</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="noOfHrs" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>                      
                                <div class="form-group">
                                        <input type="hidden" name="type" value="Student"/>
                                        <input type="hidden" name="flag" value="0"/>

                                </div>
                                </div>
		<div class="form-group">
            <input class="btn btn-primary" type="submit" value="Signup !" >
        </div>
		</form>
		</div>
	</div>
</div>
</body>
</html>