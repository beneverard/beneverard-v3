<?php // archive-project.php ?>

<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="align-center / pane pane-yellow">

			<div class="pane-inner / align-center-item">
				<h2 class="tagline"><a href="<?php the_permalink(); ?>#content"><?php the_title(); ?></a></h2>
			</div>	

		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>