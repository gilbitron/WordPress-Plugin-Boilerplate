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

    private $plugin_path;
    private $plugin_url;

    function __construct() 
    {	
        // Set up default vars
        $this->plugin_path = plugin_dir_path( __FILE__ );
        $this->plugin_url = plugin_dir_url( __FILE__ );
        // Set up activation hooks
        register_activation_hook( __FILE__, array(&$this, 'activate') );
        register_deactivation_hook( __FILE__, array(&$this, 'deactivate') );
        // Set up l10n
        load_plugin_textdomain( 'plugin-name-locale', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );
        
        // Add your own hooks/filters
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