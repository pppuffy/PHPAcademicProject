<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" href="css/faq.css" type="text/css">
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
							<li class="active"><a href="faq.php">FAQ</a></li>
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
				<div id="faq-header-left">
					<a href="faq.php">
						<img src="images/faq3.png"/>
					</a>
				</div>
				<div id="faq-header-right">
					<p class='bookflex-header'>
					Frequent Asked Questions
						
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-lg-12">
				<div>
					
					<ul>
						<li><a href="#question1">I can't find the source code for your book XXX, or some part of the code</a></li>
						<li><a href="#question2">I bought Thinking in Java/Thinking in C++ and the CD is cracked. Can you replace it?</a></li>
						<li><a href="#question3">I bought the 2nd edition of Thinking in Java/Thinking in C++. When I took out the CD-Rom, the name on the CD-ROM is "Thinking is C" and it contains nothing about Java/C++. Shouldn't the CD be about C++ or Java?</a></li>
						<li><a href="#question4">I think it is unfair that you didn't include answers to the exercises in the book.</a></li>
						<li><a href="#question5">How do I find out more about makefiles?</a></li>
						<li><a href="#question6">What do you mean by "mentoring?"</a></li>
						<li><a href="#question7">How about a book on Delphi? (or insert your favorite language here)</a></li>
						<li><a href="#question8">I'm thinking of publishing/been approached by a publisher. Do you have any advice?</a></li>
						<li><a href="#question9">Where are the "Why I Love Python" slides from the keynote you gave at the Python conference?</a></li>
						<li><a href="#question10">How did you get started in programming?</a></li>
					</ul>
				</div>
				<hr>	
				<div id="question1">
					<h4>I can't find the source code for your book XXX, or some part of the code</h4>
					<p>The code is included with the HTML versions of downloads. The main download page for MindView is here.</p>
					<p>All the packages that begin with "com.sun.java" are part of the JDK that you must first download and install from java.sun.com. The JDK is what you use to build and execute Java programs - this is described in the early chapters of "Thinking in Java," so keep reading.</p>
					<p>The code packaged with the HTML downloads includes all the code from the respective book. Some people have difficulty finding things like the com.bruceeckel.util package. If this is your question, it's because you haven't read far enough in the book to understand how packages are structured as directories in Java. Once you unpack the code, look in the code's root directory: you'll see a subdirectory called com, and below that bruceeckel, and below that util, where the file will be found.</p>
				</div>
				<div id="question2">
					<h4>I bought Thinking in Java/Thinking in C++ and the CD is cracked. Can you replace it?</h4>
					<p>TThe book is published by Prentice Hall, who will replace the CDs. If you send an email to disc_exchange@prenhall.com they will tell you how to get a replacement.</p>
					<p>However, the essence of the CD (the reason I put it into the book) is now available as a download (in an improved delivery format over the CD version here. Also, you can download the source code and the electronic version of the book (which were also on the CD) here.</p>
				</div>
				<div id="question3">
					<h4>I bought the 2nd edition of Thinking in Java/Thinking in C++. When I took out the CD-Rom, the name on the CD-ROM is "Thinking is C" and it contains nothing about Java/C++. Shouldn't the CD be about C++ or Java?</h4>
					<p>We really did mean to put Thinking in C in those books. Look at the artwork on the CD, and you'll see it matches the cover of the respective book. Also see the back cover of the book, which specifically describes the Thinking in C CD. On page 19 of Thinking in Java, 2nd Edition and page 15 of Thinking in C++, 2nd Edition, Volume 1 you'll find more thorough descriptions of the CD.</p>
					<p>Both books were designed for people who understand the syntax of the C language. We found that many people came to the books and/or the seminars with the attitude that they didn't want to learn C, but rather C++ or Java, without knowing that the C language contains the fundamental syntax for both C++ and Java. Thus, they were unprepared for the book or seminar. The reason that the "Thinking in C" CD was created was to help these people gain just enough of the fundamentals of C so they could move on to the C++ or Java covered in the books or seminars.</p>
					<p>Thinking in C (foundations for Java & C++) is a seminar-on- CD, with approximately 8 hours of lectures and slides along with exercises, to bring you up to speed on C if you don't already understand the syntax well enough to move into Thinking in Java or Thinking in C++. When you go through it I think you'll realize that it's unlike most any CD you've seen packaged in the back of a book.</p>
					<p>The CD also includes the electronic versions of Thinking in Java, 2nd edition and Thinking in C++, 2nd edition, volume one, along with source code - look for TIJsource.zip and TIC2Vone-code.zip, respectively. Please note that most CDs packaged with books only contain the source code for the book. On this CD, you're getting the source code for both books as well as the electronic text for both books, and a seminar-on-CD, for effectively no added price for the book. If you still think this is a bad deal, I'm sorry. This is the only book that I know of that contains a seminar-on-CD.</p>
					<p>Originally the books had no CD, and when I decided to include the CD with the books I wanted to make sure that the publisher didn't increase the price for the inclusion of the CD. Thus, you're effectively getting this seminar-on-CD for free when you purchase the book. In addition, you get a preview of what our other seminars-on-CD are like, in case you like the way that they work and want to purchase another one (currently, Hands-On Java is the only CD available, but we're working on others).</p>
					<p>Originally, MindView sold Thinking in C as a separate product (a seminar-on-CD - there has never been a "Thinking in C" book), but in the 2nd edition, the only way to get the CD was to purchase a book (we were selling the CD for more than what it now costs to get the book and the CD together, so this is a distinctly better deal).</p>
					<p>Note: In subsequent editions of the book, the CD was taken out of the book and put online.
					</p>
					
				</div>
				<div id="question4">
					<h4>I think it is unfair that you didn't include answers to the exercises in the book.</h4>
					<p>After spending money on a book, I would expect to have the answers (which to me make the book complete) included. Second, the fact that I can't buy the answers on your website is really frustrating. I don't imagine it would take very long for you or one of your cohorts to put the answers together.</p>
					<p>I've gotten a couple of comments like this, and I felt it would be worth some research to address the issue.</p>
					<p>First, you're right about the delay. It took me almost 1.5 years to get started on the solution guide (for the 2nd edition; the third also ended up being a very big job), and that's far too long. It would have been much better to have had it available when the book came out, but that would have delayed the book (background sounds of publishers gnashing teeth). Since then, I seem to have a plate full and have also been procrastinating because it looked like a big job.</p>
					<p>I certainly apologize for the delay. I've only started to get good at coming up with exercises in the last couple of years. Inventing good exercises is hard enough, but now I'm learning about solutions. I'm sure I'll get better at this with experience.</p>
					<p>To address the last sentence of the question, it has turned out to be a very big job, about 2.5 months of work. It's like writing another, albeit smaller, book. In print, it looks like it would end up being over 400 pages. So no, it's not a trivial project.</p>
					<p>The number of pages explains why it isn't part of the book. As it stands, I was trying to cut the book down and the publisher was squealing about the size. Adding over 400 pages wouldn't have flown -- the book would have been enormous.</p>
					<p>So one option would be to publish a separate solution guide, which would almost certainly cost you more than what it will cost via the web, and I suspect you wouldn't prefer that. I think the electronic version is the best approach; if there's a big enough demand for a separate printed book I'll consider that, but right now I don't think it would be justified.</p>
					<p>There's often an illusion about how much an author gets for the book that you buy. For a US author, if the book is sold in the US, roughly half the cover price goes to the bookseller, the other half goes to the publisher. Of the amount that goes to the publisher, roughly 10% of that goes to the author -- if the book ever pays back its advance, which the great majority of books don't. If the book is published outside of the US, then the foreign rights have typically been sold for a flat fee (usually not a very impressive amount, since foreign publishing is very risky), and there's no connection with the amount you pay and any royalties paid to the author. I point out all of this so that you can be aware of the incentives (or lack thereof) involved in creating and maintaining a separate solution guide. As it turns out, it has taken a long time for the time and money I've put into the solution guide to begin to pay for itself.</p>
					<p>I agree, everything should be available to everyone for free, like in that "Star Trek Next Generation" episode where they go back in time to San Francsico and see Guinan and Data's head and bring Mark Twain onto the ship and explain to him how they don't need money anymore and that everyone just tries to fulfill their potential. Someday that may happen, but in the meantime I feel pretty good about giving away more than the majority of computer book authors and publishers. I hear from people all over the world in countries where it's too expensive to buy books, about how they are able to learn from the free electronic books whereas otherwise they wouldn't be able to. I work very hard to produce quality work, and to go the extra mile to provide explanations, and supplements, yes, and exercises that you don't get other places, and it is wearying to hear "but you should give me this for free, too!" The fact that you don't have to buy the book at all seems to me to be a nice gift, so if you must have it in convenient print form because "you could never read it on screen," then remember that what you're primarily paying for is exactly that convenience, and the paper, printing, and distribution that is required for it.</p>
					<p>Finally, I decided to look and see how many books (1) Even had exercises and (2) Included solutions. My Java shelf includes a lot of books, and I've gotten rid of the ones that aren't so good, so I think I have pretty good coverage of the better Java books. I found only several that even had exercises. Then I decided to look back at the C++ books. The most popular two C++ books were Bjarne Stroustrup's The C++ Programming Language and Stan Lippman's C++ Primer. Both had exercises (these are the only ones I found that did, besides my own C++ book), but neither had solutions. In fact, both had separate solution guide books written by separate authors (supporting my assertion that it's a big job), each costing 30$.</p>
					<p>So according to my bookshelf, it doesn't appear to be so unusual that solutions are a separate item from the book. What does appear unusual is to have exercises at all. So if you still feel it's unfair to have a book without exercise solutions, then look at the alternative, which you'll find in most books: no exercises at all.</p>
				</div>
				<div id="question5">
					<h4>How do I find out more about makefiles?</h4>
					<p>I use Gnu make for many projects, both internal and those published on the web.</p>
					<p>You can download and install Gnu make from Simtel for DOS/Windows. This comes with fairly extensive documentation. Be certain to investigate make_15.html which is the quick reference.</p>
					<p>You can find general information about make and places to download it for other machines at the Gnu make page.</p>
					<p>Note that Linux automatically installs Gnu make.</p>
					<p>However, the easiest way to get make working under Windows is to install Cygwin. This is a free Unix shell that runs on Windows9x/NT/2000/XP, and it solves many problems you will encounter trying to build under the normal Windows command prompt.</p>
					<p>You can dowload Cygwin at www.cygwin.com. Make sure that you explicitly choose the addition of make; the last time I checked you didn't get it unless you explicitly select it from the list of options.</p>
					<p>Windows NT may require some fooling around in order to get Gnu make to run, but it should be possible to make it work (you may be able to find specific notes by searching the Internet; try Google).</p>
				</div>
				<div id="question6">
					<h4>What do you mean by "mentoring?"</h4>
					<p>Consulting guidance on a project - that is, a team is working on an actual project and the mentor comes on site periodically and helps "steer the boat," which includes reviews and walkthroughs of design, code, and/or process. You could think of it as "someone to watch over you."</p>
					
				</div>
				<div id="question7">
					<h4>How about a book on Delphi? (or insert your favorite language here)</h4>
					<p>I have a long history with Delphi. I remember being in my friend Zack Urlocker's office at Borland when he showed it to me for the first time. I told him that I liked the name, and that he should keep it (it was originally a code name for the project; I suspect many others told him they liked the name as well, but I like to think I had some influence...). Every once in awhile I would take a dive into it, and create the odd program. The summer of 2000, after the Borland conference, I sponsored Marco Cantu to give an advanced Delphi seminar. The best equivalent for a "Thinking in Delphi" is Marco's collection of books.</p>
					<p>Even though Pascal, and Turbo Pascal, were my first languages, I have had so much experience in C-ish languages that it's awfully difficult for me to go back to Pascal syntax. So if I did need to create a Windows-specific program and I couldn't use Python (my favorite language, which I use all the time) then I would probably use C++ Builder, since I am much more fluent in that syntax.</p>
					<p>And books, well. They're getting harder to do, and taking longer, so I get very careful about what I think I can do. I suspect it has to do with what I want from a book, which is based on all the feedback I get about the books I put up on the Web. I'm sure my process could be improved but in general I'm getting slower rather than faster at producing books (and of course I'm slowed down by all the other things I do - but somehow Martin Fowler is able to pull it off...).</p>
					<p>As far as a book on a specific language, I carefully consider the languages that are out there and which ones seem likely to become interesting enough to justify a book. Although there are many languages that have contributed to computing, many of them have had their shot at glory and didn't take. Typically, this means there was a big marketing push at some point, a lot of buzz for awhile (sometimes quite awhile, as in the case of SmallTalk), and then the language faded from the scene for one reason or another. Examples of this in the OO realm are Eiffel and Objective-C, both of which tried to be commercial languages and are, long after the fact, now available in free versions, but too late to really do anyone any good. (Python is different -- it's always been grassroots and has never had any big marketing push behind it, so it's more like Linux. Slow and steady increments). Yes, Squeak is the most interesting implementation of Smalltalk and there's a book or two out about it, but I still don't see Smalltalk making a big recovery. Ruby still looks to me like a language that was invented because you couldn't (rationally) use objects or references in Perl, so it has Perl-ish syntax, which I don't think is very helpful (someday I may learn it, but Python continues to be far more compelling to me). Long ago I used Lisp, but probably won't again. So no, I'm probably not going to write books on any of those languages except for Python. One of the important things about being a programmer is learning to make good use of your time, and choosing the right languages is an essential aspect of that.</p>
				</div>
				<div id="question8">
					<h4>I'm thinking of publishing/been approached by a publisher. Do you have any advice?</h4>
					<p>I could probably go on and on about this, but it turns out someone else already has. Scott Meyers has a pretty good description of the book writing process here. Also look at Philip Greenspun's comments.</p>
				</div>
				<div id="question9">
					<h4>Where are the "Why I Love Python" slides from the keynote you gave at the Python conference?</h4>
					<a href='sources/LovePython.zip'><img src='images/download.png'/>&nbsp Click to download</a>
				</div>
				<div id="question10">
					<h4>How did you get started in programming?</h4>
					<p><a href="https://docs.google.com/document/d/1EW5yZ7ogtFuqvb5_Y7ySK-TOGjh9kPrUMBYRu1Nb8dQ/preview">Here's a blog on that very subject.</a></p>
				</div>
			</div>
								


		</div>
		</div>
		<div style="position:fixed; right:10px; bottom:45px;"><a href="#faq-header-left"><img src="images/totop.png">Back to top</a></div>
<!--Content Ends-->

<!--Footer-->
		<div id="footer">			
				<p class="text-muted">&copy;2013 MindView LLC - All rights reserved</p>	
		</div>
<!--Footer Ends-->
	
	</div>
<!--Wrapper Ends-->
</body>
</html>