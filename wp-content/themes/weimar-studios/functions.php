<?php
/**
 * Theme Function
 * 
 * @package Weimar
 */


if ( !defined( "WEIMAR_DIR_PATH") ){
    define( "WEIMAR_DIR_PATH",untrailingslashit( get_template_directory( ) )  );
}

if (!defined( "WEIMAR_DIR_URI" ) ){
    define("WEIMAR_DIR_URI", untrailingslashit( get_template_directory_uri( ) ));
}


require_once WEIMAR_DIR_PATH . '/inc/helpers/autoloader.php';

function include_jquery(){

    wp_deregister_script("jquery");
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/jquery-3.5.1.min.js',"",1,true);

    add_action("wp_enqueue_scripts",'jquery');
}
add_action("wp_enqueue_scripts","include_jquery");

function Intialize_Weimar_Get_Theme_Instance(){
    \WEIMAR_STUDIO\Inc\WEIMAR_THEME::get_instance();

}
Intialize_Weimar_Get_Theme_Instance();











function weimar_files(){
    wp_enqueue_script('slick-js', get_theme_file_uri("/js/slick.js"),NULL,'1.0',true);
    wp_enqueue_script('app-js', get_theme_file_uri("/js/app.js"),NULL,'1.0',true);
  


    wp_enqueue_style('weimar_main_styles',get_stylesheet_uri());

}   
