<?php
/**
 * 
 * #######################################
 * #### Name Space Virtual Directory ######
 *-------------- WEIMAR_STUDIO\Inc
 *-------------- WEIMAR_STUDIO\Inc\Helpers
 *-------------- WEIMAR_STUDIO\Inc\Traits
 *########################################
 * @package Weimar
 */
namespace WEIMAR_STUDIO\Inc\Traits;

trait Singleton {
    protected function __construct(){
    }
    final protected function __clone() {
    }
    /**
	 *
	 * @return object Singleton instance of the class.
	 */
	final public static function get_instance() {

		/**
		 * Collection of instance.
		 *
		 * @var array
		 */
		static $instance = [];

	
		$called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {

			$instance[ $called_class ] = new $called_class();

			/**
			 * Dependent items can use the `aquila_theme_singleton_init_{$called_class}` hook to execute code
			 */
			do_action( sprintf( 'weimar_theme_singleton_init_%s', $called_class ) ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores

		}

		return $instance[ $called_class ];

	}

} // End trait
