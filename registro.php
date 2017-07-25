<?php 
/*
Template Name: Registro de usuario
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
    <div class="interior-content parrafos registro">
        <div class="col-md-3 pasos no-padding">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/paso-1.png" alt="Paso 1" >
                <span class="verde-claro">Registro</span>
                <span class="clearfix"></span>
            </a>
        </div>
        <div class="col-md-3 pasos no-padding">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/paso-2.png" alt="Paso 1" >
                <span class="verde-claro">Información de contacto</span>
                <span class="clearfix"></span>
            </a>
        </div>
        <div class="col-md-3 pasos no-padding">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/paso-3.png" alt="Paso 1" >
                <span class="verde-claro">Información académica y laboral</span>
                <span class="clearfix"></span>
            </a>
        </div>
        <div class="col-md-3 pasos no-padding">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/paso-4.png" alt="Paso 1" >
                <span class="verde-claro">Otra información</span>
                <span class="clearfix"></span>
            </a>
        </div>
        <div class="clear40"></div>
        <div class="col-md-12 bg-gris">
            <h5 class="verde"><strong>Registro de usuario</strong></h5>
            <div class="col-md-6">
                <p>Nombre de Usuario</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <p>Clave</p>
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control">
            </div>
            <div class="col-md-6">
                <p>Repita Clave</p>
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control">
            </div>
            <div class="col-md-6">
                <p>País</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <p>RUT (ej:12.345.678-9)</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <p>E-Mail de Recepción de Ofertas</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <p>Digite nuevamente su Correo Electrónico</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <p>¿Cómo se enteró de este sitio?</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="clear20"></div>
        </div>
        <div class="clear10"><em><small>Campos obligatorios</small></em></div>
        <div class="clear30"></div>
        <div class="col-md-12 bg-gris">
            <h5 class="verde"><strong>Pregunta secreta</strong></h5>
            <div class="col-md-6">
                <p>Pregunta Secreta</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <p>Respuesta a su pregunta</p>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="clear20"></div>
        </div>
        <div class="clear10"><em><small>Campos obligatorios</small></em></div>
        <div class="clear30"></div>
        <div class="col-md-12 bg-gris">
            <h5 class="verde"><strong>Susripción</strong></h5>
            <div class="radio">
                <label>
                    <input type="radio" name="suscripcion" value="op1" checked>
                    Sí, deseo recibir ofertas de empleo e información Laboral.
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="suscripcion" value="op2">
                    Sí, deseo recibir ofertas de cursos y/o postgrados.
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="suscripcion" value="op3">
                    Sí, deseo recibir información de cómo ayudar.
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="suscripcion" value="op4">
                    Sí, deseo suscribirme al newsletter, novedades y comunicados.
                </label>
            </div>
            <div class="clear20"></div>
        </div>
        <div class="clear5"></div>
        <div class="col-md-12 bg-gris">
            <div class="radio">
                <label>
                    <input type="radio" name="acepto" value="acepto">
                    He leído y acepto los Términos y Condiciones de Servicio.
                </label>
            </div>
        </div>
        <div class="clear10"><em><small>Campos obligatorios</small></em></div>
        <div class="clear20"></div>
        <div class="nota">
            <?php the_content();?>
        </div>
    </div>
</div>

<?php get_footer(); ?>