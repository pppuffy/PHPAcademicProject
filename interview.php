<?php
	
	

	$q=$_POST["request"];
	
		$interview1 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Web Frameworks Jam</I></B></FONT>";
		$interview1.="<p>July 2006, 50 minutes</p>";
		$interview1.="A discussion with the participants of the Web Frameworks Jam, at the end of the workshop. Participants include: Mike Shea, Angela Chen, Barry Hawkins, Bill Hannahs, Dianne Marsh, Jim White, Mike Levin, Ron Paro, and Bruce Eckel.<br><br>";
		$interview1.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview2 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Anders Hejlsberg</I></B></FONT>";
		$interview2.="<p>July 2003, 105 minutes</p>";
		$interview2.="Anders is not only the leader of the C# development project at Microsoft, he spent many years at Borland, where he was best known for his work creating the Delphi programming language and environment.<br><br>";
		$interview2.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview3 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Guido Van Rossum</I></B></FONT>";
		$interview3.="<p>Feb 2003, 71 minutes</p>";
		$interview3.="The inventor of the Python language. Now works at Google.<br><br>";
		$interview3.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview4 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Joshua Bloch</I></B></FONT>";
		$interview4.="<p>Jan 2003, 75 minutes</p>";
		$interview4.="Author of Effective Java and one of the main Java team members at Sun. He created the new collections library and is primarily responsible for the design of enum in Java SE5. He now works at Google.<br><br>";
		$interview4.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview5 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Martin Fowler</I></B></FONT>";
		$interview5.="<p>August 2003, 56 minutes</p>";
		$interview5.="His numerous books push forward the boundaries of thinking about software design. Works at ThoughtWorks.<br><br>";
		$interview5.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview6 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Tim Lister</I></B></FONT>";
		$interview6.="<p>Oct 2003, 77 minutes</p>";
		$interview6.="Coauthor of Peopleware, a must-read for everyone in the programming profession.<br><br>";
		$interview6.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview7 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Ron Jeffries</I></B></FONT>";
		$interview7.="<p>Sep 2002, 78 minutes</p>";
		$interview7.="One of the pioneers of the XP movement. Lead author of Extreme Programming Installed, and author of Extreme Programming Adventures in C#.<br><br>";
		$interview7.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview8 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Jim Highsmith</I></B></FONT>";
		$interview8.="<p>Oct 2003, 58 minutes</p>";
		$interview8.="A leader in the Agile community, and author of Agile Project Management, Agile Software Development Ecosystems, and Adaptive Software Development.<br><br>";
		$interview8.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview9 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Jim Fulton</I></B></FONT>";
		$interview9.="<p>Feb 2003, 64 minutes</p>";
		$interview9.="The driving force behind the Zope web development framework, arguably the largest and most complex Python codebase.<br><br>";
		$interview9.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";

		$interview10 = "<FONT face=黑体 color=#FF5511  size=5><B><I>Chuck Allison</I></B></FONT>";
		$interview10.="<p>Mar 2003, 113 minutes</p>";
		$interview10.="Coauthor of Thinking in C++, Volume 2 and a professor at Utah Valley State College. This is an interview and recording (with slides) of his keynote address to the 2004 ACCU Spring conference in Oxford, England, on code quality.<br><br>";
		$interview10.="<a href='http://www.mindviewinc.com/mediacast/interviews/getFile.php?id=WebFrameworksJam.mp3'><span class='glyphicon glyphicon-save'>&nbspDownload</span></a>";
		
		if ($q == '1'){	  
			echo $interview1;
		}else if($q == '2'){
			echo $interview2;
		}else if($q == '3'){
			echo $interview3;
		}else if($q == '4'){
			echo $interview4;
		}else if($q == '5'){
			echo $interview5;
		}else if($q == '6'){
			echo $interview6;
		}else if($q == '7'){
			echo $interview7;
		}else if($q == '8'){
			echo $interview8;
		}else if($q == '9'){
			echo $interview9;
		}else if($q == '10'){
			echo $interview10;
		}

?>