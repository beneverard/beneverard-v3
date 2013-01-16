<!doctype html>
<html>

	<head>

		<meta charset='UTF-8'>
		
		<title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/fonts/ss-social/ss-social.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/fonts/ss-standard/ss-standard.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/screen.css">

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/libs/modernizr-custom.js"></script>

		<script type="text/javascript">
			(function() {
				var config = {
					kitId: 'hjv3ozo',
					scriptTimeout: 3000
				};
				var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
			})();
		</script>

		<?php wp_head(); ?>

	</head>
	<body>

		<a href="#" class="blog-link">Blog</a>