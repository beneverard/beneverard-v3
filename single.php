<?php // single.php ?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : the_post(); ?>

		<div class="align-center / pane pane-red">

			<div class="pane-inner / align-center-item">

				<article>

					<div class="article-heading">
						<h2 class="tagline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3><?php the_time('jS F Y'); ?></h3>
					</div>

					<?php the_content(); ?>

				</article>

				<div id="comments" class="comments">
					<?php comments_template('', TRUE); ?>
				</div>

			</div>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>