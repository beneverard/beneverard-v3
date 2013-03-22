<?php // functions/hacks.php


 //***********
// $ADMIN_BAR

add_action('wp_head', function() {

	echo '<style type="text/css">
		* html body { margin-top: 0 !important; }
		body.admin-bar { margin-top: -28px; padding-bottom: 28px; }
		body.wp-admin #footer { padding-bottom: 28px; }
		#wpadminbar { top: auto !important; bottom: 0; }
		#wpadminbar .quicklinks .ab-sub-wrapper { bottom: 28px; }
		#wpadminbar .quicklinks .ab-sub-wrapper ul .ab-sub-wrapper { bottom: -7px; }
	</style>';

});