<?php // single.php ?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : the_post(); ?>

		<div class="align-center / pane pane-blue">

			<div class="pane-inner / align-center-item">
				<h2 class="tagline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>	

		</div>

		<div class="align-center / pane pane-blue">

			<div class="pane-inner / align-center-item">

				<article>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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