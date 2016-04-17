
$(document).ready(function(){

	$(".first").click(function(event){
				  $.post("bookflex.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});

	$(".two").click(function(event){
				  $.post("bookjava.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
	
	$(".three").click(function(event){
				  $.post("bookc.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
	$(".four").click(function(event){
				  $.post("bookother.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
	
	



});