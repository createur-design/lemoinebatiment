<section>
    <div class="row">
        <div class="small-12 columns">
            <div class="titre">
                <h1><?php the_title(); ?></h1> 
                <?php the_content(); ?>
            </div>
            <?php
                $avantApres = get_field("mise_en_avant__apres");
                if($avantApres){
            ?>
            <h2>réalisation du mois</h2>  
            <?php } ?>           
        </div>
    </div>
</section>

<?php
    $avantApres = get_field("mise_en_avant__apres");
    $imageAvant = get_field('photo_avant');
    $imageApres = get_field('photo_apres');
    if($avantApres){
?>
    <section>
        <div class="row">
            <div class="small-12 columns">
                <!-- Main div container -->
                <div id="myImageCompare">
                    <!-- The first div will be the front element, to prevent FOUC add a style="display: none;" -->
                    <div style="display: none;">
                        <span class="images-compare-label">avant</span>
                        <img src="<?php echo $imageAvant['url']; ?>" alt="<?php echo $imageAvant['alt']; ?>" />
                    </div>
                    <!-- This div will be the back element -->
                    <div>
                        <span class="images-compare-label">après</span>
                        <img src="<?php echo $imageApres['url']; ?>" alt="<?php echo $imageApres['alt']; ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>



<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>par catégorie</h2>
            <?php echo do_shortcode( '[PFG id=126]' ); ?>
        </div>
    </div>
</section>