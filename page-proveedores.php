<?php 
get_header();
the_post();
?>

<div class="contenedor-interior">
    <div class="bg-blanco">
        <div class="interior-side">
            <img src="<?php bloginfo('template_url'); ?>/images/proveedores-top.jpg" class="img-responsive">
        </div>
        <div class="interior-content servicios">
            <?php 
            $titulo_a_mostrar = get_field('titulo_a_mostrar');
            if(!empty($titulo_a_mostrar)){ ?>
                <h2 class="lila"><?php echo $titulo_a_mostrar;?></h2>
            <?php }  ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="interior-side">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content parrafos">
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>