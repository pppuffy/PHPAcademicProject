<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/javaedition.js"/>
	<script>
		

		function test(){
			var test=$(":checked").val();
			if(test=='barbers'){
				$('#buylink').attr('href','http://www.barnesandnoble.com');
			}else if(test=='amazon'){
				$('#buylink').attr('href','http://www.amazon.com');
			}else if(test=='ebay'){
				$('#buylink').attr('href','http://www.ebay.com');
			}else if(test=='soft'){
				$('#buylink').attr('href','http://www.booksamillion.com/');
			}
		}

		
	</script>
</head>
<body>
	<?php
	$q=$_POST['request'];
	$result="";
	if($q=="1"){
			$result.="<div id='bookjava3or4'>
						<ul>					
							<li><a class='thirdedition' href='#'>Thinking in Java 3rd Edition</a>
							</li>
							<li><a class='fourthedition' href='#'>Thinking in Java 4th Edition</a>
							</li>
						</ul>
					  </div>
						";
		}else if($q=="2"){
			$result.="<div class='bookflextop'>
							<ul class='nav nav-tabs' role='tablist'>
								<li><a href='#introduction2'>Introduction</a></li>
								<li><a href='#buybook'>Buy the Book</a></li>
								<li><a href='#electronicBook'>Electronic Book</a></li>
								<li><a href='#code'>Source Code</a></li>
								<li><a href='#solution'>Solution Guide</a></li>
							</ul>
						</div>";
			
			$result.="<div id='introduction2'>
						<p class='bookjava-header'>Introduction</p>
						<image src='images/bookjava3.jpg'/>
						<p>Thinking in Java, Third Edition is the much-anticipated revision of Bruce Eckel's best-selling introduction to Java. In Thinking in Java, 3/e, Bruce Eckel provides complete integration of JDK 1.4 technologies to his award winning 'Thinking in' presentation. Eckel introduces all the basics of objects as Java uses them, then walks carefully through the fundamental concepts underlying all Java programming -- including program flow, initialization and cleanup, implementation hiding, reusing classes, and polymorphism. Using extensive, to-the-point examples, he introduces exception handling, Java I/O, run-time type identification, and passing and returning objects. Eckel also provides an overview of the Key Technology of the Java2 Enterprise Edition platform (J2EE). Thinking in Java won the 1999 Software Development Magazine Productivity Award, the Java Developer's Journal Editor's Choice Award for best book of 1998, and the Editors' Choice of Java World in 2001!<p>
					  </div><br>";
			$result.="<div id='buybook'>
							<p class='bookjava-header'>Buy Book From</p>
							<ul class='list-unstyled list-inline'>
								<li><input type='radio' name='booklinks' value='amazon'><img src='images/amazon.png'/></input></li>
								<li><input type='radio' name='booklinks' value='barbers'><img src='images/barnes.png'/></input></li>
								<li><input type='radio' name='booklinks' value='ebay'><img src='images/ebay.png'/></input></li>
								<li><input type='radio' name='booklinks' value='soft'><img src='images/booksamillion.gif'/></input></li>
							 </ul>
							<a id='buylink' href='' onclick='test()' class='btn btn-success'>GO</a>
					  </div>";
			$result.="<div id='electronicBook'>
						<p class='bookjava-header'>Electronic Book Format</p>
						
						<p>I have done quite a bit of work to create a nice version of the book in HTML, including the diagrams, preservation of most of the formatting, nice fonts, and color syntax highlighting on the code files. I think you'll find it quite pleasant, especially the ease of use of the table of contents and index.<br>
						I'm using RTF2HTML (you can download a demo of that program) which does quite a good job of performing the conversion, making a table of contents and index, breaking up into files, etc. After that I run a Python program that I created to clean everything up and customize it to my liking.
						<p>
						<a href='sources/TIJ-3rd-edition4.0.zip'><img src='images/download.png'/>&nbsp Click to download</a>
					  </div>";
			$result.="<div id='code'>
						<p class='bookjava-header'>Source Code</p>
						
						<p>Steps for installing source code on your machine:<br>
						1. Go to the download site and download the file titled Thinking in Java, 3rd Edition by clicking on this link and requesting that your browser save the file.<br>
						2. Unzip the files into your directory. This will create a directory called 'aaa-TIJ3-distribution' and extract into it two more zip files:<br>
							--TIJ-3rd-edition-html.zip<br>
							--TIJ-3rd-edition-code.zip<br>
						Unzip the TIJ-3rd-edition-code.zip file into the directory of your choice, which we'll call code. This will automatically create all the necessary subdirectories and install the files into code.<br>
						3. Set your CLASSPATH variable to include '.' (the current directory) and the code directory.<br>
						4. Now you can use Sun's JDK to compile and run the files. You can also automatically compile all the files using ant (see below).<br>
						To compile some of the files, you will need to have additional Java libraries installed -- you are warned about this by messages emitted from the ant buildfile.<br>
						<span class='red'>Please note that these files were tested with the most recent version of Java. Many files will compile with earlier versions of Java, but some will not.<span></p>
						<a href='sources/TIJ-3rd-edition4.0.zip'><img src='images/download.png'/>&nbsp Click to download</a>
					  </div>";
			
			$result.="<div id='solution'>
						<p class='bookjava-header'>Solution</p>
						<ul>
							<li>The Thinking in Java 3rd Edition Annotated Solutions Guide is 20$ USD, payable with Visa, MasterCard, American Express, Discover, or PayPal, below.</li>
							<li>The 2nd edition Annotated Solutions Guide is also included.</li>
							<li>Please note that this guide is for the 2nd and 3rd editions of Thinking in Java only. When the 4th edition solutions are ready, they will be a separate purchase.</li>
							<li>Once your payment is made, you will be redirected and the solution guide will be immediately downloadable from your own custom URL. You will also receive a confirmation email containing this URL, so make sure you use the email address where you want this confirmation delivered. Please note that the guide is available in electronic form only.</li>
							<li>The zip file contains the PDF guide (like you see in the sample chapters) and the source code.</li>
						   </ul>
						 </p>
						 <a href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=tj4kEkVOuCY6d9oq9hHTqnf2N7W2Zh1Hj3pVHnZolmjQUqBN1kXf58dURsi&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><img src='images/buy.png'/>&nbspBuy Now</a>
					  </div>";
			
							
			$result.="</div>";	  
		}else if($q=="3"){
			$result.="<div class='bookflextop'>
							<ul class='nav nav-tabs' role='tablist'>
								<li><a href='#introduction3'>Introduction</a></li>
								<li><a href='#buybook3'>Buy the Book</a></li>
								<li><a href='#chapter3'>Chapters</a></li>
								<li><a href='#code3'>Source Code</a></li>
								<li><a href='#solution3'>Solution Guide</a></li>
							</ul>
						</div>";
			
			
			$result.="<div id='introduction3'>
						<p class='bookjava-header'>Introduction</p>
						<image src='images/book2.jpg'/>
						<p>This edition of the book benefits greatly from the improvements made to the Java language in what Sun originally called JDK 1.5, and then later changed to JDK5 or J2SE5, then finally they dropped the outdated \"2\" and changed it to Java SE5. Many of the Java SE5 language changes were designed to improve the experience of the programmer. As you shall see, the Java language designers did not completely succeed at this task, but in general they made large steps in the right direction.<br>
						One of the important goals of this edition is to completely absorb the improvements of Java SE5/6, and to introduce and use them throughout this book. This means that this edition takes the somewhat bold step of being \"Java SE5/6-only,\" and much of the code in the book will not compile with earlier versions of Java; the build system will complain and stop if you try. However, I think the benefits are worth the risk.<br>
						If you are somehow fettered to earlier versions of Java, I have covered the bases by providing free downloads of previous editions of this book via www.MindView.net. For various reasons, I have decided not to provide the current edition of the book in free electronic form, but only the prior editions.<p>
					  </div><br>";
			$result.="<div id='buybook3'>
						<p class='bookjava-header'>Buy Book From</p>
							<ul class='list-unstyled list-inline'>
								<li><input type='radio' name='booklinks' value='amazon'><img src='images/amazon.png'/></input></li>
								<li><input type='radio' name='booklinks' value='barbers'><img src='images/barnes.png'/></input></li>
								<li><input type='radio' name='booklinks' value='ebay'><img src='images/ebay.png'/></input></li>
								<li><input type='radio' name='booklinks' value='soft'><img src='images/booksamillion.gif'/></input></li>
							 </ul>
							<a id='buylink' href='' onclick='test()' class='btn btn-success'>GO</a>
						</div>";
			$result.="<div id='chapter3'>
						<p class='bookjava-header'>Chapters</p>
						<ul class='list-group'>
							<li  class='list-group-item'>1. Preface</li>
							<li  class='list-group-item'>2. Introduction</li>
							<li  class='list-group-item'>3. Introduction to Objects</li>
							<li  class='list-group-item'>4. Everything is an Object</li>
							<li  class='list-group-item'>5. Operators</li>
							<li  class='list-group-item'>6. Controlling Execution</li>
							<li  class='list-group-item'>7. Initialization & Cleanup</li>
							<li  class='list-group-item'>8. Access Control</li>
							<li  class='list-group-item'>9. Reusing Classes</li>
							<li  class='list-group-item'>10. Polymorphism</li>
							<li  class='list-group-item'>11. Interfaces</li>
							<li  class='list-group-item'>12. Inner Classes</li>
							<li  class='list-group-item'>13. Holding Your Objects</li>
							<li  class='list-group-item'>14. Error Handling With Exception</li>
							<li  class='list-group-item'>15. Strings</li>
							<li  class='list-group-item'>16. Type Information</li>
							<li  class='list-group-item'>17. Generics</li>
							<li  class='list-group-item'>18. Arrays</li>
							<li  class='list-group-item'>19. Containers in Depth</li>
							<li  class='list-group-item'>20. I/O</li>
							<li  class='list-group-item'>21. Enumerated Types</li>
							<li  class='list-group-item'>22. Annotations</li>
							<li  class='list-group-item'>23. Concurrency</li>
							<li  class='list-group-item'>24. Graphical User Interfaces</li>
							<li  class='list-group-item'>A: Supplements</li>
							<li  class='list-group-item'>B: Resources</li>
							<li  class='list-group-item'>Index</li>

						</ul>
					  </div>";
			$result.="<div id='code3'>
						<p class='bookjava-header'>Source Code<small>&nbsp Steps to use source code</small></p>
						
						<br>
						<ul>
							
							<li>Create a directory in which to install the code. For these instructions, we'll refer to this directory as C:\TIJ4\code.</li>
							<li>Using Winzip or some other zip utility, extract the zip file into the C:\TIJ4\code directory. When you're done, you should see several levels of directories, and in the C:\TIJ4\code directory, you'll see, among other things, subdirectories corresponding to the chapters in the book.</li>
							<li>Install the Java JDK SE5 or later from the download site at Sun. You'll also eventually want the documentation, which is available further down on that page. You may also choose to install Java SE6; the code will work with that as well. Note that the most reliable approach is to install to the default directories.</li>
							<li>Add the bin directory of your JDK to your path.</li>
							<li>Set the CLASSPATH in your computer's environment. For Windows machines, right-click on the \"My Computer\" icon and select \"Properties.\" Then select the \"Advanced\" tab and click the \"Environment Variables\" button at the bottom. Under \"System Variables,\" look to see if there's already a \"CLASSPATH\" variable. If there is, double click and add
							;.;..;C:\TIJ4\code;
							to the end of the current entry. If there is no \"CLASSPATH\" variable, click the \"New\" button and enter
							CLASSPATH
							In the \"Variable name\" box, and
							.;..;C:\TIJ4\code;
							In the \"Variable value\" box, then click \"OK\". To verify that your classpath has been set, start a command prompt (see below), then enter set and look for the CLASSPATH information in the output.</li>
							<li>Install the Ant build tool by following the instructions you will find in the Ant download. Note: Ant is not required in order to compile the examples in the book. It is used to automate the process, but you can also compile each example individually (once you have the CLASSPATH set, as described above) using the javac command-line compiler that was installed when you completed the previous step (note that you may have to set the Windows PATH to point to javac.exe). To compile a file called MyProgram.java, you type javac MyProgram.java.</li>
							<li>Start a command prompt in the C:\TIJ4\code directory. To do this in Windows, press the \"Start\" button, then select \"Run\" and type \"cmd\" and press \"OK.\" then type
								cd C:\TIJ4\code
							into the resulting command window.</li>
							<li>At this point you should be able to start a command prompt in C:\TIJ4\code and type ant build, and the build should successfully compile all the chapters up to the io chapter, where it will fail with an error message about a missing library. If you only need to work with chapters before io for now, this will suffice for awhile.</li>
							<li>You can also move into individual chapters and type ant (to compile and execute the code in that chapter) or ant build (to compile the code only).</li>
							<li>To build the entire code base, you'll need to install the additional libraries. These include:
							XOM
							Javassist
							The javaws.jar library, which comes with the standard Java installation, but which you must explicitly place in your classpath (described below).
							The Eclipse SWT library. Click on the most recent build number, then scroll down to \"SWT Binary and Source\" and select the file corresponding to your platform. Further details about finding the jar file are in the book under the heading \"Installing SWT.\"
							In general, you can install the above Jar files by placing them in the jre/lib/ext directory that is part of the \"Java Runtime\" that will be set up when you install the Java SE5 or Java SE6 development kit. You may have to hunt around for the JRE, but it can often be found under your \"Program Files\" directory, under \"Java.\"</li>
							<li>Alternatively, you can explicitly install each of the Jar files. To do this, you must add each one to your CLASSPATH, following the directions shown earlier on this page. However, you must also include the name of the Jar file in the CLASSPATH entry. For example, if you put the xom.jar file in a directory called C:\TIJ4\libraries\, then the associated CLASSPATH entry would be C:\TIJ4\libraries\xom.jar;.</li>
							<li>This code is designed to work outside of IDEs. Because packages are not introduced until later chapters, and some of the fancier IDEs like Eclipse require all code to be in packages, if you want to use the code inside those IDEs you will have to make some adjustments (however, see the Eclipse.py program in the download package for some help). Different IDEs have different requirements and it may be more trouble than it's worth while you're getting started; instead, you may want to begin with a more basic editor like JEdit.</li>
						</ul>
						
						<a href='sources/TIJ4-code.zip'><img src='images/download.png'/>&nbsp Download the source code zip file from this link.</a>
					  </div>";
			
			$result.="<div id='solution3'>
						<p class='bookjava-header'>Solution Guide</p>
						<p><ul>
							<li>The Thinking in Java 4th Edition Annotated Solutions Guide is 25$ USD, payable via GumRoad, below.</li>
							<li>Note: This is only the guide for the 4th edition. Solutions for the 2nd and 3rd editions are sold separately.</li>
							<li>Please download and install the Demo Sample (above) before purchasing the guide, to ensure it's what you want and that it works on your machine.</li>
							<li>Once your payment is made, the solution guide will be immediately downloadable as a zip file,which contains the PDF book and the source code including Ant build files.</li>
							<li>Please note that the guide is available in electronic form only.</li>
						   </ul>
						 </p>
						 <a href='https://gumroad.com/l/mvcKV'><img src='images/buy.png'/>&nbspBuy Now</a>
					  </div>";
		
		}

	
	echo $result;

	
	



?>
</body>
</html>


