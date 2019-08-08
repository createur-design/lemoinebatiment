<?php get_header(); ?>

	<main role="main">

	<?php
    if ( has_post_thumbnail() ) {
?>
    <section class="bg-page-intro" style="background:url(<?php the_post_thumbnail_url(array(1600, 600)); ?>); background-size:cover; background-position:center center; height:600px;">
<?php  
    }
?>

</section>

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
				// PAGE VOTRE PROJET
				else if( is_page(39) ){
					get_template_part('./templates/votre-projet');
				}
				else{
			?>

			<section>
				<div class="row">
					<div class="small-12 columns">
						<div class="titre">
							<h1><?php the_title(); ?></h1> 
							<?php the_content(); ?>
						</div>						
					</div>
				</div>
			</section>

		<?php } ?> <!-- END ELSE -->

			</section>

		<!-- ACF FLEX -->
		<?php

		// check if the flexible content field has rows of data
		if( have_rows('flex_content') ):			

			// loop through the rows of data
			while ( have_rows('flex_content') ) : the_row();

				if( get_row_layout() == 'image_+_texte' ):

					$image = get_sub_field('image');
					$texte = get_sub_field('texte');

					echo '<section>';
					echo '<div class="row align-middle">';
					echo '<div class="small-12 medium-5 columns"><img src="' . $image["url"] . '" alt="' . $image["alt"] . '"></div>';
					echo '<div class="small-12 medium-7 columns">' . $texte . '</div>';
					echo '</div>';
					echo '</section>';

				elseif( get_row_layout() == 'texte_+_image' ): 

					$image = get_sub_field('image');
					$texte = get_sub_field('texte');

					echo '<section>';
					echo '<div class="row align-middle">';					
					echo '<div class="small-12 medium-7 columns">' . $texte . '</div>';
					echo '<div class="small-12 medium-5 columns"><img src="' . $image["url"] . '" alt="' . $image["alt"] . '"></div>';
					echo '</div>';
					echo '</section>';
				
				elseif( get_row_layout() == 'texte_en_colonne' ): 
					echo '<section>';
					echo '<div class="row">';
					$nbColumns = get_sub_field('nombre_de_column');
					$texte_1 = get_sub_field('column_1');
					$texte_2 = get_sub_field('column_2');
					$texte_3 = get_sub_field('column_3');
					switch ($nbColumns) {
						case 1:
							echo '<div class="small-12 columns">' . $texte_1 . '</div>';
							break;
						case 2:
							echo '<div class="small-12 medium-6 columns">' . $texte_1 . '</div>';
							echo '<div class="small-12 medium-6 columns">' . $texte_2 . '</div>';
							break;
						case 3:
							echo '<div class="small-12 medium-4 columns">' . $texte_1 . '</div>';
							echo '<div class="small-12 medium-4 columns">' . $texte_2 . '</div>';
							echo '<div class="small-12 medium-4 columns">' . $texte_3 . '</div>';
							break;
					}					
					echo '</div>';
					echo '</section>';

				endif;

			endwhile;			

		else :

			// no layouts found

		endif;

		?>

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>