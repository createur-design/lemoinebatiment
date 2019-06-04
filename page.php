<?php get_header(); ?>

	<main role="main">

			<?php
				// PAGE ACCUEIL
				if( is_page(8) ){
					get_template_part('./templates/accueil');
				}
				// PAGE REALISATIONS
				else if( is_page(35) ){
					get_template_part('./templates/realisations');
				}
				// PAGE RENDEZ-VOUS
				else if( is_page(37) ){
					get_template_part('./templates/rendezvous');
				}
				else{
			?>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php //edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		<?php } ?> <!-- END ELSE -->

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
