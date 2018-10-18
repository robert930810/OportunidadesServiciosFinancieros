$( document ).ready(function() {

	var heightWindow= $(window).height();
	var heightPreheader = $('#preHeader').height();
	var heightHeaderImage = $('.headerImage').height();
	var heightNavbar = $('.navbar-toggler').height();
	

	var heigthToggle= heightWindow - (heightPreheader + heightHeaderImage + heightNavbar);

	console.log(heigthToggle);

	


});