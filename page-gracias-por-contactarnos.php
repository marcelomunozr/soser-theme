<?php 
/*
Template Name: Gracias contacto
*/
get_header();
?>
<!-- Google Code for Contacto v1 Conversion Page -->
	<script type="text/javascript">
		/* <![CDATA[ */
			var google_conversion_id = 960387317;
			var google_conversion_language = "en";
			var google_conversion_format = "2";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "t-ncCJansFkQ9bH5yQM";
			var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/960387317/?label=t-ncCJansFkQ9bH5yQM&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
	<div class="contenedor-interior">
	    <div class="bg-blanco">
	        <div class="interior-side">
	            <img src="<?php bloginfo('template_url'); ?>/images/contacto-top.jpg" class="img-responsive">
	        </div>
	        <div class="interior-content">
	            <h2 class="naranjo"><?php the_title(); ?></h2>
	        </div>
	        <div class="clearfix"></div>
	    </div>
	    <div class="interior-side">
	        <?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
	    </div>
	    <div class="interior-content parrafos <?php if ( is_page( 'sucursales' )){ echo 'sucursales';} ?>">
	        <?php the_content();?>
	        <div class="clear20"></div>
	    </div>
	</div>

<?php get_footer(); ?>