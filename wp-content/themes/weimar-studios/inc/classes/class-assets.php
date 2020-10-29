<?php
/**
 * Enqueue Theme Assets
 * 
 * @package Weimar
 */
namespace WEIMAR_STUDIO\Inc;
use WEIMAR_STUDIO\Inc\Traits\Singleton;

class Assets{
    use Singleton;
    protected function __construct(){
        $this->setup_hooks();

    }

    protected function setup_hooks(){
        /**
         * Action and Filters
         */
        add_action('wp_enqueue_scripts',[$this,'register_styles']);
        add_action('wp_enqueue_scripts',[$this,'register_scripts']);
    }

    public function register_styles(){
        //Register Styles
        // wp_register_style( "style.css", MASTER_DIR_URI.'/style.css',[],filemtime(get_stylesheet_directory().'/style.css'),'all');

        wp_register_style("weimar_main_styles", WEIMAR_DIR_URI.'/style.css',[],filemtime(get_stylesheet_directory().'/style.css'),'all');
        
        //Enqueue Styles
        wp_enqueue_style( "weimar_main_styles" );
    }   

    public function register_scripts(){
        //Register Scripts.

        wp_register_script("app-js",WEIMAR_DIR_URI.'/assets/js/app.js',NULL,'1.0',true );
        wp_register_script("app1-js",WEIMAR_DIR_URI.'/assets/js/app1.js',NULL,'1.0',true );

        
       //Enqueue Scripts:
   
        wp_enqueue_script('app-js');
        wp_enqueue_script('app1-js');
   }

}