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
 * Custom function to remove h-tags from excerpt
 * @param  string $excerpt [description]
 * @return [type]          [description]
 */
function wp_strip_header_tags( $excerpt='' ) {

    $raw_excerpt = $excerpt;
    if ( '' == $excerpt ) {
        $excerpt = get_the_content(''); 
        $excerpt = strip_shortcodes( $excerpt );
        $excerpt = apply_filters('the_content', $excerpt);
        $excerpt = str_replace(']]>', ']]&gt;', $excerpt);
    }

$regex = '#(<h([1-6])[^>]*>)\s?(.*)?\s?(<\/h\2>)#';
        $excerpt = preg_replace($regex,'', $excerpt);
        $excerpt = $excerpt . '...';

        $excerpt_length = apply_filters('excerpt_length', 20);
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $excerpt = wp_trim_words( $excerpt, $excerpt_length, $excerpt_more );


return apply_filters('wp_trim_excerpt', preg_replace($regex,'', $excerpt), $raw_excerpt);
}
add_filter( 'get_the_excerpt', 'wp_strip_header_tags', 9);


/**
 * Replaces the excerpt "more" text by a button
 * @param  [type] $more [description]
 * @return [type]       [description]
 */
function new_excerpt_more($more) {
    global $post;
    return ' ... <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Læs mere &rsaquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * override parent theme's 'more' text for excerpts
 * @return [type] [description]
 */
function child_theme_setup() {
    remove_filter( 'excerpt_more', 'bones_excerpt_more' ); 
    //remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );

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