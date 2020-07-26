<?php

//GOOGLE FONTS
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700&family=Playfair+Display:wght@400;600;700;800&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//STYLESHEETS
function load_css(){
    //Bootstrap styles
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all'); 
    wp_enqueue_style('bootstrap');

    //Custom Styles
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); 
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css'); 

//JAVASCRIPT
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap'); 
}
add_action('wp_enqueue_scripts', 'load_js');


//THEME OPTIONS
add_theme_support('menus'); 
add_theme_support('post-thumbnails'); 
add_theme_support('widgets'); 


//MENUS
register_nav_menus(
array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
));


//REGISTER SIDEBARS
function my_sidebars(){

register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    )
    );

register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    )
    );

}
add_action('widgets_init', 'my_sidebars');

//CUSTOM POST TYPE
function my_first_post_type(){

    $args = array(
        'labels' => array(
            'name' => 'Homes',
            'singular_name' => 'Home'
        ),
        'hierarchical' => true, 
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        // 'rewrite' => array('slug' => 'my-homes')
    );

    register_post_type('homes', $args);

}
add_action('init', 'my_first_post_type');



function my_first_taxonomy(){
    $args = array(
        'labels' => array(
            'name' => 'Types',
            'singular_name' => 'Type',
        ),
        'hierarchical' => true, 
        'public' => true
    );
    register_taxonomy('types', array('homes'), $args);

};
add_action('init', 'my_first_taxonomy');


add_filter('acf/format_value/name=price', 'fix_price_comma', 20, 3);
function fix_price_comma($value, $post_id, $field) {
  $value = number_format($value);
  return $value;
}
add_filter('acf/format_value/name=sqft', 'fix_comma', 20, 3);
function fix_comma($value, $post_id, $field) {
  $value = number_format($value);
  return $value;
	}


//CUSTOM IMAGE SIZES
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);


