$(document).ready(function () {
	// dropdown
	$(".dropdown-button").dropdown();
	// mobile collapse
	$(".button-collapse").sideNav({
	    // menuWidth: 300, // Default is 240
	});

	function slideNavRight () {
		var ww = $(window).width();
		var edge = 'left';
		// console.log(ww);
		if (ww < 978) {
			edge = 'right';
		} else {
			edge = 'left';
		}
		$('.button-collapse-right').sideNav({
		    edge: edge, // Choose the horizontal origin
		});
	}

	slideNavRight();
});