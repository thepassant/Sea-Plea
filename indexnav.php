<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		    			        <li ><a href="index.php">Home</a></li>

		         <?php 

		    if (!empty($_SESSION["type"])) { 
		    	?>
		    		     

		    <?php   	if($_SESSION["type"]==="Student"){?>
		        	<li><a href="classeslist.php">Subjects</a></li>
		        	<li><a href="complains.php">Complains</a></li>
		        	<li><a href="mycomplains.php">Archive</a></li>
		        	<li ><a href="blog.php">Blog</a></li>

		    <?php    }?>		   
		    <?php     if ($_SESSION['type']==="Staff") {?>
		    	 <li ><a href="Staffallcomplains.php">List of All Complains</a></li>
		    	 <li ><a href="allcomplainsItem.php">List of Complains I Handle</a></li>
			<?php    }?>
			<?php   	if($_SESSION["type"]==="Doctor"){?>
		        	<li><a href="classeslist.php">Subjects</a></li>
		        	<li ><a href="blog.php">Blog</a></li>
		    <?php    }?>
			        <li><a href="Profile.php">My Profile</a></li>
		        	<li ><a href="Codes/logout.php">Log out</a></li>
		<?php    }?>

		      </ul>
</div><!-- /.navbar-collapse -->