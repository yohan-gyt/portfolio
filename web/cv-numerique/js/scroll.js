"use strict";

$(document).ready(function () {
	//Modals
	var modal1 = document.getElementById("modal1");
	var modal2 = document.getElementById("modal2");
	var modal3 = document.getElementById("modal3");
	var modal4 = document.getElementById("modal4");
	var modal5 = document.getElementById("modal5");
	var modal6 = document.getElementById("modal6");
	var html = document.getElementById("home");

	$(".nav-link").on("click", function (event) {
		event.preventDefault();

		var target = $(this).attr("href");

		var scrollValue = $(target).offset().top;

		$("html, body").animate({ scrollTop: scrollValue }, 500);

		html.style.overflow = "auto";

		//Close Open Modals
		modal1.style.display = "none";
		modal2.style.display = "none";
		modal3.style.display = "none";
		modal4.style.display = "none";
		modal5.style.display = "none";
		modal6.style.display = "none";
	});
});
