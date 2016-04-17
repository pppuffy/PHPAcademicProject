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
			
			

			
				<div id="blog">	<!--Blog-->
					<div id="blog-header">
					<img src="images/iconblog3.png"/>
					<FONT face=ºÚÌå color=#FF5511      size=5><B><I>Blog</I></B></FONT>		
					</div>
					<div class="row">
						<div class="col-xs-4 col-lg-4">
							<ul class="list-unstyled">
								<li><a class="blog1 list-group-item" href="#">Atomic Scala eBook & Downloadable Hands-On Java eSeminar</a></li>
								<li><a class="blog2 list-group-item" href="#">The Scala Summit in Crested Butte, August 19-21</a></li>
								<li><a class="blog3 list-group-item" href="#">Windows 8 is ... Not So Bad</a></li>
								<li><a class="blog4 list-group-item" href="#">"Atomic Scala" Print Book Now Available</a></li>
								<li><a class="blog5 list-group-item" href="#">Gentle Introduction to Scala: The Seminar</a></li>
								<li><a class="blog6 list-group-item" href="#">Summer Workshops: Gentle Intro to Scala & Get Your Groove Back</a></li>
								<li><a class="blog7 list-group-item" href="#">Beautiful Soup 4 Now in Beta</a></li>
								<li><a class="blog8 list-group-item" href="#">Is Scala Only for Computer Scientists? </a></li>
								<li><a class="blog9 list-group-item" href="#">WebSockets: A Glimpse of the Future </a></li>
								<li><a class="blog10 list-group-item" href="#">Why I'm Returning My Kindle Fire</a></li>	
							 </ul>	
						</div>
						<div class="col-xs-8 col-sm-8 col-lg-8" id="blog-right">
								
								<div class="blog-pic"><!--Pic-->
									<div class="grid">
										<figure class="effect-milo">
											<img src="images/blog4.jpg" alt="Pic"/>
											<figcaption>
											<h2 class="blog-pic-color">About the Blogger</h2>
												<p class="blog-pic-color">Bruce Eckel (www.BruceEckel.com) provides development assistance in Python with user interfaces in Flex. He is the author of Thinking in Java (Prentice-Hall, 1998, 2nd Edition, 2000, 3rd Edition, 2003, 4th Edition, 2005), the Hands-On Java Seminar CD ROM (available on the Web site), Thinking in C++ (PH 1995; 2nd edition 2000, Volume 2 with Chuck Allison, 2003), C++ Inside & Out (Osborne/McGraw-Hill 1993), among others. He's given hundreds of presentations throughout the world, published over 150 articles in numerous magazines, was a founding member of the ANSI/ISO C++ committee and speaks regularly at conferences.</p>
												
											</figcaption>			
										</figure>
									</div>
								</div><!--Pic-->

						</div>	
					</div>							
				</div><!--Blog-->
				
				<div id="interview"><!--Interview-->			
					<div id="interview-header">
					<img src="images/interview.png"/>
					<FONT face=ºÚÌå color=#FF5511  size=5><B><I>Interview</I></B></FONT>		
					</div>
					<div class="row">
						<div class="col-xs-4 col-lg-4">
							<ul class="list-unstyled">
								<li><a class="interview1 list-group-item" href="#">Web Frameworks Jam</a></li>
								<li><a class="interview2 list-group-item" href="#">Anders Hejlsberg</a></li>
								<li><a class="interview3 list-group-item" href="#">Guido Van Rossum</a></li>
								<li><a class="interview4 list-group-item" href="#">Joshua Bloch</a></li>
								<li><a class="interview5 list-group-item" href="#">Martin Fowler</a></li>
								<li><a class="interview6 list-group-item" href="#">Tim Lister</a></li>
								<li><a class="interview7 list-group-item" href="#">Ron Jeffries</a></li>
								<li><a class="interview8 list-group-item" href="#">Jim Highsmith</a></li>
								<li><a class="interview9 list-group-item" href="#">Jim Fulton</a></li>
								<li><a class="interview10 list-group-item" href="#">Chuck Allison</a></li>					
							</ul>					
						</div>
						<div class="col-xs-8 col-sm-8 col-lg-8" id="interview-down-right">							
							<div class="interview-pic bloc-pic"><!--Pic-->
									<div class="grid">
										<figure class="effect-sarah">
											<img src="images/interview1.jpg" alt="Pic"/>
											<figcaption>
											<h2 class="blog-pic-color">Thinking in Code</h2>
												<p class="blog-pic-color">
													Bruce Eckel Interviews Software Luminaries
												</p>
												
											</figcaption>			
										</figure>
									</div>
								</div><!--Pic-->
						</div>
					</div>
				</div><!--Interview ends-->
				
				<div id="quote"><!--Quote -->
					
					<div id="interview-header">
					<img src="images/quote.png"/>
					<FONT face=ºÚÌå color=#FF5511  size=5><B><I>Quotes</I></B></FONT>	
					</div>
					
					<div class="col-xs-12 col-sm-12 col-lg-12" id="blog-right">	
							<?php
								$strOutput="";
								
								$link=mysql_connect('127.0.0.1','root','1234');
								if(!$link){
									die("Failed to Connect: ".mysql_error());
								}
								$mydb=mysql_select_db('finalprojectwebdesign',$link);
								if(!$mydb){
									die("Database: finalprojectwebdesign can not connect: ".mysql_error());
								}
								$query="select*from quote";
								$rsQuotes = mysql_query($query);
								$num=1;
								while ($row = mysql_fetch_assoc($rsQuotes)) {
									$author = $row['author'];
									$sentence = $row['sentence'];			
									$strOutput .= $num.".  ".$sentence."<br>";
									$strOutput.="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												";
									$strOutput.="--".$author."<br><br>";
									$num++;
								}
								echo $strOutput;
							?>
					</div>
				</div><!--Quote -->

				
			


		</div><!--Content Ends-->

		<div style="position:fixed; right:10px; bottom:45px;"><a href="#blog"><img src="images/totop.png">Back to top</a></div>
<!--Footer-->
		<div id="footer">			
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>	
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->
</body>
</html>