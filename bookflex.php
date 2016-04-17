<!DOCTYPE html>

<html>
<head>
	
<style>
	
	

</style>
	
</head>
<body>
	<?php
		$q=$_POST['request'];
		$result="";
		

		if($q=='1'){
			$result.="<div>
						<div class='bookflextop'>
							<ul class='nav nav-tabs' role='tablist'>
								<li><a href='#introduction'>INTRODUCTION</a></li>
								<li><a href='#chapters'>CHAPTERS</a></li>
								<li><a href='#buy'>BUY THE BOOK</a></li>
								<li><a href='#comment'>Readers Comment</a></li>
							</ul>
						</div>
						<div id='introduction'>
							<p class='bookflex-header'>Introduction</p>
							<img src='images/bookflexback.jpg' style='float:left;margin:5px'></img>
							<p>Need to learn Flex, but find all those thick books intimidating? First Steps in Flex was designed to be small (only 140 pages!). Each chapter is only a few pages long, and contains just enough to get you comfortable with the topic. We don't want to bury you in details, but we provide plenty of resources when you need them; there's a site dedicated to further learning links.<br><br>
							The examples are all as short as we could make them. Just enough to give you the concept, and small enough for you to stare at. And to type in yourself -- we think that's such an important part of the learning experience that you can't download the source code! But the examples are small, and the interaction with the development environment is an essential part of the learning experience.<br><br>You're getting the combination of my experience in learning and teaching languages, and James as an expert in the language and a full-time Adobe evangelist for Flex. James and I use this book as part of our Flex Jams (live learning experiences), and that's where we've tested the ideas and concepts.First Steps in Flex was designed to be small (only 140 pages!). Each chapter is only a few pages long, and contains just enough to get you comfortable with the topic. We don't want to bury you in details, but we provide plenty of resources when you need them; there's a site dedicated to further learning links. <br><br>The examples are all as short as we could make them. Just enough to give you the concept, and small enough for you to stare at. And to type in yourself -- we think that's such an important part of the learning experience that you can't download the source code! But the examples are small, and the interaction with the development environment is an essential part of the learning experience.
							</p>
						</div>";
			$result.="<div id='chapters'>
						<p class='bookflex-header'>Chapters</p>
						<ul class='list-group'>
							<li class='list-group-item'>Introduction</li>
							<li class='list-group-item'>1. Hello, World</li>
							<li class='list-group-item'>2. Events</li>
							<li class='list-group-item'>3. ActionScript</li>
							<li class='list-group-item'>4. Desktop Applications</li>
							<li class='list-group-item'>5. Containers</li>
							<li class='list-group-item'>6. Components</li>
							<li class='list-group-item'>7. Data and Collections</li>
							<li class='list-group-item'>8. Item Renderers</li>
							<li class='list-group-item'>9. View States</li>
							<li class='list-group-item'>10. Effects</li>
							<li class='list-group-item'>11. Forms</li>
							<li class='list-group-item'>12. Formatters</li>
							<li class='list-group-item'>13. Drag&Drop</li>
							<li class='list-group-item'>14. PopUps</li>
							<li class='list-group-item'>15. Graphics</li>
							<li class='list-group-item'>16. Styling and Skinning</li>
							<li class='list-group-item'>17. Usability</li>
							<li class='list-group-item'>18. Flash Players APIs</li>
							<li class='list-group-item'>19. Data Visualization</li>
							<li class='list-group-item'>20. Web Services</li>
							<li class='list-group-item'>21. Remoteing and Messaging</li>
							<li class='list-group-item'>22. Architectual Patterns</li>
							<li class='list-group-item'>A:Development Tools</li>
							<li class='list-group-item'>B:Deployment</li>
						</ul>
					
						<a href='http://www.mindviewinc.com/Books/FirstStepsInFlex/FirstStepsInFlex.pdf'>
						<img src='images/view.png'/>	
						<FONT face=ºÚÌå color=#FF5511  size=3><B><I>View 1st&2nd Chapters Before Buying</I></B></FONT>
						</a>
					 </div>";
			$result.="<div id='buy'>
							<p class='bookflex-header'>Buy the Book</p>
							<div class='table-responsive'> 
							<table class='table table-striped'>
								<tr class='info'>
									<td>Shipping Destination</td>
									<td>Book</td>
									<td>CA Sales Tax</td>
									<td>Priority Mail</td>
									<td>Total</td>
									<td>Pruchase</td>
								</tr>
								<tr>
									<td>California</td>
									<td>$24</td>
									<td>$2.10</td>
									<td>$4.95</td>
									<td>$31.05</td>
									<td>
										<a	href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=8rNJP3954RbE6mG3hgoHnoBF69CK2YIV3eClyvPEKVtRzSHZgbViPfCuY1O&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><span class='glyphicon glyphicon-shopping-cart'></span></a>
									</td>
								</tr>
								<tr>
									<td>Rest of the US</td>
									<td>$24</td>
									<td>0</td>
									<td>$4.95</td>
									<td>$28.95</td>
									<td>
										<a href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=9UaLpdZP1On1voV6Bkgusg0F_hkX1BD9-fkqZTRBukhpaMEnVvvPgdSi9-G&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><span class='glyphicon glyphicon-shopping-cart'></span></a></td>
								</tr>
						
								<tr>
									<td>Outside of US</td>
									<td>$24</td>
									<td>0</td>
									<td>$13.95</td>
									<td>$37.95</td>
									<td>
										<a href='https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=lSanzQiJqf4f8vTYFWJm_4i9uNK3uZp_fowbi7o8vCmSXMmm1HIPwDrF6-y&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198a0586321b47f5ae7b54ee269d9200b8b'><span class='glyphicon glyphicon-shopping-cart'></span></a></td>
								</tr>
						 </table>
						 </div>
						 <p>
							* Contact<FONT face=Arial color=#FF5511  size=5><B><I>
							<a class='red' href='mailto:Wayne.MindView@gmail.com'>&nbsp Wayne at MindView &nbsp</a>
							</I></B></FONT>for larger orders.
							
						 </p>
					</div>
						";
					
			$result.="<div id='comment'>
							<p class='bookflex-header'>Readers Comment</p>
							
							<div>
							<form class='navbar-form navbar-right' role='form' action='addComment.php' method='post'>
								<div class='form-group'>
									<input type='text' placeholder='Comments' class='form-control' name='txtSentence' required/>
									<input type='text' placeholder='Name' class='form-control' name='txtName' required/>
								</div>
								<input type='submit' class='btn btn-warning' name='add' id='add' value='Add Comment'></input>
							</form>
							</div>

									

					  </div>";
			
		}


		
		$result.="</div>";
		echo $result;





?>

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
								$query="select*from commentflex";
								$rsQuotes = mysql_query($query);
								$num=1;
								while ($row = mysql_fetch_assoc($rsQuotes)) {
									$sentence = $row['sentence'];
									$name = $row['name'];			
									$strOutput .= $num.".  ".$sentence."<br>";
									$strOutput.="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
									$strOutput.="--".$name."<br><br>";
									$num++;
								}
								echo $strOutput;
								mysql_close($link);
							?>
</body>
</html>
