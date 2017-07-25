<?php 
/*
Template Name: Ofertas de Trabajo
*/
get_header();
the_post();
?>
<div class="contenedor-interior">
    <div class="bg-blanco">
        <div class="interior-side">
            <img src="<?php bloginfo('template_url'); ?>/images/trabaja-top.jpg" class="img-responsive">
        </div>
        <div class="interior-content">
            <h2 class="verde-claro"><?php the_title(); ?></h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="interior-side bg-blanco chef-trabaja">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content parrafos ofertas-trabajo">
        <div class="form-ofertas-top">
            <div class="col-md-2 no-padding">Fecha</div>
            <div class="col-md-4 no-padding">Cargo</div>
            <div class="col-md-2 no-padding">Región</div>
            <div class="col-md-3 no-padding">Organización</div>
            <div class="col-md-1 no-padding">Vacantes</div>
            <div class="clearfix"></div>
        </div>
        <div class="box-trabaja">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query = new WP_Query( array( 'post_type' => 'ofertas-trabajo', 'posts_per_page' => 2, 'paged' => $paged));//
            if ($query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <div class="oferta">
                        <div class="col-md-2 columnas">
                            <div class="form-ofertas-top">
                                Fecha
                            </div>
                            <div class="bg-blanco">
                                <?php the_time('d/m/Y'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 columnas">
                            <div class="form-ofertas-top">
                                Cargo
                            </div>
                            <div class="bg-blanco">
                                <?php the_title(); ?>
                            </div>
                        </div>
                        <div class="col-md-2 columnas">
                            <div class="form-ofertas-top">
                                Región
                            </div>
                            <div class="bg-blanco">
                                <?php echo get_field('region'); ?>
                            </div>
                        </div>
                        <div class="col-md-3 columnas">
                            <div class="form-ofertas-top">
                                Organización
                            </div>
                            <div class="bg-blanco">
                                <?php echo get_field('organizacion'); ?>
                            </div>
                        </div>
                        <div class="col-md-1 columnas">
                            <div class="form-ofertas-top">
                                Vacantes
                            </div>
                            <div class="bg-blanco">
                                <?php echo get_field('vacantes'); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
            <?php }?>
                <?php
                }?>
                <?php wp_reset_postdata();?>
        </div>
        <div class="col-md-12">
            <?php wp_pagenavi( array( 'query' => $query ) ); ?>
        </div>
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>