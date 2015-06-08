$(document).ready(function () {
	var ww = $(window).width();
	var edge = 'left';
	if (ww < 1024) {
		edge = 'right';
	};
	// dropdown
	$(".dropdown-button").dropdown();
	// mobile collapse
	$(".button-collapse").sideNav({
	    // menuWidth: 300, // Default is 240
	});

	$('.button-collapse-right').sideNav({
	    // menuWidth: 300, // Default is 240
	    edge: edge, // Choose the horizontal origin
	    // closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
	});
});