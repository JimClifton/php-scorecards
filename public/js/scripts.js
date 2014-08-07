$(document).ready(function() {

	var divs = $(".tab-content > .row");
	for(var i = 0; i < divs.length; i+=9) {
		divs.slice(i, i+9).wrapAll("<div class='tab-pane fade'></div>");
	}

	$(".tab-content .tab-pane").first().addClass("active in").attr("id", "front");
	$(".tab-content .tab-pane").last().attr("id", "back");

	$(".nav-tabs a").click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})

});