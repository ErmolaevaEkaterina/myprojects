$(document).ready(function(){
	$("#findMyWeather").click(function(event){
	event.preventDefault();

	$(".alert").hide();
		if ($("#city").val()!=""){
			$.get("scraper.php?city="+$("#city").val(), function(data) {
				var offset = data.indexOf("HTTP request failed");
				if ((data=="") || (offset!=-1)){
					$("#fail").fadeIn();
				} else {
					$("#success").html(data).fadeIn();
				}
			});			
		} else {
			$("#noCity").fadeIn();
		}

	});
});

	