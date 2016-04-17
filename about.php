<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/about.css">
	<script src="js/about.js"></script>
	
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
							<li ><a href="home.php">Home</a></li>
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
			
				
			<div class="col-xs-12 col-lg-12" id="right">
					
			</div>
			
		</div><!--Content Ends-->
		<div style="position:fixed; right:10px; bottom:45px;"><a href="#right"><img src="images/totop.png">Back to top</a></div>

<!--Footer-->
		<div id="footer">			
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>	
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>