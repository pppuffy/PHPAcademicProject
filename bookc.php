<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
			$result="<div>";

			if($q=="1"){
			$result.="
						<div class='bookflextop'>
							<ul class='nav nav-tabs' role='tablist'>
								<li><a href='#introductionc'>INTRODUCTION</a></li>
								<li><a href='#buyc'>BUY BOOK</a></li>
								<li><a href='#cdc'>CD</a></li>
								<li><a href='#strategyc'>Strategy</a></li>
								<li><a href='#electronicc'>Electronic Book</a></li>
								<li><a href='#codec'>Source Code</a></li>
								<li><a href='#solutionc'>Solution Guide</a></li>
							</ul>
						</div>
						<div id='introductionc'>
							<p class='bookflex-header'>Introduction</p>
							<img src='images/book3.jpg' style='float:left;margin:2px'></img>
							<p>
								In the first edition of Thinking in C++, Bruce Eckel synthesized years of C++ teaching and programming experience into a beautifully structured course in making the most of the language. It became an instant classic, winning the 1995 Software Development Jolt Cola Award for best book of the year. Now, Eckel has thoroughly rewritten Thinking in C++ to reflect the final ANSI/ISO C++ standard. Every page has been revisited and rethought, with many new examples and exercises -- all designed to help you understand C++ \"down to the bare metal,\" so you can solve virtually any problem. Eckel starts with a detailed look at objects, showing how C++ programs can be constructed from off-the-shelf object libraries. This edition includes a new, chapter-length overview of the C features that are used in C++ -- plus a new CD-ROM containing an outstanding C seminar that covers all the foundations developers need before they can truly take advantage of C++. Eckel then walks through initialization and cleanup; function overloading and default arguments; constants; inline functions; name control; references and the copy constructor; operator overloading; and more. There are chapters on dynamic object creation; inheritance and composition; polymorphism and virtual functions, and templates. (Bonus coverage of string, templates, and the Standard Template Library, can be found at Eckel's web site.) Every chapter contains many modular, to-the-point examples, plus exercises based on Eckel's extensive experience teaching C++ seminars. Put simply, Eckel has made an outstanding book on C++ even better.
							</p>
						</div>
						";
			
			$result.="<div id='buyc'>
							<p class='bookjava-header'>Buy Book From</p>
							<ul class='list-unstyled list-inline'>
								<li><input type='radio' name='booklinks' value='amazon'><img src='images/amazon.png'/></input></li>
								<li><input type='radio' name='booklinks' value='barbers'><img src='images/barnes.png'/></input></li>
								<li><input type='radio' name='booklinks' value='ebay'><img src='images/ebay.png'/></input></li>
								<li><input type='radio' name='booklinks' value='soft'><img src='images/booksamillion.gif'/></input></li>
							 </ul>
							<a id='buylink' href='' onclick='test()' class='btn btn-success'>GO</a>
					  </div>";
			$result.="<div id='cdc'>
						<p class='bookjava-header'>The Thinking in C CD ROM</p>
						<p>Chapter 3 is a fairly intense coverage of the C that's used in C++, but if you're just getting started with all this it may be a little too intense. To remedy this, the printed book contains a CD ROM training course that gently introduces you to the C syntax that you need to understand in order to take on C++ or Java. The CD is called Thinking in C: Foundations for Java & C++. Originally we sold this CD separately, but now it is only available bound into the printed versions of either Thinking in C++, 2nd edition or Thinking in Java, 2nd edition (the cost of the book including the CD is actually cheaper that the former cost of the CD alone). The CD was developed by MindView, Inc. and created by Chuck Allison. Chuck is a long-time member of the C++ Standards Committee, an editor on the C/C++ Users Journal, Author of the book C & C++ Code Capsules, and an experienced programmer and consultant. You can find out more about Chuck at http://www.freshsources.com or email him at cda@freshsources.com.
						If you buy a book with a cracked disk, email disc_exchange@prenhall.com and they will tell you how to get it replaced.</p>
						
					  </div>";
			$result.="<div id='strategyc'>
						<p class='bookjava-header'>Strategy</p>
						<p>Because of the success of posting Thinking in Java on this Web site, I decided to do the same thing with the second edition of Thinking in C++. For me, it was an invaluable process because of all the comments, corrections and contributions I got for the book. For the readers, it was valuable because they got information early, and because they could print out the book and use it as they needed it (people told me stories about carrying a chapter a time on the train, or the convenience of having the whole book on their notebook computer rather than lugging it around). It could also reach into countries where the exchange rate made it prohibitive to buy books (and so they otherwise wouldn't have been able to buy it). And in the end, it didn't seem to hurt sales, but rather help them, since most people wanted a hardcopy version and didn't want to print or carry the pages unbound.</p>
					  </div>";
			
			$result.="<div id='electronicc'>
						<p class='bookjava-header'>Electronic Book</p>
						
						<p>The electronic version of the book will continue to be free, even after it's published. You have permission to print a copy of the book for your own use.
						<br>
						If you like the book, please:<br>

						Recommend it to your friends, mention the URL on newsgroups, and submit it to your favorite search engine. This helps a lot, thanks!<br>


						Create links to http://www.BruceEckel.com from your web page, or mirror this page (see the mirror page).<br>


						Report any errors or problems you find (using only the form shown later on this page)<br>


						Consider buying a copy - it's probably cheaper than the toner cartridge you'll use up, and more convenient to use as well. However, if it works well enough for you as an electronic document, great! The book will continue to be freely available on this web site even after it is printed.
						 </p>
						 <a href='sources/TICPP-2nd-ed-Vol-one.zip'><img src='images/download.png'/>&nbsp Click to download</a>
					  </div>";
			$result.="<div id='codec'>
						<p class='bookjava-header'>Source Code</p>
						
						<p>When you unzip the file, you'll get a full directory tree of code and makefiles for that volume of the book. Type make from the root of this tree to, first, discover if you have a make utility properly installed, and second, to discover what your options are. The master makefile can drive makes for more than one type of compiler and operating system, and this is controlled on the make command-line.

						If you do not have a make, see here.

						When you unzip the program for Unix/Linux, I recommend that you get the zip program from http://www.cdrom.com/pub/infozip/ (which is automatically installed with RedHat Linux and probably others; it is on the book's CDROM in the Info-Zip subdirectory) and use the -a flag when unzipping. This flag automatically corrects the carriage-return/linefeed differences between dos and unix.

						Note that the code has only been compiled and tested under 32-bit Windows and Linux (with the latest gcc compiler). Although some code may compile under 16-bit DOS compilers, no support is provided for those compilers, since most of them will be old and won't contain more modern features in ISO C++.

						For example, if you want to compile everything for the gcc compiler, in the code root directory you say:

						make gcc

						This will descend into each subdirectory and invoke the makefile there. You can also call the makefile directly from within any subdirectory like this:

						make -f gcc.makefile

						to use the version of the makefile for the gcc compiler.

						Your compiler may not sucessfully compile all the code in a particular directory (this simply means your compiler doesn't support a particular ISO C++ feature that is demonstrated in the programs that won't compile). To tell make to continue even if a file fails to compile, use the -i flag (which means \"ignore errors\").
						 </p>
						<a href='sources/TICPP-2nd-ed-Vol-two.zip'><img src='images/download.png'/>&nbsp Click to download</a>
						
					  </div>";
			$result.="<div id='solutionc'>
						<p class='bookjava-header'>Solution Guide</p>
						<p><ul>
							<li>The Thinking in C++ 2nd Edition Volume 1 Annotated Solutions Guide is 12$ USD, payable with Visa, MasterCard, American Express, Discover, or PayPal, below.</li>
							<li>Once your payment is made, you will be redirected and the solution guide will be immediately downloadable from your own custom URL. You will also receive a confirmation email containing this URL, so make sure you use the email address where you want this confirmation delivered. Please note that the guide is available in electronic form only.</li>
							<li>The zip file contains the html guide (like you see in the sample chapter) and the source code. Please note that only a selection of the problems are solved; here is the list.</li>
						   </ul>
						 </p>
						 <a href='https://gumroad.com/l/OIPR'><img src='images/buy.png'/>&nbspBuy Now</a>
					  </div>";
				
			}

			$result.="</div>";
			echo $result;
		?>
</body>
</html>