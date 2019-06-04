<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="row">
				<div class="small-12 columns">
					<div class="titre">
						<h1>LES ACTUS</h1>
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
