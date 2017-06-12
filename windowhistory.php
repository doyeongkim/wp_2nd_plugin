<?php

/*
Plugin Name: Window History
Description: Wordpress plugin for windowhistory
Version: 070617
Author: Kim
*/

function windowhistory_js_add() {
   wp_register_script('windowhistory-script', plugins_url('/js/windowhistory.js', __FILE__));

    wp_enqueue_script('windowhistory-script');
}

add_action("wp_enqueue_scripts", "windowhistory_js_add");

?>
