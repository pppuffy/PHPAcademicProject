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
	<link rel="stylesheet" type="text/css" href="css/books.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<script src="js/search.js"></script>
	<style>
		#right{
			border-top:1px solid #efefef;
		}
	</style>
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
							<li><a href="home.php">Home</a></li>
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
								<input type="submit" class="btn btn-success" name="submit">Search</input>
							</form>
						</ul>
					</div><!--/.nav-collapse -->
			 </div><!--Container -->
		 </div>



		</div>
		
<!--Header Ends-->

<!--Content-->
		<div id="content">
			
			<div>	
			<?php
					$searchkey=$_POST['bookName'];
					
					$link=mysql_connect('127.0.0.1','root','1234');
					if(!$link){
						die("Failed to Connect: ".mysql_error());
					}
			
					$mydb=mysql_select_db('finalprojectwebdesign',$link);
					if(!$mydb){
						die("Database failed to connect: ".mysql_error());
					}

					$query="select*from books where name like '%" . $searchkey . "%' order by year";
					$rsBooks = mysql_query($query);
		
					
		
					$strOutput="";
					$strOutput .= "<table class='table table-striped'>";
					$strOutput .= "<tr class='success'><td>Book Name</td><td>Author</td><td>Book Year</td></tr>";
					while ($row = mysql_fetch_assoc($rsBooks)) {
						$name = $row['name'];
						$author = $row['author'];
						$year = $row['year'];
						if($name=='Thinking in Java 3rd Edition'){
							$strOutput .=  "<tr><td><a class='thirdedition' href='#'>$name</a></td><td>$author</td><td>$year</td></tr>";
						}else if($name=='Thinking in Java 4th Edition'){
							$strOutput .=  "<tr><td><a class='fourthedition' href='#'>$name</a></td><td>$author</td><td>$year</td></tr>";
						}else if($name=='Thinking in C++'){
							$strOutput .=  "<tr><td><a class='bookc' href='#'>$name</a></td><td>$author</td><td>$year</td></tr>";
						}else {
							$strOutput .=  "<tr><td><a class='otherbook' href='#'>$name</a></td><td>$author</td><td>$year</td></tr>";
						};
					}
					$strOutput .=  "</table>";
		
					echo $strOutput;
			
			?>
			</div>
			
			<div id="right">
			</div>


		</div><!--Content Ends-->

<div style="position:fixed; right:10px; bottom:45px;"><a href="#content"><img src="images/totop.png">Back to top</a></div>
<!--Footer-->
		<div id="footer">			
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>	
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->

</body>
</html>