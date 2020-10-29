<?php
/**
 * Master Controller
 * 
 * #######################################
 * #### Name Space Virtual Directory ######
 *-------------- WEIMAR_STUDIO\Inc
 *-------------- WEIMAR_STUDIO\Inc\Helpers
 *-------------- WEIMAR_STUDIO\Inc\Traits
 *########################################
 * @package Weimar
 */
namespace WEIMAR_STUDIO\Inc;
use \WEIMAR_STUDIO\Inc\Traits\Singleton;

class WEIMAR_THEME {
    use Singleton;

    protected function __construct() {
        //Load Classes
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();

    }

    protected function setup_hooks(){
        /**
         * Actions
         */
        add_action('after_setup_theme',[$this,'setup_theme']);

    }
    public function setup_theme(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo',[
            'header-text' => ['site-title','site-description'],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,

        ]);
        add_theme_support( 'customize-selective-refresh-widgets');
		add_theme_support('automatic-feed-links');
		add_theme_support('html5',
		['search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		]);
	
		add_theme_support( 'wp-block-styles' );

    
    }

    
}