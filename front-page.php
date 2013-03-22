<?php // front-page.php ?>

<?php get_header(); ?>
		
	<div id="intro" class="align-center / pane pane-green">

		<div class="pane-inner / align-center-item / intro">

			<h1><?php the_field('homepage_title'); ?></h1>
			<hr>
			<h2><?php the_field('homepage_tagline'); ?></h2>

		</div>

		<a href="/#jadore" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="jadore" class="align-center / pane pane-blue">

		<div class="pane-inner / align-center-item">

			<h2 class="tagline">j'adore le web</h2>

			<?php if ( get_field('skills_lists') ) : ?>

				<div class="row / skills">

					<?php while ( has_sub_field('skills_lists') ) : ?>

						<div class="m_4 col">
							
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

		<a href="/#intro" class="arrow arrow-up">&#8607;</a>
		<a href="/#portfolio" class="arrow arrow-down">&#8609;</a>

	</div>

	<div id="portfolio" class="align-center / pane pane-yellow">

		<div class="pane-inner / align-center-item">
			
			<h2>portfolio</h2>

			<?php 

				$projects = new WP_Query(
					array(
						'post_type'			=> 'projects',
						'posts_per_page'	=> 5
					)
				);

			?>

			<?php // non-mobile version ?>

			<?php if ( $projects->have_posts() ) : ?>

				<div class="flexslider / portfolio">
			
					<ul class="slides">

						<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>

							<li class="row / portfolio-item">
						
								<div class="col m_6">

									<figure>

										<?php $image = get_field('project_thumbnail'); ?>

										<img src="<?php echo $image['sizes']['project-thumbnail']; ?>" />

									</figure>

								</div>

								<div class=" col m_6 / portfolio-content">

									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p class="project-url"><a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></a></p>

									<div class="portfolio-excerpt">
										<?php _the_excerpt(); ?>
									</div>

									<a class="project-link" href="<?php the_permalink(); ?>">View Project</a>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				</div>

			<?php endif; /* AND */ wp_reset_postdata(); ?>

			<?php // mobile version ?>

			<?php if ( $projects->have_posts() ) : ?>

				<div class="mobile-portfolio">

					<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>

						<?php $image = get_field('project_thumbnail'); ?>

						<figure>
							
							<a href="<?php the_permalink(); ?>" title="Click to view the '<?php the_title(); ?>' project">
								<img src="<?php echo $image['sizes']['project-thumbnail']; ?>" alt="<?php the_title(); ?>" />
							</a>

							<a href="<?php the_permalink(); ?>" class="portfolio-inner-link"><?php the_title(); ?></a>

						</figure>

					<?php endwhile; ?>

				</div> <!-- / .mobile-portfolio -->

			<?php endif; /* AND */ wp_reset_postdata(); ?>

		</div>

		<a href="/#jadore" class="arrow arrow-up">&#8607;</a>
		<a href="/#hire-me" class="arrow arrow-down">&#8609;</a>

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

		<a href="/#portfolio" class="arrow arrow-up">&#8607;</a>

	</div>

<?php get_footer(); ?>