

$(document).ready(function() {

// 	var dvmenu = $("#menu1").next();
	
	$("#menu1 span").hover(function() {
		
			$("#menu1 span").each(function() { $(this).removeClass("selected"); } );
		
			$(this).addClass("selected");
			var dv = $(this).next().clone();
			$("#menu1").next().detach();
			$("#menu1").after(dv);
			dv.show();

		}, function() {
// 			$(this).removeClass("selected");
	});
	
	
	
	
});