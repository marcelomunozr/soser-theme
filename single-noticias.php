<?php get_header();?>
<?php the_post();?>
<?php $query = get_page_by_path('noticias');?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'single-post-thumbnail' ); ?>
    <div class="contenedor-interior">
        <div class="bg-blanco">
            <div class="interior-side">
                <img src="<?php bloginfo('template_url'); ?>/images/noticias-top.jpg" class="img-responsive">
            </div>
            <div class="interior-content">
                <h2 class="<?php echo get_field('color_noticia'); ?>"><?php the_title(); ?></h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="interior-side">
            <img src="<?php echo $image[0];?> " class="img-responsive">
        </div>
        <div class="interior-content parrafos noticias-single">
            <div class="col-md-7"><?php the_content();?></div>
            <div class="col-md-5"><?php the_post_thumbnail('full', array('class' => 'img-responsive'));?></div>
            <div class="clear20"></div>
        </div>
    </div>

<?php get_footer(); ?>