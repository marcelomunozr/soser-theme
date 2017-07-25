<?php 
get_header();
the_post();
?>

<div class="contenedor-interior">
    <div class="interior-side">
        <img src="<?php bloginfo('template_url'); ?>/images/noticias-top.jpg" class="img-responsive">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content parrafos noticias">
        <?php
        $query = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 3));
        if ($query->have_posts() ) {
            while ( $query->have_posts() ) { 
                $query->the_post();
                ?>
                <div class="col-md-4 no-padding">
                    <div class="overflow-noticia">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive', 'title' => get_the_title()));?></a>
                    </div>
                    <div class="texto-noticias">
                        <h3 class="<?php echo get_field('color_noticia'); ?>"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                        <?php //the_excerpt();?>
                        <?php
                            $words = explode(" ", get_the_content());
                            $content = implode(" ",array_splice($words,0,40));
                            echo $content.'...';
                        ?>
                        <div class="clear10"></div>
                        <a href="<?php the_permalink(); ?>" class="<?php echo get_field('color_noticia'); ?> pull-right">+</a>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
        }
        ?>

    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>