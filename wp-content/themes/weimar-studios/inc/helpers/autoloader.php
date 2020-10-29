<?php
/**
 * AutoLoader file for theme:
 * 
 * 
 * #######################################
 * #### Name Space Virtual Directory ######
 *-------------- WEIMAR_STUDIO\Inc
 *-------------- WEIMAR_STUDIO\Inc\Helpers
 *-------------- WEIMAR_STUDIO\Inc\Traits
 *########################################
 * @package Weimar
 */
namespace WEIMAR_STUDIO\Inc\Helpers;
/**
 * Auto loader function.
 *
 * @param string $resource Source namespace.
 *
 * @return void
 */

function autoloader($resource = ""){
    $resource_path = false;
    $namespace_root = "WEIMAR_STUDIO\\";

    $resource = trim($resource,'\\');
   

    if ( empty($resource) || strpos($resource,'\\') ===false ){
        //Doesn't contain our namespace
        return;
    }

    //To Remove Root Namespace
    $resource = str_replace($namespace_root,"",$resource);
   
    $path = explode("\\",str_replace('_','-',strtolower($resource) ));

    if( !empty($path[0]) || empty($path[1]) ){
        $directory = '';
        $file_name = '';
        
        if( 'inc' === $path[0] ){
            switch($path[1]){
                case 'traits':
                    $directory = 'traits';
                    $file_name = sprintf("trait-%s",trim( strtolower( $path[2] ) ) );
                break;
                case "widgets";
                case 'blocks': // phpcs:ignore PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
                    /**
                     * If there is class name provided for specific directory then load that.
                     * otherwise find in inc/ directory.
                     */
                    if ( ! empty( $path[2] ) ) {
                        $directory = sprintf( 'classes/%s', $path[1] );
                        $file_name = sprintf( 'class-%s', trim( strtolower( $path[2] ) ) );
                        break;
                    }
                default:
                    $directory = 'classes';
                    $file_name = sprintf( 'class-%s', trim( strtolower( $path[1] ) ) );
                    break;

            }


            $resource_path = sprintf("%s/inc/%s/%s.php",untrailingslashit( WEIMAR_DIR_PATH ),$directory,$file_name); 

        }

        $is_valid_file = validate_file( $resource_path );

        if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {
        
            require_once( $resource_path ); // phpcs:ignore
        }


    }

}
spl_autoload_register('\WEIMAR_STUDIO\Inc\Helpers\autoloader');