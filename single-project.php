<?php // single-project.php ?>

<?php get_header(); ?>

	<div class="align-center / pane pane-yellow">

		<div class="pane-inner / align-center-item">
			
			<?php if ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<h3><a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></a></h3>

			<?php endif; ?>

		</div>

	</div>

	<div class="align-center / pane pane-yellow">

		<div class="pane-inner / align-center-item">
			
			<div class="row / portfolio portfolio-item">
		
				<div class="span_5 col">

					<figure>
						<?php the_post_thumbnail('project-medium'); ?>
					</figure>

				</div>

				<div class="span_7 col / portfolio-content">

					<h3><?php the_title(); ?></h3>
					<p class="project-url"><a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></a></p>

					<?php the_content(); ?>

					<?php if ( get_field('project_technologies_used') ) : ?>

						<h4>Technologies Used</h4>

						<?php the_field('project_technologies_used'); ?>

					<?php endif; ?>

					<ul class="list">

						<?php if ( get_field('project_display_client') ) : ?>
							<li><span>Client:</span> <a href="<?php the_field('project_client_link'); ?>"><?php the_field('project_client_name'); ?></a></li>
						<?php endif; ?>

						<?php if ( get_field('project_display_client') ) : ?>
							<li><span>Sub-Contracted For:</span> <a href="<?php the_field('project_sub_contracted_for_link'); ?>"><?php the_field('project_sub_contracted_for_name'); ?></a></li>
						<?php endif; ?>

					</ul>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>