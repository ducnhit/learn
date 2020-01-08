<?php
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class User_Plugin {
    public function __construct() {
        function add_admin_menu()
        {
            add_menu_page (
                    'Plugin Options', 
                    'Plugin Options', 
                    'manage_options', 
                    'plugin-options', 
                    'show_plugin_options', 
                    '', 
                    '2'
            );
        }
        
        function show_plugin_options()
        {
            include('chart.php');
            echo '<h1>Đây là trang Plugin Options 333</h1>';
        }
        
        add_action('admin_menu', 'add_admin_menu');
        add_action('admin_head',array($this,'add_css'));
        add_action('admin_head',array($this,'add_js'));
        add_action('admin_head',array($this,'add_js2'));
    }

    public function activation_hook() {

    }

    public function deactivation_hook() {
        
    }

    public function add_css() {
        $cssUrl = USER_PLUGIN_CSS_URL . '/cuctom.css';
        $output = '<link rel="stylesheet" href="' . $cssUrl . '" type="text/css" media="all">';
        echo $output;
    }

    public function add_js() {
        $jsUrl = USER_PLUGIN_JS_URL . '/utils.js';
        $output = '<script src="' . $jsUrl .'"></script>';
        echo $output;
    }

    public function add_js2() {
        $jsUrl = USER_PLUGIN_JS_URL . '/Chart.min.js';
        $output = '<script src="' . $jsUrl .'"></script>';
        echo $output;
    }
}