//Modals
var modal1 = document.getElementById("modal1");
var modal2 = document.getElementById("modal2");
var modal3 = document.getElementById("modal3");
var modal4 = document.getElementById("modal4");
var modal5 = document.getElementById("modal5");
var modal6 = document.getElementById("modal6");

//Buttons
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");
var btn4 = document.getElementById("btn4");
var btn5 = document.getElementById("btn5");
var btn6 = document.getElementById("btn6");

//Close button
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];
var span5 = document.getElementsByClassName("close5")[0];
var span6 = document.getElementsByClassName("close6")[0];

var html = document.getElementById("home");

//Modal MMI Town
btn1.onclick = function () {
	modal1.style.display = "flex";
	html.style.overflow = "hidden";
};

span1.onclick = function () {
	modal1.style.display = "none";
	html.style.overflow = "auto";
};

//Modal Portrait Chinois
btn2.onclick = function () {
	modal2.style.display = "flex";
	html.style.overflow = "hidden";
};

span2.onclick = function () {
	modal2.style.display = "none";
	html.style.overflow = "auto";
};

//Modal Netflix UX Challenge
btn3.onclick = function () {
	modal3.style.display = "flex";
	html.style.overflow = "hidden";
};

span3.onclick = function () {
	modal3.style.display = "none";
	html.style.overflow = "auto";
};

//Modal Affiche d'exposition
btn4.onclick = function () {
	modal4.style.display = "flex";
	html.style.overflow = "hidden";
};

span4.onclick = function () {
	modal4.style.display = "none";
	html.style.overflow = "auto";
};

//Modal Le Penthinum
btn5.onclick = function () {
	modal5.style.display = "flex";
	html.style.overflow = "hidden";
};

span5.onclick = function () {
	modal5.style.display = "none";
	html.style.overflow = "auto";
};

//Modal Antso
btn6.onclick = function () {
	modal6.style.display = "flex";
	html.style.overflow = "hidden";
};

span6.onclick = function () {
	modal6.style.display = "none";
	html.style.overflow = "auto";
};

//Close Modal
window.onclick = function (event) {
	if (event.target == modal1) {
		modal1.style.display = "none";
	}
};
