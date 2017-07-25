<!doctype html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title( '|', true, 'right' ); ?>SOSER - Servicios de Alimentación</title>
        <meta name="description" content="">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/ico" />
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <!--
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        -->

        <script src="<?php bloginfo('template_url'); ?>/js/html5.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css">
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> id="<?php if ( is_page( 'rico-y-sano' )){ echo 'rico-y-sano';} ?>">
        <div class="container">
            <div class="row">
                <header>
                    <div class="col-md-6 logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-soser.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 sociales">
                        <span id="ver-menu"><i class="fa fa-navicon"></i></span>
                        <a href="/" class="home-ico"><i class="fa fa-home"></i></a>
                       <!-- <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="nav <?php if ( is_home()|| is_front_page() || is_page( 'rico-y-sano' )){ echo 'sub-menu-important';} ?> nav-justified" id="menu">
                        <li class="li-class"><a href="/">Inicio</a></li>
                        <li class="expand li-class"><a href="/nosotros/quienes-somos/">Nosotros</a>
                            <ul class="sub-menu">
                                <li><a href="/nosotros/quienes-somos/">Quiénes Somos</a></li>
                                <li><a href="/nosotros/mision-vision-valores/">Misión Visión Valores</a></li>
                                <li><a href="/nosotros/organigrama/">Organigrama</a></li>
                                <li><a href="/nosotros/sucursales/">Sucursales</a></li>
                            </ul>
                        </li>
                        <li class="expand li-class"><a href="/servicios/">Servicios</a>
                            <ul class="sub-menu">
                                <li><a href="/servicios/alimentacion-escolar-universitaria">Alimentación Escolar y Universitaria</a></li>
                              
                                <li><a href="/servicios/alimentacion-institucional">Alimentación Institucional</a></li>
                            </ul>
                        </li>
                        <li class="li-class"><a href="/proveedores/">Proveedores</a></li>
                        <li class="li-class"><a href="/noticias/">Noticias</a></li>
                        <li class="expand li-class"><a href="/trabaja-con-nosotros/">Trabaja en Soser</a>
                            <ul class="sub-menu">
                                <li><a href="http://stc.laborum.cl/soser/home.html" target="_blank">Ingresar CV</a></li>
                                <li><a href="http://stc.laborum.cl/soser/home.html" target="_blank">Ver Ofertas</a></li>
                                <li class="rrhh"><a href="http://www.laborum.cl/empleadores/index.html" target="_blank">Acceso RRHH</a></li>
                            </ul>
                        </li>
                        <li class="li-class"><a href="/contacto/">Contacto</a></li>
                    </ul>

                    <?php //wp_nav_menu(array('menu'=>'header-menu', 'theme_location' => 'main', 'container_id' => 'menu')); ?>
                </header>