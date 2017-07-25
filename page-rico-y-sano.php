
<?php 
get_header();
the_post();
?>

<div class="contenedor-interior">
    <div class="interior-side">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
        <div class="col-md-12">
            <h1 class="naranjo"><?php echo get_field('titulo'); ?></h1>
            <div class="contenedor"><?php the_content(); ?></div>
        </div>
    </div>
    <div class="interior-content parrafos noticias rico-sano">
        <div class="overflow-rico-sano">
            <div class="col-xs-5 pull-right">
                <img src="<?php bloginfo('template_url'); ?>/images/banner-rico-sano.jpg" class="img-responsive pull-right">
            </div>
        </div>
        <div class="clear20"></div>
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="row">
            <?php
            $query = new WP_Query( array( 'post_type' => 'rico-y-sano', 'posts_per_page' => 5));
            if ($query->have_posts() ) {
                $i=0;
                while ( $query->have_posts() ) { 
                    $query->the_post();
                    $i++;
                    if ($query->post_count!== $i) {?>
                    <div class="col-md-6">
                        <div class="overflow-noticia">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive', 'title' => get_the_title()));?></a>
                        </div>
                        <h3 class="<?php echo get_field('color_titulo'); ?>"><a href="<?php the_permalink(); ?>"><?php echo get_field('titulo'); ?></a></h3>
                        <div class="clear10"></div>
                        <a href="<?php the_permalink(); ?>" class="<?php echo get_field('color_titulo'); ?> pull-right">+</a>                    
                    </div>
                    <?php if ($i==2) {?> <div class="clearfix"></div> <?php } ?>
                    <?php }?>
                <?php
                }
            }
            ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="overflow-noticia big">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive', 'title' => get_the_title()));?></a>
                </div>
                <h3 class="<?php echo get_field('color_titulo'); ?>"><a href="<?php the_permalink(); ?>"><?php echo get_field('titulo'); ?></a></h3>
                <div class="clear10"></div>
                <a href="<?php the_permalink(); ?>" class="<?php echo get_field('color_titulo'); ?> pull-right">+</a> 
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>

            </div>
        </div>


        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    <?php wp_footer(); ?>
    </body>
</html>