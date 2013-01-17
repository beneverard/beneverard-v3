<?php // front-page.php ?>

<?php get_header(); ?>
		
	<div id="intro" class="align-center / pane pane-green">

		<div class="pane-inner / align-center-item / intro">

			<h1><?php the_field('homepage_title'); ?></h1>
			<hr>
			<h2><?php the_field('homepage_tagline'); ?></h2>

		</div>

		<a href="#jadore" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="jadore" class="align-center / pane pane-blue">

		<div class="pane-inner / align-center-item">

			<h2 class="tagline">j'adore le web</h2>

			<?php if ( get_field('skills_lists') ) : ?>

				<div class="row / skills">

					<?php while ( has_sub_field('skills_lists') ) : ?>

						<div class="span_4 col">
							
							<h3><?php the_sub_field('skills_list_title'); ?></h3>
							<p><span class="ss-icon ss-standard ss-down"></span></p>

							<?php if ( get_sub_field('skills_list_items') ) : ?>

								<ul>

									<?php while ( has_sub_field('skills_list_items') ) : ?>
										<li><?php the_sub_field('skills_list_item'); ?></li>
									<?php endwhile; ?>

								</ul>

							<?php endif; ?>

						</div>

					<?php endwhile; ?>

				</div>

			<?php endif; ?>

		</div>

		<a href="#intro" class="arrow arrow-up">&#8607;</a>
		<a href="#portfolio" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="portfolio" class="align-center / pane pane-yellow">

		<div class="pane-inner / align-center-item">
			
			<h2>portfolio</h2>

			<?php 

				$projects = new WP_Query(
					array(
						'post_type'			=> 'project',
						'posts_per_page'	=> 5
					)
				);

			?>

			<?php if ( $projects->have_posts() ) : ?>

				<div class="flexslider / portfolio">
			
					<ul class="slides">

						<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>

							<li class="row / portfolio-item">
						
								<div class="span_5 col">

									<figure>
										<?php the_post_thumbnail('project-medium'); ?>
									</figure>

								</div>

								<div class="span_7 col / portfolio-content">

									<h3><?php the_title(); ?></h3>
									<p class="project-url"><a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></a></p>

									<?php the_excerpt(); ?>

									<a class="project-link" href="<?php the_permalink(); ?>">View Project</a>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				</div>

			<?php endif; /* AND */ wp_reset_postdata(); ?>

		</div>

		<a href="#jadore" class="arrow arrow-up">&#8607;</a>
		<a href="#hire-me" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="hire-me" class="align-center / pane pane-green">

		<div class="pane-inner / align-center-item">

			<h2>hire me</h2>

			<ul class="hire-me">
				<li><a href="skype:<?php the_field('skype_username', 'options'); ?>?add" title="Skype Me"><span class="ss-icon fancy ss-social ss-skype"></span> <?php the_field('skype_username', 'options'); ?></a></li>
				<li><a href="mailto:<?php the_field('email_address', 'options'); ?>" title="Email Me"><span class="ss-icon fancy ss-social ss-mail"></span> <?php the_field('email_address', 'options'); ?></a></li>
				<li><a href="tel:0044<?php echo str_replace(' ', '', substr(get_field('telephone_number', 'options'), 1)); ?>" title="Call Me"><span class="ss-icon fancy ss-standard ss-phone"></span> <?php the_field('telephone_number', 'options'); ?></a></li>
			</ul>

		</div>

		<a href="#portfolio" class="arrow arrow-up">&#8607;</a>

	</div>

<?php get_footer(); ?>