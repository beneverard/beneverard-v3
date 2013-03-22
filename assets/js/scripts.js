$(document).ready(function() {

	$('[href^="/#"]').on('click', function(event) {


		var $self	= $(this),
			$target	= $('body');

		// set the target if we're anything other than '/#'...
		if ( $self.attr('href') !== '/#' ) {

			// ... set the target
			var $target = $($(this).attr('href'));
		} else {

			// if we're not on the homepage, allow the link as normal
			if ( ! $('body').hasClass('home') ) {
				return;
			}

		}

		event.preventDefault();

		$.scrollTo($target, 1000);

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