<?php

/*
Plugin Name: Scroll Down
Description: Wordpress plugin for scrolldown
Version: 120617
Author: Kim
*/

function scrolldown_js_add() {
   wp_register_script('scrolldown-script', plugins_url('/js/scrolldown.js', __FILE__));

    wp_enqueue_script('scrolldown-script');
}

add_action("wp_enqueue_scripts", "scrolldown_js_add");

?>
