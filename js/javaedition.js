
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



});