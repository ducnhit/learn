<?php
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class User_Plugin_API {
    public static function get_JSON($json) {
        return json_decode($json, true);
    }

    public static function request($city = 'Ho+Chi+Minh', $like = true, $mode = 'json') {
        $type = ($like) ? 'like' : 'accurate';
        $city = urlencode(trim($city));
        $url = ''
    }

    public function deactivation_hook() {
        
    }
}