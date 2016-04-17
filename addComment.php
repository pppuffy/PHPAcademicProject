<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/index.js"></script>
	<link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
<!--Wrapper-->
	<div id="wrapper">
<!--Header-->
		

		<div id="header">
			

			<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="home.php">MindView Inc</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="home.php">Home</a></li>
							<li><a href="books.php">Books</a></li>
							<li><a href="eSeminars.php">eSeminars</a></li>
							<li class="dropdown">
								<a href="about.php" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" id="first">About Bruce Eckel</a></li>
									<li><a href="#" id="two">MindView Tax ID W9 Form</a></li>	
								</ul>
							</li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<form class="navbar-form navbar-right" role="form" action="search.php" method="post">
								<div class="form-group">
									<input type="text" placeholder="Search Book" class="form-control" name="bookName" required/>
								</div>
								<input type="submit" class="btn btn-success" name="submit" id="search">Search</input>
							</form>
						</ul>
					</div><!--/.nav-collapse -->
			 </div><!--Container -->
		 </div>



		</div>
		
<!--Header Ends-->

<!--Content-->
		<div id="content">
			
		<?php
		
			$sentence=$_POST['txtSentence'];
			$name=$_POST['txtName'];
			$query="insert into commentflex values('$sentence','$name')";
			
			//create a connecttion to mysql

			$link=mysql_connect('127.0.0.1','root','1234');
			if(!$link){
				die('Falided to connect: ' .mysql_error());
			}


			$db_selected=mysql_select_db('finalprojectwebdesign',$link);
			if(!$db_selected){
				die('Can not use database myBook:' .mysql_error());
			}

			
			$result=mysql_query($query);
			if(!$query){
				die('Invalid query'.mysql_error());
			}else{
				echo "Successfully Added!";
			}

			mysql_close($link);
		
		
	?>


			
				
				
			


		</div><!--Content Ends-->


<!--Footer-->
		<div id="footer">			
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>	
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->
</body>
</html>