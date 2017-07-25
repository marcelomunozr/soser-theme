<?php
add_theme_support( 'post-thumbnails' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('header-interior',__( 'Header Interior' ));
}
add_action( 'init', 'register_my_menu' );


?>
