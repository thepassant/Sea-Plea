<?php
include 'codes/impo.php';
session_start();
$quizID=$_GET['quizID'];
$lecid=$_GET['lecid'];
$total="";
if(isset($_POST['quizfinish'])){
     
	$questionsarray = explode(",", $_POST['questions']);
	 $lectureid=$_POST['lectureID'];
	for ($i=0; $i < count($questionsarray) ; $i++) { 
	$total= $_POST[$questionsarray[$i]]+$total;
	}	
	   echo "<script>alert('Your Score Is : ".$total."');</script>";
	  
	   
	   $sqlcheckgrades = "Select * from grades where quizID= ".$quizID." and userID = ".$_SESSION["id"];
		$graderesults = $conn->query($sqlcheckgrades);
		if ($graderesults->num_rows > 0) {	$graderesultrow = $graderesults->fetch_assoc();
		if ($total > $graderesultrow['grade']){
			mysqli_query($conn,"UPDATE grades SET grade ='".$total."'
                                where quizID=".$quizID." and userID = ".$_SESSION["id"]);			
                            mysqli_close($conn);
           		echo "<script> window.location.href='lectureItem.php?lecID=".$lectureid."';	</script>";
		}else {
				echo "<script>alert('Your Score was better than this we will not concider this trial ! ');</script>";
                echo "<script> window.location.href='lectureItem.php?lecID=".$lectureid."';	</script>";
		}}else {
			mysqli_query($conn,"INSERT INTO `grades`(`userID`, `quizID`, `grade`) VALUES
							(".$_SESSION["id"].",".$quizID.",".$total.")");
                            mysqli_close($conn);
                echo "<script> window.location.href='lectureItem.php?lecID=".$lectureid."';	</script>";
		}

	} 
?>



<?php

$sqlquiz = "SELECT * from lecture, quiz where quizID=".$quizID." and lecture.lectureID =".$lecid;
$quizResult = $conn->query($sqlquiz);
if ($quizResult->num_rows > 0) 
	$quizrow = $quizResult->fetch_assoc();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>
<?=$quizrow['lectureName']?> Quiz
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
		<div class="about details row">
		<h2><?=$quizrow['lectureName']?> Quiz</h2>
		<h4>totalGrades : <?=$quizrow['totalGrades']?> Mark</h4>
		</div>
	</div>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-6">
<?php			
		$SQLnumQuestions = "Select * from questions where quizID=".$quizrow['quizID'];
		$QuestionsnumResults = $conn->query($SQLnumQuestions);
		$numberofQuestions = $QuestionsnumResults->num_rows;
		if($numberofQuestions % 2 != 0){
         $numberofQuestions=$numberofQuestions--;
		}
		if($numberofQuestions >= 10){
         $numberofQuestions=$numberofQuestions/2;
		}
		$questions="";
		?>

		<form class="contact-form" action="Quiz.php?quizID=<?=$quizrow['quizID']?>&lecid=<?=$lecid?>" method="post">
	<?php	$SQLQuestions = "Select * from questions where quizID=".$quizrow['quizID']." order by rand() limit ".$numberofQuestions;
		$QuestionsResults = $conn->query($SQLQuestions);
		if ($QuestionsResults->num_rows > 0) {
			$numOFQuestions = $QuestionsResults->num_rows/2;

			while($QuestionsRow=$QuestionsResults->fetch_assoc()) {
					$questions.= $QuestionsRow['quesID'].",";
					echo "<h2>".$QuestionsRow['quesText']."</h2>";
					$SQLAnswers = "Select * from answers where questionID=".$QuestionsRow['quesID'];
					$AnswersResults = $conn->query($SQLAnswers);
					if ($AnswersResults->num_rows > 0) {
					while($AnswersRow=$AnswersResults->fetch_assoc()) {
					?>
					  <h4><input type="radio" name="<?=$AnswersRow['questionID']?>" value="<?=$AnswersRow['answerWeight']?>"> <?=$AnswersRow['answerText']?><br></h4>

					<?php
					}
				}
			}
		} 
?>           
 <input type="hidden" name="questions" value="<?=$questions?>" >
  <input type="hidden" name="lectureID" value="<?=$lecid?>" >
            <input class="btn btn-primary" type="submit" name="quizfinish" value="Finish" >
</form>
  </div>
  <div class="col-md-3">
 
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
<?php //} ?>
</html>