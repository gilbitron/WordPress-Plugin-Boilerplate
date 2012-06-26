<?php
/*
Plugin Name: WordPress Plugin Boilerplate
Plugin URI: http://dev7studios.com
Description: A simple boilerplate for your WordPress plugins.
Version: 1.0
Author: Gilbert Pellegrom
Author URI: http://dev7studios.com
Author Email: gilbert@pellegrom.me
License: GPL2
*/

class WordPressPluginBoilerplate {

    function __construct() 
    {	
        // Set up some defaults
        register_activation_hook( __FILE__, array(&$this, 'activate') );
        register_deactivation_hook( __FILE__, array(&$this, 'deactivate') );
        load_plugin_textdomain( 'plugin-name-locale', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );
        
        // Use the constructor to add your own hooks/filters
        add_action( 'init', array(&$this, 'init') );
    }
    
    function activate( $network_wide ) 
    {
    
    }
    
    function deactivate( $network_wide ) 
    {
    
    }
    
    function init()
    {
    
    }

}
new WordPressPluginBoilerplate();

?>