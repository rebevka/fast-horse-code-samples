<?php
add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function register_scripts(){
	if (!is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', '1.11.1', true);
		wp_enqueue_script('jquery');

		wp_register_script('twitter', get_template_directory_uri() . '/js/twitter.min.js', array(), '1.0.0', true);
		wp_enqueue_script('twitter');

		wp_register_script('text-rotator', get_template_directory_uri() . '/js/text-rotator.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('text-rotator');

		wp_register_script('main', get_template_directory_uri() . '/js/main.js',  array('jquery'), '1.0.0', true);
		wp_enqueue_script('main');

		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Bad+Script|Josefin+Slab|Marck+Script|Montserrat:200,300,400|Open+Sans:300,400|Diplomata+SC');
		wp_enqueue_style('google-fonts');

		wp_register_style('skel', get_template_directory_uri() . '/css/skeleton.css');
		wp_enqueue_style('skel');

		wp_register_style('norm', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style('norm');

		wp_register_style('main-style', get_template_directory_uri() . '/css/main.css');
		wp_enqueue_style('main-style');
	}
}

add_action('wp_enqueue_scripts', 'register_scripts');

?>