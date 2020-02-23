<?php


/**
 * Agregar CMB2
 */

 require_once dirname(__FILE__) . '/cmb2.php';

 /**
* Carga campos personalizados
  
  */
  require_once dirname(__FILE__) . '/inc/custom-fields.php';


/**
 * Activar Imagen Destacada
 */

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    set_post_thumbnail_size( 600, 600, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }


/**
 * Funciones que se cargan al activar el tema
 */

function indie_setup(){

    // Definir Tamaño de las imagenes

    add_image_size('mediano', 330, 270, true);

    // Menu de navegacion
    register_nav_menus(array(
        'menu-principal' => esc_html__('Menu Principal', 'indie157')
    ));
}
add_action('after_setup_theme','indie_setup');

/**
 * Agrega la clase nav link de bootstrap al menu principal
 */
function indie_enlace_class($atts, $item, $args){
    if ($args ->theme_location == 'menu_principal') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes','indie_enlace_class', 10,3);


/**
 *  Carga los Scripts y CSS del Tema
 */

function indie_scripts() {
    /** Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', false, '4.3');
    wp_enqueue_style('fontawesome-style', get_stylesheet_directory_uri().'/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css', 'fontawesome-style') );
    

    /** Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.js', array('jquery'),'1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('popper'),'1.0', true);
    
}
add_action('wp_enqueue_scripts', 'indie_scripts');

/**
 * Funcion para el menu de bootstrap
 */

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );