
<!DOCTYPE HTML>
<html>
<head>
<title>BIS Academy | Home </title>
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
    <h1>Edit Profile</h1>
        
    </div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->

</div>
<div class="footer_bg"><!-- start footer -->
    <div class="container">
        <div class="row  footer">  
        <?php
                                                   $oldimage=$editrow["image"];
                                                   $oldcv=$editrow["cv"];
                            if(isset($_POST['edit']))
                            {

                               $name = $_POST['name'];
                               $Lname = $_POST['Lname'];
                               $Email =$_POST['email'];
                               $password = $_POST['password'];
                               $GPA = $_POST['GPA'];
                               $Level = $_POST['Level'];
                               $NoOfHours = $_POST['NoOfHours'];
                               $clgID = $_POST['clgid'];
                               $age = $_POST['age'];
                               $pic = $Email.rand(0,1000).$_FILES['pic']['name'];                              
                               $pic_loc = $_FILES['pic']['tmp_name'];
                               if($_SESSION['type']==="Doctor"){
                               $cv = $Email.rand(0,1000).$_FILES['cv']['name'];
                               $cv_loc = $_FILES['cv']['tmp_name'];}
                               $folder="pic/";

                               $foldercv="cv/";
                               $success=1;
                               if(!empty($_FILES['cv']['name'])){
                                if(move_uploaded_file($cv_loc,$foldercv.$cv))
                               {
                                  if (!empty($oldcv)) unlink($oldcv);  
                                ?><script>alert('CV successfully uploaded');</script><?php                         
                                }else{
                                    $success=0;
                            ?><script>alert('error while uploading CV file');</script><?php
                          } }else{
                            $cv=$oldcv;
                            $cv=str_replace("cv/",'', $cv);
                          }


                          if(!empty($_FILES['pic']['name'])){
                               if(move_uploaded_file($pic_loc,$folder.$pic))
                                {
                                 if($oldimage!=="pic/default.png")      unlink($oldimage);
                                 ?><script>alert('successfully uploaded');</script><?php
                                }
                                 else
                                {                     
                                 $success=0;
                                 ?><script>alert('error while uploading Profile Picture');</script><?php
                                }
                          }else{
                            $pic=$oldimage;
                            $pic=str_replace("pic/",'', $pic);
                          }
                             
                        if($success===1){
                           
                            mysqli_query($conn,"UPDATE users SET name ='".$name."', 
                                    Lname = '".$Lname."',image='".$folder.$pic."',cv='".$foldercv.$cv."',
                                     Email = '".$Email."', 
                                    password = '".$password."', age = '".$age."',
                                    GPA = '".$GPA."',Level = '".$Level."',
                                    NoOfHours = '".$NoOfHours ."', clgID = '".$clgID."' 
                                    where id='".$myid."'");
                            mysqli_close($conn);
                        }
                           
                    }

                    ?>    
        <form class="form-horizontal" action="editprofile.php" method="post" enctype="multipart/form-data"  >
          <div class="panel-body">
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['name']?>" name="name" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Last name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['Lname']?>" name="Lname" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock"></span></span>
                                                <input type="Email" value="<?=$editrow['Email']?>" name="email" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock"></span></span>
                                                <input type="password" value="<?=$editrow['password']?>"name="password" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">GPA</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['GPA']?>" name="GPA" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Level</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['Level']?>" name="Level" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Number of hours</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['NoOfHours']?>" name="NoOfHours" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                        <?php   if($_SESSION["type"]==="Student"){ ?>
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">College ID</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['clgID']?>" name="clgid" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>
                        <?php   }else{ 
                       echo "<input type='hidden' value='' name='clgid' class='form-control'/>"; }?>    
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">age</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?=$editrow['age']?>" name="age" class="form-control"/>
                                            </div>                                            
                                        </div>
                                </div>  
                                <?php
                                if($_SESSION["type"]==="Doctor"){
                                echo "<div class='form-group'>
                                        <label class='col-md-3 col-xs-12 control-label'>CV</label>
                                        <div class='col-md-6 col-xs-12'>                                            
                                            <div class='input-group'>
                                                <input type='file'  name='cv' />
                                                Must be in PDF Format 
                                            </div>                                            
                                        </div>
                                </div>";
                                }?> 
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Profile Picture</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <input type="file"  name="pic" />
                                            </div>                                            
                                        </div>
                                </div>                      
                                <div class="form-group">
                                        <input type="hidden" name="type" value="<?=$_SESSION['type']?>"/>

                                </div>
                                </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="edit" value="Update !" >
        </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>