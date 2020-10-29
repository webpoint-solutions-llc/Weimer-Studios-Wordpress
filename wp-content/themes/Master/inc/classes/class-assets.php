<?php
/**
 * Enqueue theme assets
 * 
 * @package Master
 * 
 */
namespace MASTER_THEME\Inc;
use MASTER_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;

    protected function __construct() {

		// Load class.
		$this->setup_hooks();

	}

	protected function setup_hooks() {

		/**
		 * Actions And FIlters
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action("wp_enqueue_scripts",[$this,'register_scripts']);

	}
	public function register_styles(){
		// Register styles
		wp_register_style( "style.css", MASTER_DIR_URI.'/style.css',[],filemtime(get_stylesheet_directory().'/style.css'),'all');
	    wp_register_style( "Bootstrap-css", MASTER_DIR_URI .'/style.css',[],filemtime(get_stylesheet_directory().'/style.css'),'all');
		// Enqueue Styles
		wp_enqueue_style('style.css');
		wp_enqueue_style('Bootstrap-css');


	}
	public function register_scripts(){
		 //Register Scripts.
		wp_register_script("main-js",get_theme_file_uri().'/assets/main.js',TRUE );

		//Enqueue Scripts:
		wp_enqueue_script('main-js');

	}
    

}