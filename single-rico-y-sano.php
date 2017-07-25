<?php 
get_header();
the_post();
?>

<div class="contenedor-interior single-sano-rico">
    <div class="interior-side">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
    </div>
    <div class="interior-content parrafos noticias rico-sano">
        <div class="overflow-rico-sano">
            <div class="col-md-7">
                <?php 
                $titulo = get_field('titulo');
                if(!empty($titulo)){ ?>
                    <h2 class="<?php echo get_field('color_titulo'); ?>"><?php echo $titulo;?></h2>
                    <?php 
                    $subtitulo = get_field('subtitulo');
                    if(!empty($subtitulo)){ ?>
                        <h3 class="<?php echo get_field('color_titulo'); ?>"><?php echo $subtitulo;?></h3>
                    <?php } ?>
                <?php }else {?> 
                    <h2 class="<?php echo get_field('color_titulo'); ?>"><?php the_title(); ?></h2>
                    <?php 
                    $subtitulo = get_field('subtitulo');
                    if(!empty($subtitulo)){ ?>
                        <h3 class="<?php echo get_field('color_titulo'); ?>"><?php echo $subtitulo;?></h3>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="col-md-5"><a href="/rico-y-sano/"><img src="<?php bloginfo('template_url'); ?>/images/banner-rico-sano.jpg" class="img-responsive pull-right"></a></div>
        </div>
        <div class="contenedor-singles">
            <?php 
            $contenido = get_field('contenido');
            if(!empty($contenido)){ ?>
                <?php echo $contenido;?>
            <?php } ?>
            <?php 
            $content = the_content();
            if(!empty($content)){ ?>
                <?php echo $content;?>
            <?php } ?>
            <ul class="lista">
                <?php 
                $lista = get_field('lista');
                if(!empty($lista)){ ?>
                    <?php foreach ($lista as $listar) {?>
                        <li><span class="<?php echo get_field('color_titulo'); ?>">.</span><?php echo $listar['texto'];?></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>

