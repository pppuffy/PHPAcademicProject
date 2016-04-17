<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component-book.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>	
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<script src="js/books.js"></script>
	<link rel="stylesheet" href="css/books.css" type="text/css">
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
							<li  class="active"><a href="books.php">Books</a></li>
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
				
				<div id="interview"><!--Interview-->			
					<div id="interview-header">
					<a href="books.php"><img src="images/iconbook.png"/></a>
					<FONT face=黑体 color=#FF5511  size=5><B><I>Best Seller</I></B></FONT>		
					</div>
					<div class="row">
						<div class="col-xs-4 col-lg-4">
							<ul class="list-unstyled">
								<li><a class="list-group-item first" href="#">First Steps in Flex</a></li>
								<li ><a class="list-group-item two " href="#">Thinking in Java</a></li>
									

								
								<li><a class="list-group-item three" href="#">Thinking in C++</a></li>
								<li><a class="list-group-item four" href="#">Other Books</a></li>				
							</ul>					
						</div>

						<div class="col-xs-8 col-sm-8 col-lg-8" id="right">							
							<div class="interview-pic bloc-pic"><!--Pic-->
									<div class="grid">
										<figure class="effect-roxy">
											<img src="images/book1.jpg" alt="Pic"/>
											<figcaption>
											<h2 class="blog-pic-color">First Steps in Flex</h2>
												<a href="#" class="first"></a>
											</figcaption>			
										</figure>
										<figure class="effect-sarah">
											<img src="images/book2.jpg" alt="Pic"/>
											<figcaption>
											<h2 class="blog-pic-color">Thinking in Java</h2>
													<a href="#" class="two"></a>											
											</figcaption>			
										</figure>
										<figure class="effect-sarah">
											<img src="images/book3.jpg" alt="Pic"/>
											<figcaption>
											<h2 class="blog-pic-color">Thinking in C++</h2>
												<a href="#" class="three"></a>
											</figcaption>			
										</figure>
										<figure class="effect-marley">
											<img src="images/book4.jpg" alt="Pic"/>
											<figcaption>
											<h2 class="blog-pic-color">Other Books</h2>
															<a href="#" class="four"></a>								
											</figcaption>			
										</figure>
									</div>
									
									
										
									
							</div><!--Pic-->
						</div>
					</div>
				</div>


				
			

		</div>
<!--Content Ends-->
<div style="position:fixed; right:10px; bottom:45px;"><a href="#interview"><img src="images/totop.png">Back to top</a></div>
<!--Footer-->
		<div id="footer">
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->
</body>
</html>