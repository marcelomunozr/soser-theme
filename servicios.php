<?php 
/*
Template Name: Servicios
*/
get_header();
the_post();
?>

<div class="contenedor-interior">
    <div class="bg-blanco">
        <div class="interior-side">
            <img src="<?php bloginfo('template_url'); ?>/images/servicios-top.jpg" class="img-responsive">
        </div>
        <div class="interior-content servicios">
            <h2 class="verde"><?php the_title(); ?></h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="interior-side">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content parrafos">
        <?php the_content();?>
        <?php 
            $imagen_adicional = get_field('imagen_adicional');
            if(!empty($imagen_adicional)){
                foreach ($imagen_adicional as $imagen) {?>
                    <img src="<?php echo $imagen['imagen'];?>" class="img-responsive">
                <?php }?>
        <?php }?>
        <div class="clear20"></div>
        <?php if (! is_page( 'junta-nacional-de-auxilio-escolar-y-becas' )){?>
            <p>Si desea contactarnos haga click aquí  <a href="/contacto/" class="btn-consultar">CONSULTAR</a></p>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>