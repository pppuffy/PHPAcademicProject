
<html>
<head>
</head>
<body>
	<?php
		
		$q=$_POST['request'];
		$result="<div class='aboutInside'>";
		if($q=="1"){
			$result.="
						
						<div class='bookflextop'>
							<ul class='nav nav-tabs' role='tablist'>
								<li><a href='#veryshortBio'>Very Short Biography</a></li>
								<li><a href='#shortBio'>Short Biography</a></li>
								<li><a href='#longBio'>Long Biography</a></li>
								<li><a href='#photos'>Publicity Photos</a></li>
								<li><a href='#covers'>Covers</a></li>
								<li><a href='#requirements'>AV Requirements</a></li>
										
							</ul>
						</div>
						";
			 $result.="<div id='veryshortBio'>
						<h3>Very Short Bio</h3>
						<p>Bruce Eckel provides public and private training and consulting in programming languages and software system design. He has published over 150 articles and seven books. Details can be found at www.BruceEckel.com.</p>
					   </div>";
			 $result.="<div id='shortBio'>
						<h3>Short Biography</h3>
						<p>Bruce Eckel (www.BruceEckel.com) is the author (with Dianne Marsh) of Atomic Scala, Thinking in Java (Prentice-Hall, 1998, 2nd Edition, 2000, 3rd Edition, 2003, 4th Edition, 2006), the Hands-On Java eSeminar (available on the Web site), Thinking in C++ (PH 1995; 2nd edition 2000, Volume 2 with Chuck Allison, 2003), C++ Inside & Out (Osborne/McGraw-Hill 1993), and First Steps in Flex (with James Ward, 2008) among others. He's given hundreds of presentations throughout the world, published over 150 articles in numerous magazines, was a founding member of the ANSI/ISO C++ committee and speaks regularly at conferences. He was for many years the chair of both the C++ and Java tracks at the Software Development conference, is cofounder of the JavaPosse Roundup Conference and creator of the Scala Summit Conference. He provides public and private training and consulting in programming languages and software system design.</p>
					   </div>";
			  $result.="<div id='longBio'>
						<h3>Long Biography</h3>
						<p>Since 1986, Bruce Eckel (www.BruceEckel.com) has published over 150 computer articles and 7 books, four of which were on C++, and given hundreds of lectures and seminars throughout the world. He is the author (with Dianne Marsh) of Atomic Scala, Thinking in Java (Prentice-Hall 1998, 2nd edition 2000, 3rd Edition, 2003, 4th Edition, 2006, see www.BruceEckel.com), First Steps in Flex (with James Ward, 2008), the Hands-On Java eSeminar (available at www.BruceEckel.com), Thinking in C++ (Prentice-Hall, 1995; 2nd edition 2000, Volume 2 with Chuck Allison, 2003), C++ Inside & Out (Osborne /McGraw-Hill 1993; the 2nd edition of Using C++, Osborne/McGraw-Hill 1989) and was the editor of the anthology Black Belt C++ (M&T/Holt 1994). He was a founding member of the ANSI/ISO C++ committee. He speaks regularly at conferences and was for many years the chair of both the C++ and Java tracks at the Software Development conference, is cofounder of the JavaPosse Roundup Conference and creator of the Scala Summit Conference.</p>
						<p>His book Thinking in C++ was given the Software Development Jolt Award for best book published in 1995. Thinking in Java also received the Jolt Award, for best book published in 2002, as well as the Java World Reader's Choice Award and Java World Editor's Choice Award for best book, the Java Developer's Journal Editor's Choice Award for books, and the Software Development Productivity Award in 1999. Bruce has been called one of \"the industry's leading lights\" (Windows Tech Journal, September 1996).</p>
						<p>Bruce was the \"Java Alley\" columnist for Web Techniques magazine, the \"C++ Adviser\" columnist for Unix review, the C++ columnist and contributing editor for Embedded Systems Programming Magazine, a columnist and contributing writer for Micro Cornucopia for 4 years, the C++ Editor of the C Gazette for 2 1/2 years, and was a columnist and features editor of The C++ Report. His articles have also appeared in Software Development, Windows Tech Journal, The C++ Journal, PC Techniques, Dr. Dobb's Journal, and Midnight Engineering.</p>
						<p>He is the author of Borland's World of C++ and Beyond the World of C++ video training tapes (no longer available) and was the C++ speaker for Borland's World Tours.</p>
						<p>In 1997, Bruce founded and is currently the president of MindView, LLC., a Colorado-based corporation focused on providing outstanding training and consulting experiences in programming languages and software system design.</p>
						<p>Bruce has a BS in Applied Physics from UC Irvine and a Master of Computer Engineering from Cal Poly, San Luis Obispo. He started his career developing embedded systems hardware and software. He has worked extensively with C++ since 1987, with Java since 1995, with Python since 1997, and is currently studying Scala and other modern languages.</p>

					   </div>";
				$result.="<div id='photos'>
						<h3>Publicity Photos</h3>
						<div  style='float:left;margin-right:1px;'>
						<img src='images/photos1.png' width='220' height='324' ></img><br>
						<img src='images/photos2.png' width='220' height='165'></img>
						</div>
						<div style='float:left;margin-right:1px;'>
						<img src='images/photos4.png' width='392' height='490'></img>
						</div>
						<div>
							<img src='images/aboutbruce.jpg' width='392' height='490'></img>
							
						</div>

						
						
					   </div>";

				$result.="<div id='covers'>
						<h3>Covers</h3>
						<p>Two magazine covers from the past</p>
						<img src='images/covers1.jpg' width='260' height='320'></img><br><br>
						<img src='images/covers2.jpg' width='260' height='320'></img><br><br>					</div>";
				$result.="<div id='requirements'>
						<h3>AV Requirements</h3>
						<p>In general, any time I give a presentation I will be giving it from my notebook computer (a MacBook), so unless otherwise specified you should provide a computer projection system that will handle Super VGA output of 1024 x 768. If the room or audience warrants it, you should also provide a PA system and microphone. If I'm giving a straight presentation without exercises, then that should be enough; if there are exercises involved then everyone usually brings notebook computers with the appropriate tools loaded and pre-tested (unless you have a training room equipped with computers).</p>
						</div>";
		}else if($q=='2'){
			$result.="<h3>W-9 Tax ID Form</h3>
					  <p>Most companies want to set up an account before sending checks or purchase orders to us. To do this, they usually want a W9 form. If you click on the above link you'll get a PDF version of the filled-out form. All you need to do is print it and hand it to your purchasing/accounting department along with your check request. This usually makes them happy because they're reassured that you're thinking about them and trying to make their lives easier, so they will expedite your check request.</p>
					  <p>The federal tax ID number to use for MindView, Inc., is 91-1825155.</p>
					 ";
		}

		
		$result.="</div>";
		echo $result;
		
	?>
</body>
</html>