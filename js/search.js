
$(document).ready(function(){

	$(".thirdedition").click(function(event){
				  $.post("bookjava.php",
				 {
					 request:2
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
			$(".fourthedition").click(function(event){
				  $.post("bookjava.php",
				 {
					 request:3
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
	$(".otherbook").click(function(event){
				  $.post("bookother.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
	$(".bookc").click(function(event){
				  $.post("bookc.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});



});