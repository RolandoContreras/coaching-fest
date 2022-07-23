<?php
function agregar_css_js() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'assets.min', get_template_directory_uri() . '/css/assets.min.css?_build=1651497944', array(), '1.1', 'all');
  wp_enqueue_script( 'script_home', get_template_directory_uri() . '/js/home.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'assets', get_template_directory_uri() . '/js/website.assets.min.js?_build=1651497944', array ( 'script_home' ), 1.1, true);
  wp_enqueue_script( 'website', get_template_directory_uri() . '/js/website.min.js?_build=1651497944', array ( 'assets' ), 1.1, true);
  
    /*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }*/
}
add_action( 'wp_enqueue_scripts', 'agregar_css_js' );


//soporte imagen destacada

function tema1_setup(){
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
    } 

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tema1_setup');