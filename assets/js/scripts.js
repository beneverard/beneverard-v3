$(document).ready(function() {

	$('[href^="#"]').on('click', function(event) {

		event.preventDefault();

		$.scrollTo($($(this).attr('href')), 1000);

	});

	$('.header-links .home').on('click', function(event) {

		if ( $('body').hasClass('home') ) {

			event.preventDefault();

			$.scrollTo($('body'), 1000);

		}

	});

	/*

	// if modernizr has said we don't have flexbox support we need to
	// start calculating element heights to allow for margin: auto fix

	if ( $('html').hasClass('no-flexbox') ) {

		$('.align-center-item').each(function() {

			var $self = $(this);

			$self.css('height', $self.outerHeight(true));

		});

	}

	$('html').addClass('js-ready');

	*/


	 //********
	// $SLIDER

	$('.flexslider').flexslider({
		animation		: "slide",
		pauseOnHover	: true,
		directionNav	: false
	});


	 //****************
	// $COLUMN_HEIGHTS
	
	if ( $('body.single-project').length ) {

		$('.portfolio').css('height', $('.portfolio-content').height());

	}


	 //*******
	// $VIDEO

	$('.pane-inner').fitVids();

});