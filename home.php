<?php // blog.php ?>

<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="align-center / pane pane-red">

			<div class="pane-inner / align-center-item">
				<h2 class="tagline"><a href="<?php the_permalink(); ?>#content"><?php the_title(); ?></a></h2>
				<h3><?php the_time('jS F Y'); ?></h3>
			</div>	

		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>