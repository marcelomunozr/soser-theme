<?php 
/*
Template Name: Acceso RRHH
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
    <div class="interior-content parrafos acceso">
        <?php the_content();?>
        <div class="row">
            <div class="col-md-7">
                <div class="box-trabaja">
                    <form action="#">
                        <input type="text" class="form-control usuario" placeholder="Usuario">
                        <input type="password" class="form-control clave" placeholder="Clave">
                        <div class="pull-right">
                            <a href="#" class="olvido">¿Olvido la clave?</a>
                        </div>
                        <input type="submit" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
        <div class="clear20"></div>
    </div>
</div>

<?php get_footer(); ?>