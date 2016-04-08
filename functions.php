<?php

// NO ADMIN BAR
add_filter('show_admin_bar', '__return_false');


// POST THUMBS
add_theme_support( 'post-thumbnails' );


// SHOW HOME IN MENU
function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


// MENUS
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'headermenu'      => __( 'Header Menu' ),
			'footermenu'      => __( 'Footer Menu' )
		)
	);
}


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// BOOTSTRAP SUBMENU FIX
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}



?>
