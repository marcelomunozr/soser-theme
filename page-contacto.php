<?php 
get_header();
the_post();
?>

<div class="contenedor-interior">
    <div class="interior-side">
        <img src="<?php bloginfo('template_url'); ?>/images/contacto-top.jpg" class="img-responsive">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content contacto">
        <h2 class="verde-claro"><?php //the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="exito verde-claro" style="display:none;">Mensaje enviado con éxito</div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>