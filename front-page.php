<?php // front-page.php ?>

<?php get_header(); ?>
		
	<div id="intro" class="align-center / pane pane-green">

		<div class="pane-inner / align-center-item / intro">

			<h1>Ben Everard</h1>
			<hr>
			<h2>Web Developer</h2>

		</div>

		<a href="#jadore" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="jadore" class="align-center / pane pane-blue">

		<div class="pane-inner / align-center-item">

			<h2 class="tagline">j'adore le web</h2>

			<div class="row / skills">

				<div class="span_4 col">
					
					<h3>I specialise in</h3>
					<p><span class="ss-icon ss-standard ss-down"></span></p>

					<ul>
						<li>PHP Development</li>
						<li>WordPress</li>
						<li>CodeIgniter</li>
						<li>JavaScript + jQuery</li>
						<li>HTML + CSS</li>				
					</ul>
				
				</div>
			
				<div class="span_4 col">
					
					<h3>I'm passionate about</h3>
					<p><span class="ss-icon ss-standard ss-down"></span></p>

					<ul>
						<li>Efficient + maintainable code</li>
						<li>Great design + user experience</li>
						<li>Performance optimisation</li>
						<li>Contributing to the community</li>							
					</ul>
					
				</div>
			
				<div class="span_4 col">
					
					<h3>I don't do</h3>
					<p><span class="ss-icon ss-standard ss-down"></span></p>

					<ul>
						<li>Design</li>
						<li><strong>However…</strong></li>
						<li>I appreciate good design</li>
						<li>I work with great designers</li>
						<li>So if you need design services,<br />I have the contacts :-)</li>
					</ul>

				</div>

			</div>

		</div>

		<a href="#intro" class="arrow arrow-up">&#8607;</a>
		<a href="#portfolio" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="portfolio" class="align-center / pane pane-yellow">

		<div class="pane-inner / align-center-item">
			
			<h2>portfolio</h2>

			<!-- Place somewhere in the <body> of your page -->
			<div class="flexslider / portfolio">
			
				<ul class="slides">

					<li class="row / portfolio-item">
				
						<div class="span_4 col">

							<figure>
								<img src="https://dl.dropbox.com/u/813705/Find%20a%20Stockist%20-%20Wood%27s%20Shropshire%20Beersnew.png"/ >
							</figure>

						</div>

						<div class="span_8 col">

							<h3>Wood's Brewery</h3>
							<p class="project-url"><a href="">http://www.woodbrewery.co.uk/find-a-stockist</a></p>

							<p>I was asked by Kirsty Burgoine to assist with the re-design of the Wood’s Shropshire Beers website by developing a stockist finder. Wood’s Brewery have many stockists in the form of pubs and shops and it is vital to allow customers to easily find the nearest stockist.</p>
							<p>For this project I used the Google Maps API (helped along with gmaps.js), all stockists are stored as a custom post type within WordPress for easy administration for the client. When a user types their postcode in we use Google geocode service to get their latitude and longitude coordinates and then calculate the distance for all stockists. Any within the desired maximum distance are plotted on the map.</p>

							<ul>
								<li><strong>Client:</strong> Wood's Brewery</li>
								<li><strong>Sub-Contracted For:</strong> Kirsty Burgoine</li>
								<li><strong>Project Tasks:</strong> Develop Stockist Locator</li>
								<li><strong>Technologies Used:</strong> jQuery, Goole Maps APU, gmaps.js, WordPress custom post types and meta fields</li>
							</ul>

						</div>

					</li>

					<li class="row / portfolio-item">
				
						<div class="span_4 col">

							<figure>
								<img src="https://dl.dropbox.com/u/813705/Find%20a%20Stockist%20-%20Wood%27s%20Shropshire%20Beersnew.png"/ >
							</figure>

						</div>

						<div class="span_8 col">

							<h3>Joe Bloggs</h3>
							<p class="project-url"><a href="">http://www.woodbrewery.co.uk/find-a-stockist</a></p>

							<p>I was asked by Kirsty Burgoine to assist with the re-design of the Wood’s Shropshire Beers website by developing a stockist finder. Wood’s Brewery have many stockists in the form of pubs and shops and it is vital to allow customers to easily find the nearest stockist.</p>
							<p>For this project I used the Google Maps API (helped along with gmaps.js), all stockists are stored as a custom post type within WordPress for easy administration for the client. When a user types their postcode in we use Google geocode service to get their latitude and longitude coordinates and then calculate the distance for all stockists. Any within the desired maximum distance are plotted on the map.</p>

							<ul>
								<li><strong>Client:</strong> Wood's Brewery</li>
								<li><strong>Sub-Contracted For:</strong> Kirsty Burgoine</li>
								<li><strong>Project Tasks:</strong> Develop Stockist Locator</li>
								<li><strong>Technologies Used:</strong> jQuery, Goole Maps APU, gmaps.js, WordPress custom post types and meta fields</li>
							</ul>

						</div>

					</li>

				</ul>

			</div>

		</div>

		<a href="#jadore" class="arrow arrow-up">&#8607;</a>
		<a href="#hire-me" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="hire-me" class="align-center / pane pane-green">

		<div class="pane-inner / align-center-item">

			<h2>hire me</h2>

			<ul class="hire-me">
				<li><a href="skype:ben.everard?add" title="Skype Me"><span class="ss-icon fancy ss-social ss-skype"></span> ben.everard</a></li>
				<li><a href="mailto:hello@beneverard.co.uk" title="Email Me"><span class="ss-icon fancy ss-social ss-mail"></span> hello@beneverard.co.uk</a></li>
				<li><a href="tel:00447549925328" title="Call Me"><span class="ss-icon fancy ss-standard ss-phone"></span> 07549 925 328</a></li>
			</ul>

		</div>

		<a href="#portfolio" class="arrow arrow-up">&#8607;</a>

	</div>

<?php get_footer(); ?>