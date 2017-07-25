<?php 
/*
Template Name: Trabaja con nosotros
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
    <div class="interior-content parrafos trabaja">
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
            <div class="col-md-5">
                <div class="box-trabaja">
                    <p>Si no esta registrado ingrese aquí sus datos y forme parte de nuestra red.</p>
                    <a href="/trabaja-con-nosotros/registro-de-usuario/" class="btn-registrar">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="clear20"></div>
    </div>
</div>

<?php get_footer(); ?>