<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/eSeminars.js"></script>
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" href="css/eSeminars.css" type="text/css">

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
							<li class="active"><a href="eSeminars.php">eSeminars</a></li>
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
				<div id="seminar-header-left">
					<a href="eSeminars.php">
						<img src="images/eSeminar2.png"/>
					</a>
				</div>
				<div id="seminar-header-right">
					<p class='bookflex-header'>
						<img src="images/design.png"/>&nbsp Design Objects and System
						<FONT face=Arial color=black size=2><I><br>&nbsp &nbsp A live, 5-day seminar on DVD, approximately 21 hours of lecture and discussion.</I></FONT>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-lg-12">
					<div class="bookflextop">
						<ul class='nav nav-tabs' role='tablist'>
								<li><a href='#introduction'>Introduction</a></li>
								<li><a href='#design'>Designing Systems</a></li>
								<li><a href='#designObject'>Designing Objects</a></li>
								<li><a href='#prerequisites'>Prerequisites</a></li>
								<li><a href='#recommend'>Recommended Reading</a></li>
								<li><a href='#sample'>Sample Clip: Models</a></li>
								<li><a href='#order'>Ordering</a></li>			
						</ul>
					</div>
					<div id="introduction">
						<p class='bookflex-header'>Introduction</p>
						<p>How do you think about a system and partition it into objects? What makes a good subsystem? How do you decompose a subsystem into classes and interfaces? This seminar will introduce you to the essence of design by examining design tradeoffs:
						</p>
						<ul>
							<li>What is important</li>
							<li>What you should value</li>
							<li>How to balance usability, performance, maintainability, clarity, and flexibility.</li>
						</ul>
						<p>This seminar is for software designers and programmers who grasp the concepts of OO, but for whom conceptualizing the best system and object designs is a hurdle.</P>
						<p>The seminar consists of two parts: Designing Systems, covering the high-level issues of object-oriented architecture and system design, and Designing Objects, which will focus on the issues and questions surrounding the design of individual classes. These portions of the seminar and their associated projects will be interleaved throughout the seminar.</P>
						<p>The workshop combines lectures, guided exercises, and team-based independent work to demonstrate how object-oriented design can work in a production environment. As with all Bruce Eckel's seminars, the emphasis is on \"thinking in\" objects.</P>
					</div>
				<div id='design'>
					<h3>Designing Systems</h3>
					<p>In this portion of the seminar, you'll learn how to attack the problem of designing a system given a general set of specifications.</p>
					<p>You'll get:</P>
					<ul>
						<li>A hands-on understanding of a set of techniques that you can use to develop your own OO projects</li>
						<li>A simulation exercise of the full development process described below</li>
					</ul>
					<h4>Sections</h4>
						<ul>
							<li>
								<p>The Mission Statement & Overview Description</p>
								<p>The inception phase should produce the key objectives of the project: what problem are you trying to solve, and/or what service are you providing? With some thought, this can be summarized in a couple of sentences, what I call the Mission Statement. The value of this exercise is that, if you get stuck in details, the mission statement can refocus you onto what you're really trying to do.</p>
								<p>The overview description expands on the mission statement by producing a number of paragraphs that more completely describe the behavior of the system, in prose. This becomes your first-cut analysis of the system, which will be used to help produce use cases (in the following section).</p>
								<p>Exercise: Your team will write and present the Mission Statement & Overview Description for the exercise project.</p>
							</li>
							<li>
								<p>Teasing out the Use Cases</p>
								<p>The concept and value of the Use Case is introduced. This tool allows you to describe the requirements and behavior of the system, and also to factor the system into features that can be implemented as part of the iterative development process.
								Use cases as a minimal system specification.
								</p>
								<p>Exercise: Your team will create and present use cases for the exercise project.
								</p>
								</li>
								<li>
									<p>Identifying the Critical Risks</p>
									<p>Product development is risk management, and the sooner you can discover and attack the critical risks, the sooner you'll know whether your project is feasible and what the real costs and schedule might be.
									</p>
									<p>Exercise: Your team will discover and attack the critical risks for the exercise project.
									</p>
								</li>
								<li>
									<p>Introduction to Extreme Programming and the Importance of Automatic Testing
									</p>
									<p>This section introduces the basic concepts of Extreme Programming (XP), and why it seems to work so well. How to start, using pair programming and integrated testing. The value behind creating the tests first, and how to build automated testing into your development process.
									</p>
									<p>Exercise: You will write unit tests that test a Java class
									</p>
								</li>
								<li>
									<p>Choosing the Initial Feature Set</p>
									<p>Use cases can be broken into sets of features that can be selected for implementation during particular iterations. The negotiation of the choice of features for each iteration is an essential part of the communication between the developers and the client, and this must be a choice made by the client based on information about costs provided them by the developers.
									</p>
									<p>Exercise: Your team factors the exercise project into features, and chooses the initial feature set to be implemented during the first iteration.
									</p>
								</li>
								<li>
									<p>Using CRC Cards to design Objects; Creating UML Class Diagrams</p>
									<p>The primary trap of design: seduction by low-level details. How to use the 3x5 card as a constant reminder to stick to the basics of your design. Fundamentals of UML, and UML as a communication tool. Expressing your design as a UML diagram.
									</p>
									<p>Exercise: Your team uses CRC cards to discover the objects in your project. One or more UML diagrams is created and presented.
									</p>
								</li>
								<li>
									<p>The Initial Implementation Plan</p>
									<p>Projects are built as a series of iterations. Once you've decided and designed the initial feature set, you need to get the core of the project working so that you can add features in future iterations. This also tests and proves the validity of your analysis and design, and gives valuable feedback to the customer about the state of the project, and whether it's going to accomplish the desired goals.
									</p>
									<p>Exercise: Develop a plan to implement the core functionality of the project, as decided in step 5 and designed in step 6.
									</p>
								</li>
							</ul>
						<h4>The Design Project</h4>
						<p>Our presentation of the design project will include:</p>
						<ul>
							<li>The system and interactions.</li>
							<li>Common problems and the patterns that may help in solving them.</li>
							<li>Portability constraints and patterns to help solve them.</li>
							<li>The breadth of design alternatives and how not to be overwhelmed by them.</li>
						</ul>
						<p>At the end of the week, each team will present their approach to the solution. We will ask questions and converse about the solution choices and possible alternative approaches. This will not be about “right and wrong” solutions, but instead about examining decisions made based on real or imagined constraints.</p>
						<p>The “deliverables” for each project are:</p>
						<ul>
							<li>Use cases: user stories in the parlance of Extreme Programming (XP)</li>
							<li>The plan:
								<ul><li>Use cases implemented in the initial iteration and second iteraton</li>
								<li>Critical components that require special/up front investigation</li></ul>
							</li>
							<li>The design:
								<ul>
									<li>UML diagrams</li>
									<li>Points of flexibility (where you see change happening)</li>
									<li>Design patterns applied to facilitate those changes</li>
								</ul>
							</li>
						</ul>
						<p>A strong emphasis will be placed on practicality and in applying the Extreme Programming (XP) principles of:</p>
						<ul>
							<li>Do the simplest thing that could possibly work</li>
							<li>You’re not going to need it</li>
						</ul>
					  </div><!--Design Ends-->
					  
					  <div id="designObject">
						<h3>Designing Objects</h3>
						<p>An important part of good object-oriented design is well-designed objects. The portion of the seminar, which is called the Object Design Workshop, focuses on guidelines and idioms that will help you create well-designed objects. Each guideline and idiom will be explained and justified, and then discussed by the attendees. This discussion is an integral part of the workshop, aimed at facilitating a conversation about design among peers that can help everyone to learn from each other’s experiences and perspectives. At the end of the Object Design Workshop, you will walk away with a specfic set of practical guidelines and concrete idioms that you can draw upon in your future object designs.</p>
						<p>The Object Design Workshop also includes a hands-on design project. Periodically, the attendees of the workshop will break up into small groups, each of which is assigned an API design project. Each group will document their design with UML and/or javadoc HTML pages, and present their design to the rest of the class, who will discuss it. The point of the design reviews is the same as the discussions — to draw out the experience and perspectives of the entire group, and enable everyone to learn from each other.</p>
						<p>The Object Design Workshop focuses heavily on designing with Java. Although many of the guidelines are applicable to any object-oriented language, all examples are shown in Java. Most of the idioms are specific to Java. In addition, the end result of each API design project will be a Java package.</p>
						<p>Here’s a list of the guidelines and idioms that will be covered during the Object Design Workshop: (Each title is linked to an online copy of the lecture handout.):</p>
						<h4>Designing with Objects</h4>
						<ul>
							<li>Understand the importance of the object.</li>
							<li>See objects as bundles of services, not bundles of data.</li>
							<li>Idiom: The State Machine.</li>
							<li>Idiom: The Actor.</li>
							<li>Idiom: The Messenger.</li>
							<li>Idiom: The Immutable.</li>
							<li>Separate interface from implementation.</li>
							<li>Minimize the number of methods in object interfaces.</li>
							<li>Simplify the semantic contract of object interfaces.</li>
							<li>Idiom: The Event Generator.</li>
						</ul>
						<h4>Designing with Composition, Inheritance, and Interfaces</h4>
						<ul>
							<li>Use classes to say “What objects are.”</li>
							<li>Use class extension to model IS-A-KIND-OF relationships.</li>
							<li>Use composition to enlist the help of other objects.</li>
							<li>Understand the difference between inheritance and composition.</li>
							<li>Understand the significance of the interface.</li>
							<li>Use interfaces to say “What objects can do,” or occasionally, “What can be done to an object.”</li>
							<li>Use interface extension to model INCLUDES-A relationships.</li>
						</ul>
						<h4>Designing with Types</h4>
						<ul>
							<li>Make the types of your method parameters and return values as precise as possible.</li>
							<li>Prefer dynamic binding to instanceof and downcasting.</li>
							<li>Make sure subtypes fulfill the semantic contract of their supertypes.</li>
							<li>Use instanceof and downcasting to ask “Can you do something for me?”</li>
							<li>Avoid optional clauses in semantic contracts.</li>
							<li>Prefer compile-time type information to run-time class information.</li>
						</ul>
						<h4>Guideline Grab Bag</h4>
						<ul>
							<li>Throw exceptions on abnormal conditions.</li>
							<li>Use a checked exception to get the attention of clients.</li>
							<li>Throw a different exception type for each abnormal condition.</li>
							<li>Idiom: The Thread-Safe Object.</li>
							<li>Idiom: The Hygienic Object.</li>
							<li>Idiom: The Canonical Object.</li>
						</ul>
					  </div>
					  
					  <div id="prerequisites">
						<h3>Prerequisites</h3>
						<p>A high degree of comfort with object-oriented terminology. Implementation experience with Java.
						</p>
						<p>Thinking in Java, by Bruce Eckel or Bruce Eckel’s Hands-On Java CD
						</p>

					  </div>
					  
					  <div id="recommend">
						<h3>Recommended Reading (before the seminar)</h3>
						<p>Interface Design: Best Practices in Object-Oriented API Design in Java, by Bill Venners (free download)
						</p>
						<p>Buy and read the following books, and bring them to the seminar:
						<ul>
							<li>Extreme Programming Explained (Read Chapters 1-5)</li>
							<li>UML Distilled (Read Chapters 1 - 5)</li>
						</ul>
						</p>

					  </div>
					  <div id="sample">
						<h3>Sample Clip: Models</h3>
						<iframe width="420" height="315" src="//www.youtube.com/embed/GdgHiex3hNA?rel=0" frameborder="0" allowfullscreen></iframe>
						<iframe width="420" height="315" src="//www.youtube.com/embed/KvbEIuUdLZ0?rel=0" frameborder="0" allowfullscreen></iframe>
						<iframe width="420" height="315" src="//www.youtube.com/embed/bGIBZQy8JhE?rel=0" frameborder="0" allowfullscreen></iframe>
					  </div>
					 
					  <div id="order">
						<h3>Ordering</h3>
						<p>We accept Visa, Mastercard, American Express, Discover, eCheck, Paypal</p>
						<table class='table table-striped'>
						<tr class='info'>
							<td>Shipping Destination</td>
							<td>DVD Set</td>
							<td>CA Sales Tax</td>
							<td>Priority Mail</td>
							<td>Total</td>
							<td>Pruchase</td>
						</tr>
						<tr>
							<td>California</td>
							<td>$500.00</td>
							<td>$43.75</td>
							<td>$12.00</td>
							<td>$555.75</td>
							<td><a href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=o1egLwlvkIRHn1SG-Tsk3cSzch-LKp5H_OZK7T5KeOiSRiWNjruxCOSLvsa&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><span class='glyphicon glyphicon-shopping-cart'></span></a></td>
						</tr>
						<tr>
							<td>Rest of the US</td>
							<td>$500.00</td>
							<td>0</td>
							<td>$12.00</td>
							<td>$512.00</td>
							<td><a href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=xMC_cxqeNi3HjyR2fbbwjJPWm5cbeGw38l0i0Ec0P7cpimeDCgjfS7Ri9Ky&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><span class='glyphicon glyphicon-shopping-cart'></span></a></td>
						</tr>
						
						<tr>
							<td>Outside of US</td>
							<td>$500.00</td>
							<td>0</td>
							<td>$20.00</td>
							<td>$520.00</td>
							<td><a href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=gl-Or7SmKSGjgXSp1Ln6-TZIDU0KnVqE1t9U7bswLmioIHXjuUJLU-IEm6O&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><span class='glyphicon glyphicon-shopping-cart'></span></a></td>
						</tr>
					  </table>
					  </div>


			</div><!--eSeminars Ends-->
			</div>
		</div>
<!--Content Ends-->
<div style="position:fixed; right:10px; bottom:45px;"><a href="#seminar-header-left"><img src="images/totop.png">Back to top</a></div>
<!--Footer-->
		<div id="footer">			
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>	
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->
</body>
</html>