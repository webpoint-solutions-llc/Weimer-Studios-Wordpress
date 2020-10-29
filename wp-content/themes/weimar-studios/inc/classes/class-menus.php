<?php
/**
 * 
 * Register Menus
 * 
 * @package Weimar
 * 
 */

 namespace WEIMAR_STUDIO\Inc;
 use \WEIMAR_STUDIO\Inc\Traits\Singleton;

 class Menus{
     use Singleton;

     protected function __construct(){
        $this->setup_hooks();
     }
     public function setup_hooks(){
         /**
          * Actions:
          */
        add_action('init',[$this,'register_menus']);
         
     }
     public function register_menus(){
         register_nav_menus( [
             'weimar-header-menu' => esc_html( 'Header Menu','weimar' ),
             'weimar-footer-menu' => esc_html( 'Footer Menu','weimar')
         ] );
     }
     public function get_menu_id($location){
         //Getting all the menu location 
         $locations = get_nav_menu_locations();
         //Get id From location
         $menu_id = $locations[$location];
 
        return ! empty($menu_id) ? $menu_id : "";
         
     }
     public function get_child_menu_items($menu_array,$parent_id){
        $child_menus = [];

        if( ! empty( $menu_id  ) && is_array( $menu_array ) ){
            foreach( $menu_array as $menu){
                if( intval( $menu->menu_item_parent) === $parent_id) {
                    array_push($child_menus,$menu);
                }
            }

        }
        return $child_menus;

     }
 }