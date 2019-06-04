<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="row">
				<div class="small-12 columns">
					<div class="titre">
						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo "<b class='texteBleu'>" . get_search_query() . "</b>"; ?></h1>
						<?php
							if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<small id="breadcrumbs">','</small>' );
							}
						?>
					</div>
				
				</div>
				<div class="small-12 medium-8 columns">

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</div>

				<div class="small-12 medium-4 columns">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
