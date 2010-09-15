

$(document).ready(function() {

	
	$("#menu1 span").hover(function() {
		
			$("div.menu2").hide();
			$(this).addClass("selected");
			var id = $(this).attr('id');
			$("div." + id).toggle();

		}, function() {
			$(this).removeClass("selected");
			/*var id = $(this).attr('id');
			$("div." + id).toggle();*/
	});
	
	
	
	
});