
<?php get_header(); ?>
<?php if(is_home()){
    $query = get_posts('post_type=imagenes-carrusel&numberposts=5');
    if(!empty($query)):
        ?>
            <div class="imagen-slide">
                <div id="carousel-soser" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                    $counter = 0;
                    foreach($query as $post):
                        setup_postdata($post);
                        ?>
                            <div class="item <?php if($counter == 0) echo ' active'; $counter++; ?>">
                                <?php
                                if(has_post_thumbnail()):
                                    the_post_thumbnail('original');
                                ?>
                                <?php
                                endif;
                                 ?>
                            </div>
                        <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                    </div>
  <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-soser" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#carousel-soser" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
    <?php
    endif;
}; ?>
                <div class="sidebar-slide">
                    <div class="bg-blanco">
                        <a href="/rico-y-sano/">
                            <img src="<?php bloginfo('template_url'); ?>/images/slide/sidebar-top.jpg" alt="" class="img-responsive hide-m">
                            <img src="<?php bloginfo('template_url'); ?>/images/slide/sidebar-top-m.jpg" alt="" class="img-responsive visible-m">
                        </a>
                        <a href="/servicios/alimentacion-institucional/">
                            <img src="<?php bloginfo('template_url'); ?>/images/slide/sidebar-servicios.jpg" alt="" class="img-responsive hide-m">
                            <img src="<?php bloginfo('template_url'); ?>/images/slide/sidebar-servicios-m.jpg" alt="" class="img-responsive visible-m">
                        </a>
                        <div class="clearfix visible-568"></div>
                        <div id="carousel-soser-min" class="carousel slide" data-ride="carousel">
<?php if(is_home()){
    $query = get_posts('post_type=rico-y-sano&numberposts=5');
    if(!empty($query)):
        ?>
                            <div class="carousel-inner">
                    <?php
                    $contador = 0;
                    foreach($query as $post):
                        setup_postdata($post);
                        ?>
                                <div class="item <?php if($contador == 0) echo ' active'; $contador++; ?>">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-6 no-padr">
                                                <a href="<?php the_permalink(); ?>" class="<?php echo get_field('color_titulo'); ?>"><?php echo get_field('titulo'); ?><br>+</a>
                                            </div>
                                            <div class="col-xs-6 img-wrap">
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive', 'title' => get_the_title()));?></a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                        <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                            </div>
    <?php
    endif;
}; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

<?php get_footer(); ?>