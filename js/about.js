

$(document).ready(function(){

	$("#first").click(function(event){
				  $.post("aboutBruce.php",
				 {
					 request:1
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});
	
	$("#two").click(function(event){
				  $.post("aboutBruce.php",
				 {
					 request:2
				 },
				function(data,status){
				$("#right").html(data);
				});
				event.preventDefault();
			});

	

});