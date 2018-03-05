var modif = function () {

	var header = document.querySelector("header");
	var main = document.querySelector("main");
	var footer = document.querySelector("footer");
	var h3Cree = document.createTextNode("Fin du main");

	img.style.height = ("300px")
	header.style.backgroundColor = ("bisque")
	main.style.backgroundColor = ("#2aa")
	footer.style.backgroundColor = ("#aa4")





	h3Cree.appendChild(document.createTextNode("Fin du main"));

	document.body.appendChild(h3Cree)
}

var monTitre = document.querySelector("h1");

monTitre.addEventListener("click", modif)

var img = document.querySelector("main img");


var p1 = document.querySelector(".n1");
var p2 = document.querySelector(".n2");
var p3 = document.querySelector(".n3");
var changeImage = function () {
	if (img.src === "https://www.kizoa.fr/img/e8nZC.gif") {
		img.src = "http://gifimage.net/wp-content/uploads/2017/10/carlton-dance-gif-transparent-14.gif";
		p1.textContent = "un";
		p2.textContent = "gars";
		p3.textContent = "qui danse bien";
	} else {
		img.src = "https://www.kizoa.fr/img/e8nZC.gif";
		p1.textContent = "une";
		p2.textContent = "banane";
		p3.textContent = "qui danse mal";
	}
}
var imgFooter = document.querySelectorAll("footer img")

for (var i = 0; i < imgFooter.length; i++) {
	imgFooter[i].style.height = "200px"
}
for (var i = 1; i < imgFooter.length; i += 2) {
	imgFooter[i].style.backgroundImage = "url(https://www.kizoa.fr/img/e8nZC.gif)"
	imgFooter[i].style.backgroundPosition = "center";
	imgFooter[i].style.border = "red 2px dotted";
}
for (var i = 0; i < imgFooter.length; i += 2) {
	imgFooter[i].style.backgroundImage = "url(http://gifimage.net/wp-content/uploads/2017/10/carlton-dance-gif-transparent-14.gif)"
	imgFooter[i].style.backgroundPosition = "center";
	imgFooter[i].style.border = "red 2px dotted";
}
