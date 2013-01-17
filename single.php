<?php // single.php ?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : the_post(); ?>

		<div class="align-center / pane pane-blue">

			<div class="pane-inner / align-center-item">
				<h2 class="tagline"><?php the_title(); ?></h2>
			</div>	

		</div>

		<div class="align-center / pane pane-blue">

			<div class="pane-inner / align-center-item">

				<article>
					<?php the_content(); ?>
				</article>

			</div>

		</div>

		<div class="align-center / pane pane-blue">

			<div class="pane-inner / align-center-item">
				<?php comments_template('', TRUE); ?>
			</div>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>