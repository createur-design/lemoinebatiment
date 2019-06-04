<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

		<div class="row">
			<div class="small-12 columns">
				<div class="titre">
					<h1><?php the_title(); ?></h1>
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<small id="breadcrumbs">','</small>' );
						}
					?>
				</div>					
			</div>
		</div>

	<div class="row">
		<div class="small-12 columns">
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h2><?php the_title(); ?></h2>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('j F Y'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<div>
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			</div>
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<div class="row align-middle">
				<div class="small-6 small-order-1 medium-3 medium-order-1 columns">
					<?php previous_post_link('<span class="prevPost">< %link</span>' ); ?>
				</div>
				<div class="small-12 small-order-3 medium-6 medium-order-2 columns"><?php echo do_shortcode('[social_warfare]'); ?></div>
				<div class="small-6 small-order-2 medium-3 medium-order-3 columns">
					<?php next_post_link( '<span class="nextPost">%link ></span>' ); ?>
				</div>
			</div>		

			<!-- <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

		</div>
	</div>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
