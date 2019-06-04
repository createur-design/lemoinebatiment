<div class="row full">
    <div class="small-12 columns">
        <div class="titrePage">
            <h1>Spécialiste de la <b class=''>charpente</b> et de la <b class=''>couverture</b></h1>
        </div>        
    </div>
</div>

<div class="row full align-right collapse">
    <div class="small-12 medium-10 columns">
        <?php if( have_rows('slider') ): ?>

            <div class="owl-carousel heroSlider">

            <?php while( have_rows('slider') ): the_row(); 

                // vars
                $titre = get_sub_field('titre');
                $stitre = get_sub_field('sous-titre');
                $description = get_sub_field('description');
                $bouton = get_sub_field('bouton');
                $link = get_sub_field('link');
                $image = get_sub_field('image');

                ?>
                
                <div class="bg" style="background-image:url(<?php echo $image['url']; ?>)">
                    <div>
                        <h2><?php echo $titre ?></h2>

                        <?php if($stitre): ?>
                        <h3><?php echo $stitre ?></h3>
                        <?php endif; ?>

                        <?php if($description): ?>
                        <p><?php echo $description ?></p>
                        <?php endif; ?>

                        <a href="<?php echo $link ?>"><?php echo $bouton ?></a>
                    </div>
                </div>

            <?php endwhile; ?>

            </div>

        <?php endif; ?>
    </div>
</div>

<section class="services">
    <div class="row">
        <div class="small-12 columns text-center">
            <h2>nos services</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et sit dignissimos in temporibus provident voluptatum eius sapiente ut nemo ad illo, quae ratione eos assumenda culpa. Fuga culpa modi mollitia!</p>
        </div>
    </div>
    <div class="row small-up-1 medium-up-3">
        <div class="column column-block">
            <div class="blockService">
                <a href="<?php echo get_page_link(19); ?>">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/hammer.svg" alt=""></div>
                    <h3>charpente</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </a>
            </div>            
        </div>
        <div class="column column-block">
            <div class="blockService">
                <a href="<?php echo get_page_link(21); ?>">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/roof.svg" alt=""></div>
                    <h3>couverture</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </a>
            </div>            
        </div>
        <div class="column column-block">
            <div class="blockService">
                <a href="<?php echo get_page_link(23); ?>">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/trowel.svg" alt=""></div>
                    <h3>maçonnerie</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </a>
            </div>            
        </div>
        <div class="column column-block">
            <div class="blockService">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/saw.svg" alt=""></div>
                <h3>menuiserie</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>            
        </div>
        <div class="column column-block">
            <div class="blockService">
            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/plug.svg" alt=""></div>
                <h3>électricité</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>            
        </div>
        <div class="column column-block">
            <div class="blockService">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/cutter.svg" alt=""></div>
                <h3>isolation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns text-center">
            <a href="#" class="bt">plus de services</a>
        </div>
    </div>
</section>
<section class="realisations">

<div class="row">
    <div class="small-12 columns">
        <h2>nos dernières réalisations</h2>
    </div>
</div>
<?php if( have_rows('realisations') ): ?>

    <div class="row small-collapse medium-collapse full" style="margin-bottom:30px;">

	<?php while( have_rows('realisations') ): the_row(); 

        // vars
        $image = get_sub_field('image');
        $cat = get_sub_field('categorie');

        ?>

    <div class="small-6 medium-6 large-3 columns">
        <div class="block">
            <img src="<?php echo $image['url']; ?>" alt="">
            <div class="infos">
                <div class="cat">
                    <small>catégorie :</small>
                    <b><?php echo $cat; ?></b>
                </div>                        
                <div class="btFullScreen">
                    <a href="<?php echo $image['url']; ?>" data-fancybox data-caption="Caption for single image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/fullscreen.png" alt="">
                    </a>
                </div>                        
            </div>
        </div>
    </div>

	<?php endwhile; ?>

    </div>

<?php endif; ?>
<div class="row">
    <div class="small-12 columns">
        <a href="" class="bt btBgJaune">voir nos réalisations</a>
    </div>
</div>

</section>

<section class="lastBlog">
    <div class="row">
        <div class="small-12 columns">
            <h2>Derniers articles</h2>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <?php
                    $args = array(
                        'posts_per_page' => 5,
                    );
                    $recentPosts = new WP_Query($args);
                    //$recentPosts->query('showposts=5');
                ?>
                <div class="owl-carousel carouselBlog">
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <div>
                        <!-- article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <!-- post thumbnail -->
                        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(array(600,400)); // Declare pixel size you need inside the array ?>
                            </a>
                        <?php endif; ?>
                        <!-- /post thumbnail -->

                        <!-- post title -->
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <!-- /post title -->

                        <!-- post details -->
                        <span class="date"><?php the_time('j F Y'); ?></span>
                        <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
                        <!-- /post details -->

                        <div class="separator"></div>

                        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

                        </article>
                        <!-- /article -->
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>