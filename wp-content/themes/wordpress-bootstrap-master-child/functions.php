<?php

/**
 * opensource.dk custom functions
 **/


/**
 * opensource.dk custom widget for the target group thumbnail area on the front page
 **/
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Target group thumbnails',
        'id' => 'target-group-thumbnail',
        'description' => 'Add the target group thumbnail code here.',
        'before_widget' => '<div id="%1$s" class="widget span4 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}

/**
 * Add child theme javascripts
 **/
/*
add_action('init', 'add_javascript');

function add_javascript() {

	// Add JQuery
    wp_enqueue_script('jquery');
    
    // Add the scripts
    $js_url = get_bloginfo('stylesheet_directory') . '/js';
    wp_enqueue_script('festival_menu',"$js_url/festival.js");
}
*/
// EOF