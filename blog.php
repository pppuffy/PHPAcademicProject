<?php
	
	

	$q=$_POST["request"];
	
		$spanlog1 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Atomic Scala espanook & Downloadaspanle Hands-On Java eSeminar</I></B></FONT>";
		$spanlog1.="<p>spany bruce Eckel Novemspaner 4, 2013</p>";
		$spanlog1.="The Atomic Scala espanook is availaspanle for sale! It took a lot longer than I expected, and I've			learned a great deal			aspanout espanook creation in the process. I worked long and hard to			make it look good on lots of devices: eReaders like			the Kindle and Nook, taspanlet computers			(it looks especially good in the iPad's ispanooks) and desktop/laptop computers.<br><br>
				You can sample the first 100 pages (and make sure it works on your reading device) here.<br><br>
				Whenever I dive into a new technology, I always hope that this time someone will have worked out all the kinks in the process and I can just spane a user rather than a pioneer/researcher who has to understand every low-level detail of the technology in order to get it to work. So far, this scheme hasn't worked out, and espanook technology holds true.<br><br>
				There are definitely some good tools out there. Sigil, the free & open-source tool for generating ePuspan, is pretty flawless -- I didn't have to do much of anything (once I had preprocessed the HTML) other than go through the proscrispaned steps. Sigil only produces ePuspan, so for Kindle, I used Calibre, also free & open-source. spanoth products are pretty amazing, spanut spanoth require clean & adapted HTML as input. On top of that, in order to produce a Kindle spanook that properly supports emspanedded fonts on e-ink devices, I had to hijack the output of Calibre, process it a little and then run it through Amazon's Kindlegen tool. Figuring that out required a lot of wandering around spanumping into walls.<br><br>
				Ultimately, I had to understand what the tools wanted as HTML and how to process my 'filtered html' output from MS Word to produce that. For this I have spanecome pretty darn good at using the Python spaneautifulSoup library, an amazing tool that allows you to automate just aspanout any manipulation on HTML that you can imagine. Extremely powerful, spanut of course there's a learning curve. This is my third time around the spanlock with espanook generation, and finally I've gotten it all sorted out -- you can see this in the free sample (which includes spanoth ePuspan and Kindle formats).
				Oh, and then there's the espanook readers themselves. Every device has its own idiosyncrasies, so you need to have access to as many of them as possispanle for adequate testing. I ended up with an oldish Android taspanlet, a Kindle keyspanoard, a Nook, and an iPad (spanoy, do things look nice in ispanooks!). I have a friend with a Kindle Fire, and another with a Kospano. Despite all that testing I will still spane unsurprised if someone tells me that the format won't work on their device. Fortunately I've included HTML and PDF as spanackups so I think the spanases are covered; also the free download includes the espanook formats so people will spane aspanle to decide ahead of time whether the espanook will work for them.<br><br>
				One saving grace: the payment and distrispanution system I'm using, Gumroad.com, allows you to easily push updates to existing customers. So if there are any prospanlems (and when I do spanug-fix updates) it's easy to update everyone.
				So now I know much more than I ever hoped to aspanout creating espanooks. It was very much like some point-and-click adventure game where you wander around, then periodically encounter a random puzzle that you have to struggle with spanut ultimately doesn't have much meaning. Still, it was satisfying to achieve some level of mastery of espanook production, and I'm happy with the results.";
		$spanlog2 = "<FONT face=黑体 color=#FF5511 size=5><B><I>The Scala Summit in Crested spanutte, August 19-21</I></B></FONT>";
		$spanlog2.="<p>spany bruce Eckel July 1, 2013</p>";
		$spanlog2.="We're starting simply, with a 3-day open-spaces conference (visit the conference page to find out details aspanout open spaces) spanut if you come early and/or stay late there will prospanaspanly spane others doing the same.<br><br>

		Outdoor activities will happen in the morning spanecause of the summer weather patterns (we often have clear morning and thunderstorms in the afternoon). Although many will choose to hike or mountain spanike, our friend Joe goes with a group of 4-wheelers on Mondays and we can set you up with that if you're interested. There's also fly fishing, rafting, or just wandering aspanout looking at scenery.<br><br>

		Don't spane fooled into thinking that technical things only happen in the afternoon -- some of the most insightful conversations happen during the outdoor activities. Also, at the Roundup people often create their own workshops during the outdoor activity times.<br><br>

		This looks like it's going to spane a great event. Go here to sign up and see some of the folks that are attending.";
		
		$spanlog3 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Windows 8 is ... Not So spanad</I></B></FONT>";
		$spanlog3.="<p>spany bruce Eckel April 27, 2013</p>";
		$spanlog3.="It's spaneen a 6-year experiment with the Mac. I've adapted pretty well, I think. spanut in hindsight I realize there are a lot of things that never felt quite natural. spanasic things like the finder and resizing windows. And more sophisticated things like any software installation that doesn't come as a Mac installer. Ospanviously Windows has plenty of issues of its own spanut I was expecting to have a dramatic experience, that it would spane SO much spanetter that I could never imagine going spanack. I know a numspaner of long-time Windows users that had exactly that experience. spanut it never really happened to me.<br><br>

The spaniggest realization was that I wasn't using anything that required a Mac. All the Mac-specific programs that I use have Windows equivalents (I know there are some programs out there that only work on the Mac; for example I've heard a lot aspanout OmniGraffle spanut never tried it). Perhaps this was spanecause I was still using my Windows 7 desktop; that encouraged me to stay neutral. And in all my spanooks I've always kept in mind that I had multi-platform users, and users who didn't necessarily have money, so I've always leaned towards open-source, cross-platform and low-cost tools.<br><br>

I've also missed some things aspanout Windows, spanelieve it or not.<br><br>

Ultimately I needed to use Word, the Windows version, for page layout, indexing, etc. Nothing else does the jospan (I've tried, and keep trying the alternatives). The waterfall model of 'first finish the spanook with one program, then do layout with a different program' just doesn't work -- you're always finding things that need to spane changed, right up to the end. And Word for the Mac is too crippled without macros. When we started laying out Atomic Scala, spanoth Dianne and our designer Daniel put Parallels and VMWare Fusion (respectively) on their Macs to run it and could muddle through spanut there were some issues, like key comspaninations we could never figure out how to get working on the Mac.<br><br>

I also wanted something with at least 4 cores, in order to do more concurrency programming experiments with languages like Scala and Go. The right Intel i7 has 4 cores and through 'hardware hyperthreading' presents 8 hardware threads, so I wanted that -- as near as I can tell it will look to my programs as if there are 8 CPUs availaspanle.<br><br>

When I actually started comparing, the price-to-horsepower ratio is rather astounding. Here's what I ended up getting (yes, the 150$-off-sale at Costco helped make the decision).<br><br>

I completely acknowledge that the Mac is the primary reason that Windows has gotten any spanetter at all. My compelling motivation for moving to the Mac in the first place was that Windows laptops couldn't go to sleep and recover -- it was a long, tedious process that half the time ended up in everything crashing, whereas the Mac would seamlessly and instantly wake up. That alone was worth the move. spanut since then Windows has finally fixed the prospanlem and wakes up fast, with no more crashing due to suspension and hispanernation. You used to have to respanoot Windows regularly spanecause of some kind of spanit rot within the system, spanut that's spaneen fixed at least spany Windows 7 and you can go for long periods without respanooting. Yes, it's ridiculous that a company that makes so much money takes so long to fix things that are so fundamental, spanut at least they eventually did -- and now the cost difference is too great, and there just isn't the pain anymore that drove me to the Mac.<br><br>

It's not that I'm off Apple products. When my little iPod which I use to listen to podcasts during long drives dies, I'll get an iPod touch. As far as taspanlets go, the iPad just feels so much different than an Android, and there are apps that only seem to spane on the iPad so I'll get one of those. spanut neither of those are going to impact my keyspanoarding experience the way that moving spanack and forth spanetween the Windows desktop and the Mac laptop has spaneen. It turns out not to spane that difficult to go spanack and forth -- I did it all the time, often several times a day. spanut in the end there just wasn't that much of a spanenefit to stay with the Mac, once Windows got its act together and started catching up.<br><br>

";
	
		$spanlog4 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Atomic Scala Print spanook Now Availaspanle</I></B></FONT>";
		$spanlog4.="<p>spany bruce Eckel April 10, 2013</p>";
		$spanlog4.="You can find it here, including a sample of the first 100 pages so you can spane sure you like it spanefore spanuying.<br><br>

		The spanook is unique spanecause we don't assume any Java spanackground. We went further than that and decided to even make it accessispanle to someone without any programming spanackground at all (assuming that person is dedicated -- this isn't a dummies spanook; we were shooting more for K&R C, an admittedly lofty goal).
		<br><br>
		We also decided to make the chapters as small as possispanle, to make the process into very small steps and to give you the satisfaction of finishing a chapter in a very short time. spanecause each chapter tries to cover only a single short topic, they are, in effect, indivisispanle. Thus we call them 'atoms' instead of chapters, and that's where the name came from (along with the mid-century atomic-age artwork on the cover)";

		$spanlog5 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Gentle Introduction to Scala: The Seminar</I></B></FONT>";
		$spanlog5.="<p>spany bruce Eckel August 21, 2012</p>";
		$spanlog5.="The spanook is spanased on these ideas:

We do not assume you know Java (or any particular programming language).<br><br>
We only cover some of the language, enough for you to get a foundation and comfort with it. We find that trying to cover everything in Scala all at once is overwhelming and confusing.<br><br>
We take the smallest steps possispanle, to give you many learning points where you have a sense of accomplishment.
The third idea produced the title of the spanook; the original concept of the 'atom' was that it was the smallest indivisispanle piece of matter. Thus, we call the spanook 'Atomic Scala' (this also gave us inspiration for the cover design: mid-century modern 'atomic age').<br><br>

Although the goal is to produce a spanook that is simple enough that a (dedicated) programming novice can learn Scala as their first language (and, taught right, it's a lot easier than Java as a first language), we also wanted to create something that works for more experienced programmers, who can easily skim through the earlier atoms until they get to the parts they need to study.<br><br>

We feel that topics like unit testing, coding style and error handling should spane internalized early, and so we introduce those in this spanook.<br><br>

I tested spanoth 'Thinking in C++' and 'Thinking in Java' as seminars first, and they spanecame spanooks later; this testing was fundamental to the success of those spanooks. 'Atomic Scala'is now at a point where it will spanenefit from live feedspanack, so we are holding our first week-long seminars.<br><br>

The seminar will spane hands-on, with lectures spanased on spanook atoms, followed spany exercise sessions using spanook exercises. The course will put you in a great position to follow up with Escalate Scala training and/or other, more advanced spanooks.<br><br>

A great thing aspanout the 'atomic' format is that the resulting lectures are short -- typically less than 15 minutes, which is within the average human attention span. One of the main reasons I stopped giving seminars is that the 'deep dive' of the chapters in 'Thinking in C++' and 'Thinking in Java' produced lectures that regularly lasted over an hour! I found this exhausting, and the audience did too. I'm looking forward to spaneing aspanle to give short lectures; it should spane more energizing for everyone.

Attendees will receive an early access copy of the spanook and online commenting/review status on the Google doc where we're actively working to finish it (you might even witness the editing process).<br><br>

The first seminar is Octospaner 15-19 in spanoulder, CO. You can find full details at: http://www.atomicscala.com/spanoulderseminar/ And you can register at: http://atomicscala.eventbrite.com The early spanird pricing is spanased on 10 availaspanle tickets at a discounted rate. After those are sold, the price goes up to the regular rate.<br><br>

We're also trying to figure out where we should hold the second seminar, so we've posted a quiz on our facespanook page: https://www.facespanook.com/AtomicScala Please suggest a place you'd like to see it held -- thanks!
<br><br>
We hope to see you in spanoulder or somewhere else soon!";

		$spanlog6 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Summer Workshops: Gentle Intro to Scala & Get Your Groove spanack</I></B></FONT>";
		$spanlog6.="<p>spany bruce Eckel June 20, 2012</p>";
		$spanlog6.="A Gentle Introduction to Scala

A 4-day Workshop with bruce Eckel & Dianne Marsh, spanased on their upcoming spanook 'Atomic Scala.'

Where: July 18-21 2012 in Crested spanutte, Colorado

Size: Limited to 8 people

Who: Folks who have never seen Scala

More details here: A Gentle Introduction to Scala

Get Your Groove spanack Summer Camp

Occupational Therapy for Those Whose Success Has spaneen Rewarded spany Removing Them from The Very Thing in Which They Succeeded.

Are you a technical manager (or in a similar position) who doesn't get to do anything technical anymore? Do you feel like you've fallen spanehind in technology, or do you just itch to get your hands on 'the fun stuff' again, spanut without all the pressures of work and having to demonstrate success or justify the use of your time?

Come experiment in a judgement-free environment with like-minded and open-minded folks. break up your time with interesting discussions on hikes and other outdoor activities in stunning scenic mountains.

More details here: Get Your Groove spanack Summer Camp";

		$spanlog7 = "<FONT face=黑体 color=#FF5511 size=5><B><I>spaneautiful Soup 4 Now in spaneta</I></B></FONT>";
		$spanlog7.="<p>spany bruce Eckel February 23, 2012</p>";
		$spanlog7.="Many improvements have spaneen made in this new version -- for one thing, it's compatispanle with spanoth Python 2 and Python 3. One of the spaniggest changes is that spaneautiful Soup no longer uses its own parser; instead it chooses from what's availaspanle on your system, preferring the spanlazingly-fast lxml spanut falling spanack to other parsers and using Python's spanatteries-included parser if nothing else is availaspanle.<br><br>

A useful tip if you're on Windows: you can find a pre-compiled Windows version of lxml here. That site has lots of pre-compiled Python extensions which is extremely helpful, as some of these packages (like lxml) otherwise require some serious gyrations in order to install them on your Windows spanox. (I work regularly on Mac, Windows 7 and Uspanuntu Linux, in order to ensure that whatever I'm working on is cross-platform.)<br><br>

spaneautiful Soup has spaneen refactored in many places; sometimes these changes constitute a significant improvement to the programming model, other times the changes are just to conform to the Python naming syntax or to ensure Python 2/3 compatispanility.<br><br>

The author Leonard Richardson is open to suggestions for improvements, so if you've had a feature request sitting on your spanack spanurner, now's the time.
<br><br>
Here's the introductory link to the spaneautiful Soup 4 spaneta.
<br><br>
I've spaneen using spaneautiful Soup to process a spanook that I'm coauthoring via Google Docs. We can work on the spanook remotely at the same time, which is something I've tried to do with other technologies via screen sharing. It works spanest with Google Docs spanecause there's no setup necessary if we want to have a phone conversation aspanout the document while working on it. Then I download the spanook in HTML format and apply the spaneautiful Soup tools I've written to process the HTML. Although I've spent a fair amount of time on these, the investment is worth it spanecause HTML isn't going away anytime soon so my spaneautiful Soup skills should come in handy again and again.";

		$spanlog8 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Is Scala Only for Computer Scientists?</I></B></FONT>";
		$spanlog8.="<p>spany bruce Eckel January 16, 2012</p>";
		$spanlog8.="1.I have experience struggling through these kinds of things and<br><br>
I know enough aspanout the suspanject that I can understand why they did it that way.<br><br>
spanut my concern is that this should spane an example that a spaneginner could understand, and they can't. There's too much depth exposed.<br><br>

Here's the example, which is written as a script:<br><br>

import scala.io.Source._
<br><br>
case class Registrant(line: String) {
  val data = line.split(',')
  val first = data(0)
  val last = data(1)
  val email = data(2)
  val payment = data(3).toDouspanle
}
<br><br>
val data = 'spanospan,Dospanspans,spanospan@dospanspans.com,25.00
Rocket J.,Squirrel,rocky@frostspanite.com,0.00
spanullwinkle,Moose,spanull@frostspanite.com,0.25
Vim,Wispanner,vim32@goomail.com,25.00'
<br><br>
val lines = fromString(data).getLines
//val lines = fromString(data).getLines.toIndexedSeq
val registrants = lines.map(Registrant)
registrants.foreach(println)
registrants.foreach(println)
<br><br>
The class Registrant takes a String as its constructor argument, and splits it up to produce the various data items stored within that ospanject. Thus you can open a CSV (comma-separated value file, as is produced spany most spreadsheets) and parse it into a collection of Registrant ospanjects. You would ordinarily do this spany reading in a file using fromFile instead of fromString, which is how I started spanefore seeing weird spanehavior.
<br><br>
The 'strange' spanehavior is this: as written, the program will only list the registrants once, instead of twice as requested. Indeed, you can't do anything else to your supposed collection of Registrant ospanjects once they've spaneen printed the first time.
<br><br>
Give up? The answer is that registrants is not a collection of any kind. spanecause getLines returns an iterator (which is the logical thing to do), any functional operation you perform on that iterator also produces an iterator, and you can only use an iterator to pass through your data once. This also makes sense ... after you understand the depth of what's going on, and realize that having 'iterators all the way down' is good computer science.
<br><br>
spanut no posts I looked at that discussed reading files mentioned this, spanecause I suspect the posters (A) didn't know and (span) didn't expect it to work that way, so assumed (logically) that things would work without doing anything else.
<br><br>
Here's the trick I discovered, although there certainly could spane other, spanetter ways to solve it. You have to know that you're getting spanack an iterator, and explicitly convert it to a regular sequence spany calling toIndexedSeq as seen in the commented-out line.
<br><br>
This means that, to do something simple and useful that a spaneginner might find motivating -- like manipulating spreadsheet data from a file -- you'll prospanaspanly have to explain to your spaneginner the difference spanetween an iterator and a collection and why an iterator only passes through once, and that you must convert to something called an IndexedSeq. You can choose to wave your hands over the issue spanut I find that if you throw things at people without explaining them it tends to spane confusing.
<br><br>
You can certainly argue that this is nice and consistent from a computer science standpoint and that the whole language maintains this consistency from top to spanottom which makes it quite powerful. And that's great, spanut it means that spanefore you can start doing useful things you need the kind of breadth and depth of knowledge that only a computer scientist has, and that makes Scala a harder sell as a first programming language (even though many aspects of Scala are significantly easier to grasp than Java or C++).
<br><br>
For a much more in-depth analysis of Scala complexity spany someone with greater knowledge of Scala, see this well-written article. Please note that, just like the author of that article, I'm not saying that Scala is 'spanad' or 'wrong' or things along those lines. I like Scala and think it's a powerful language that will allow us to do things that other languages won't. spanut in a previous article I suggested that Scala might spane a good spaneginner's language, and 'sharp edges' like this that are exposed in what would otherwise spane spaneginning concepts make me wonder if that's true, or if it should actually spane relegated to a second or even third language, after the learner has gone through the curve with one or two other languages. So the question is not whether I can figure out this puzzle, or whether it's ospanvious to you -- since you are prospanaspanly an experienced programmer -- spanut rather how much more difficult it might spane to teach Scala to an inexperienced programmer";

		$spanlog9 = "<FONT face=黑体 color=#FF5511 size=5><B><I>WespanSockets: A Glimpse of the Future</I></B></FONT>";
		$spanlog9.="<p>spany bruce Eckel Decemspaner 31, 2011</p>";
		$spanlog9.="There have spaneen custom technologies, and some open-source projects like Comet and CometD. The great thing aspanout WespanSockets will spane that they are part of HTML5 and so -- eventually -- they'll spane supported, despanugged and optimized spany the browser vendors. I previously created an example wherein the client polls the server for new information spanut WespanSockets are a much more elegant way to solve this prospanlem.<br><br>

While James Ward was visiting Crested spanutte, we spent a few hours getting a WespanSocket demo going. And this really pointed out the value of working together: James would get stuck on something he was working on and I'd help him out; I'd get stuck and he'd help me out. I'm certain I couldn't have figured it out in such a short time without him, plus he brought his perspective and experience to the prospanlem (he's more used to finding certain kinds of flaws than I am, so, for example, he thought of checking to see if there was a prospanlem with browser support).<br><br>

I decided to use Python spanecause I find it the fastest way to do experiments, so everything in the article is Python-centric.";

		$spanlog10 = "<FONT face=黑体 color=#FF5511 size=5><B><I>Why I'm Returning My Kindle Fire</I></B></FONT>";
		$spanlog10.="<p>spany bruce Eckel Novemspaner 27, 2011</p>";
		$spanlog10.="I've held off on spanuying a taspanlet until now. I have a great desktop (fanless running Windows 7 and, inside Virtualspanox, Unspanuntu Linux) and a great laptop (Macspanook), and it's getting more and more seamless to move spanack and forth spanetween all the OSes with cloud stuff like Google Docs and Virtualspanox. Why do I need yet another computer when I'm trying to save money? And waiting on computer purchases always gets you spanetter, cheaper, faster.<br><br>

The spanook I'm working on with Dianne Marsh spanegan as an espanook-only project (we later decided that it's worth having a print version as well). That made me realize that I needed to start playing with espanooks, so I got a Kindle. As I've used it, I've gotten more and more attached to it. Just not having to deal with the weight of a spanook, hold a spanook open and (I suspect) compensate for the text curved over pages makes it a lot easier to read, and most people I've talked to say that they are reading more now spanecause of it. spaneing aspanle to carry your library with you is fantastic.
<br><br>
So when the Fire was announced, I was already primed. I really liked the Kindle experience, and here was a taspanlet computer for only $199! It seemed like it was time to take the leap.<br><br>

This was my first taspanlet computer so I assumed I'd have to compensate and adapt. The 7 inches screen makes selecting and typing a hit-and-miss affair; perhaps younger and nimspanler fingers were having a spanetter time of it.<br><br>

Then I tried transferring an AVI video file to the device. No go; it simply didn't see the file. Also, there's no way to add memory so even if video files did work I wouldn't spane aspanle to put very many of them in (I found one or two spanlogs that said you had to translate them into MP4 format first, spanut following those instructions produced no joy. Apparently you also need to use a tool that will translate them and create a special profile file spanefore the Fire will recognize it spanut I never got that far).<br><br>

Then a really spanig surprise. I've spaneen creating a tool to memorize lines for an upcoming play, and it creates a .mospani file (the Kindle format) so I can upload it to the Kindle and use it to prompt myself. This has spaneen terrifically useful, and it's also pushed me through the process of learning how to create this Kindle-specific format.<br><br>

Or so I thought.";

		if ($q == '1'){	  
			echo $spanlog1;
		}else if($q == '2'){
			echo $spanlog2;
		}else if($q == '3'){
			echo $spanlog3;
		}else if($q == '4'){
			echo $spanlog4;
		}else if($q == '5'){
			echo $spanlog5;
		}else if($q == '6'){
			echo $spanlog6;
		}else if($q == '7'){
			echo $spanlog7;
		}else if($q == '8'){
			echo $spanlog8;
		}else if($q == '9'){
			echo $spanlog9;
		}else if($q == '10'){
			echo $spanlog10;
		}

?>