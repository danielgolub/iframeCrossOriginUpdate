$(document).ready(function(){
	setTimeout(function() {
		$("body").animate({ "background-color":"#3d3d3d" }, 1200);
		$("header ul li a,#logo a,.col-md-8,.col-md-6,.col-md-4").animate({ "color":"#fff" }, 1000);
		$("#logo a span").animate({ "border-color":"#fff" }, 1000);
		$("#banner-content").popover({
			placement: "top",
			content: "iFrame same-origin policy bypass!! HAHAHA I won.",
		});
		$("#banner-content").popover("show");
	}, 1000);
});