<!DOCTYPE html>
<html>
<head>
</head>
<body>

		<?php
			$q=$_POST['request'];
			$result="<div class='bookcplus'>";

			if($q=="1"){
				$result.="<p class='bookflex-header'>Books by Bruce Eckel</p>";
			$result.="<div>
						<ul class='list-group list-unstyled'>
							<li><a href='#otherone' class='list-group-item'>Thinking in Java</a></li>
							<li><a href='#othercplus' class='list-group-item'>Thinking in C++</a></li>
							<li><a href='#otherinsideout' class='list-group-item'>C++ Inside & Out</a></li>
							<li><a href='#otherblack' class='list-group-item'>Black Belt C++, The Master's Collection</a></li>
							<li><a href='#otherusing' class='list-group-item'>Using C++</a></li>
							<li><a href='#othercomputer' class='list-group-item'>Computer Interfacing with Pascal & C</a></li>
							<li><a href='#othervideo' class='list-group-item'>Video</a>
							</li>
						</ul>
					  </div>";
			
			}
			$result.="<div id='otherone'>
						<h3>Thinking in Java</h3>
						<p>This is the Thinking in C++ approach applied to the Java language, except that the book doesn't expect you to know C or C++. In fact, even if you've only programmed in macro languages you should be able to tackle Java with this book.

						The primary emphasis is on the understanding of the language fundamentals, which are introduced a step at a time using small, simple examples. You're taught one feature at a time, and only when you understand the programming language are the abstract window toolkit and applets introduced.
						</p>
					  </div>";
			$result.="<div id='othercplus'>
						<h3>Thinking in C++</h3>
						<p>This book won the Software Development Magazine Jolt Award for best book published in 1995. Downloadable and printed books available here). You can't just look at C++ as a collection of features; some of the features make no sense in isolation. You can only use the sum of the parts if you are thinking about design, not simply coding. And to understand C++ in this way, you must understand the problems with C and with programming in general. This book discusses programming problems, why they are problems, and the approach C++ has taken to solve such problems. Thus, the set of features I explain in each chapter will be based on the way I see a particular type of problem being solved with the language. In this way I hope to move you, a little at a time, from understanding C (the book assumes you already program in C) to the point where the C++ mindset becomes your native tongue. My goals in this book are to:
						<ul>
							<li>Present the material a simple step at a time, so the reader can easily digest each concept before moving on.</li>
							<li>Use examples that are as simple and short as possible.</li>
							<li>Carefully sequence the presentation of features so that you aren't seeing something you haven't been exposed to. Of course, this isn't always possible; in those situations, a brief introductory description will be given.</li>
							<li>Give you what I think is important for you to understand about the language, rather than everything I know. I believe there is an \"information importance hierarchy,\" and there are some facts that 95% of programmers will never need to know, but would just confuse people and add to their perception of the complexity of the language.</li>
							<li>Keep each section focused enough so the lecture time - and the time between exercise periods - is small. Not only does this keep the audience' minds more active and involved during a hands-on seminar, but it gives the reader a greater sense of accomplishment.</li>
							<li>Provide the reader with a solid foundation so they can understand the issues well enough to move on to more difficult coursework and books.</li>
						</ul>
						</p>
					  </div>";
			$result.="<div id='otherinsideout'>
						<h3>C++ Inside & Out</h3>
						<p>Although C++ is easily taught to C programmers, the audience of this book is intended to be simply those who have programmed in another language. The closer your language is to C, the easier time you'll have; for example, a Pascal programmer will have an easy transition. However, it should also be possible for a Fortran (or even BASIC, my own first language) programmer to learn C++ from this book. The ANSI C language (supported by virtually all commercial compilers) is taught along with C++ in the early parts of the book and as the book progresses. Elements which are part of ANSI C are clearly specified, and any incompatibilities are shown.<br>
						<br>
						From the success of the first edition of this book (Using C++, 1989) and the comments I've gotten from readers, I think I took the right path. That is, C++ cannot effectively be treated as just an extension to C. You cannot take a C book and add a couple of chapters on classes and inheritance and have a C++ book. C++ is a different language.
						<br><br>
						This may seem confusing at first, because C++ is indeed a superset of C, and a C programmer can begin using a C compiler with virtually no effort. Much of the value of C++ to C programmers, at least initially, is that C++ is pickier and will find numerous errors that a C compiler allows (for this reason, a C++ compiler is even a better way to learn C!). However, C++ is an entirely different approach to programming. The beauty of it is that, as a procedural programmer, you'll have a much easier time adapting to the new features since the old features are familiar.<br><br>

						Note the C++ in this book is reasonably accurate, but it's circa 1992. You may want to consider following this book with the more recent Thinking in C++.
						</p>
					  </div>";
			$result.="<div id='otherblack'>
						<h3>Black Belt C++, The Master's Collection</h3>
						<p>Edited by Bruce Eckel. M&T Books 1994, ISBN: 1-55851-334-5. (This book is out of print, but sometimes copies can be located through its page on Amazon.com) (No source code for this book)<br><br>

						When I took over the C track for the Software Development Conference in 1991, it was clear (in my imagination only) that everyone wanted it to become the C++ track - why else would they want me to do it? Since SD had started as a C conference, there was some surprise when the change came about but it soon turned to pleasant surprise, since the track became the largest draw in the conference (sometimes eclipsed by its companion track on Windows programming, also heavily C++ oriented). In this book you'll see what makes the track so popular.<br><br>

						I believe that people (or rather, their companies) don't pay a lot of money to come to a conference to see things they can find in books. The pre-conference tutorials provide a grounding in the language, but for the conference proper I strive to have topics that fill the gaps in your knowledge using novel and well-crafted approaches. In addition, I feel that most of the talks should push you beyond the boundaries of what you normally think about in programming. I've personally found that if I exceed my boundaries, I learn techniques that give even the most mundane of tasks an elegant solution. When you come to a conference like SD, you shouldn't return just \"trained,\" but instead lifted to a whole new programming plane. While this book won't produce the same experience you get from attending the conference (especially the hallway conversations) it draws you into deeper thinking about the language just as the conference does.<br><br>
	
						The authors in this book are all experts in their subjects. They share my lack of tolerance for inaccuracy. But these authors are more than just technical experts: they're good presenters. I believe a good conference - and a good book - should be entertaining. One thing you'll notice is that the voice of each author is distinct: I've made a point to leave the personality in their writing. So you won't be bored in these pages.<br><br>

						Although I've met many of the people in this book through conferences, some I've come to know under more interesting circumstances. I worked with Tom Keffer for a year as a researcher while he was at the University of Washington School of Oceanography where both of us did our original C++ work. His company Rogue Wave (referring to an oceanographic phenomenon) continues to lure scientists and engineers away from FORTRAN by providing useful C++ class libraries. Scott Meyers and I have climbed Half Dome (not the face, the backside) in Yosemite together. I first met Dan Saks at the organizational meeting for the ANSI/ISO C++ committee in Washington DC where he volunteered to be secretary. At the time I thought it was insane, and I'm regularly amazed at his endurance in the position. Tim Gooch first appeared in one of my presentations, embarrassing me by asking very intelligent questions (that boomed from the back of the room, carried on his actor-trained voice) that I couldn't answer. Steven Sheetz appeared at an entrepreneur's conference for Midnight Engineering magazine, looking for guinea pigs for his doctoral dissertation. And as you'll discover through their writing, each of the authors in this book is unique.
						</p>
					  </div>";
			
			$result.="<div id='otherusing'>
						<h3>Using C++</h3>
						<p>(Osborne/McGraw-Hill 1989. ISBN: 0-07-881522-3). One of the first books out on C++. This is replaced by its second edition, the renamed C++ Inside & Out (described above). If you want a copy of this book you may be able to get it through its page on <a href='http://www.amazon.com'>Amazon.com</a>.
						</p>
					  </div>";
			
			$result.="<div id='othercomputer'>
						<h3>Computer Interfacing with Pascal & C</h3>
						<p>My very first book, self-published from my Hardware+Software columns in the now-defunct Micro Cornucopia Magazine. Some of the material is dated (early chapters use CP/M, switching about midway through the book to the IBM PC bus), but you can still get some pretty good ideas. The book was given a favorable review in Dr. Dobb's Journal by Jeff Duntemann. Quotes from Micro Cornucopia editors:<br></br>

						\"Quite simply the best microcomputer electronics book I've read. If you're at all interested in basic electronics applied to microcomputers then buy this book!\" Larry Fogg, Technical Editor, Micro Cornucopia Magazine. \"Bruce writes about his discoveries with an enthusiasm and clarity that have made him probably the best-read Micro C writer.\" From the foreword by David Thompson, Editor & Publisher, Micro Cornucopia Magazine.

						Chapters are:<br></br>				
						</p>
						<ul>
							<li>Connecting a Stepper Motor to your Computer</li>
							<li>Concise Computer Electronics</li>
							<li>A Simple Digital Oscilloscope</li>
							<li>A Scanning Temperature Measurement System</li>
							<li>Digital-to-Analog Conversion</li>
							<li>Controlling AC Power</li>
							<li>Tools for Quick System Construction</li>
							<li>Controlling Synchronous Serial Chips</li>
							<li>The Mysteries of RS-232</li>
							<li>A/D Conversion through the Printer Port</li>
							<li>Build a PC Adapter Card</li>
						</ul>
					  </div>";

			$result.="<div id='othervideo'>
						<h3>Videos</h3>
						<ul>
							<li>Borland's World of C++. An alternately serious and whimsical introduction to C++, hosted by David Intersimone. Bruce was responsible for the technical part of this tape (not the silly bits) but you won't see him on screen. Order directly from <a href='http://www.borland.com/'>Borland</a>.</li>
							<li>Borland's Beyond the World of C++. Here you'll get to spend a couple of hours with Bruce in a live presentation of more intermediate C++ material. A lot of editing was performed to tighten the presentation, so it's reasonably dense. Order directly from <a href='http://www.borland.com/'>Borland</a>.</li>
							<li>C++ Inside & Out: Note that the video promised in the book has never been made, so it's not available.</li>
						</ul>
					  </div>";

			$result.="</div>";
			echo $result;
		?>
</body>
</html>