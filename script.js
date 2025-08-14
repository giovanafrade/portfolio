const menulinks = document.querySelectorAll('.classdonav a[href^="#"]');

function getDistanceFromTheTop(elemento) {
	const id = elemento.getAttrbute("href");
	return document.querySelector(id).offsetTop;

}

function nativeScroll(distanceFromTheTop){
	window.scroll({
	top: distanceFromTheTop,
	behavior: "smooth",
   });

}

function scrollToSection(event){
	event.prevenDefault();
	const distanceFromTheTop = getDistanceFromTheTop(event.target) - 90;
	nativeScroll(distanceFromTheTop);
}

menuLinks.forEach((link) => {
	link.addEventListener("click", scrollToSection);

});