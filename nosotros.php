<?php 
/*
Template Name: Nosotros
*/
get_header();
the_post();
?>

<div class="contenedor-interior">
    <div class="bg-blanco">
        <div class="interior-side">
            <img src="<?php bloginfo('template_url'); ?>/images/nosotros-top.jpg" class="img-responsive">
        </div>
        <div class="interior-content">
            <h2 class="naranjo"><?php the_title(); ?></h2>
            <?php 
            $subtitulo = get_field('subtitulo');
            if(!empty($subtitulo)){ ?>
                <h3 class="naranjo"><?php echo $subtitulo;?></h3>
            <?php }  ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="interior-side">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content parrafos <?php if ( is_page( 'sucursales' )){ echo 'sucursales';} ?>">
        <?php the_content();?>
        <?php 
            $imagen_adicional = get_field('imagen_adicional');
            if(!empty($imagen_adicional)){
                foreach ($imagen_adicional as $imagen) {?>
                    <img src="<?php echo $imagen['imagen'];?>" class="img-responsive">
                <?php }?>
        <?php }?>
        <?php 
            $sucursales = get_field('sucursales');
            if(!empty($sucursales)){?>
                <div class="clear20"></div>
                <?php
                foreach ($sucursales as $sucursal) {?>
                    <div class="sucursal">
                        <h4 class="naranjo"><?php echo $sucursal['sucursal'];?></h4>
                        <p><?php echo $sucursal['datos'];?></p>
                    </div>
                <?php }?>
                <div class="clearfix"></div>
        <?php }?>
        <div class="clear20"></div>
    </div>
</div>

<?php get_footer(); ?>