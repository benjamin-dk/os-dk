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
 * Custom function to remove h-tags from excerpt and set length
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

        $excerpt_length = apply_filters('excerpt_length', 10);
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $excerpt = wp_trim_words( $excerpt, $excerpt_length, $excerpt_more );


return apply_filters('wp_trim_excerpt', preg_replace($regex,'', $excerpt), $raw_excerpt);
}
add_filter( 'get_the_excerpt', 'wp_strip_header_tags', 9);


/**
 * Replaces the excerpt "more" text by a button
 * @param  [type] $more [description]
 * @return string $more_link The HTML to be displayed as a more link
 */
function new_excerpt_more($more) {
    global $post;
    $more_link = ' ... <a href="' . get_permalink() . '" rel="bookmark" title="' . urlencode(the_title_attribute('echo=0')) . '" class="btn btn-primary">Læs mere &rsaquo;</a>';
    return $more_link;
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * override parent theme's 'more' text for excerpts
 */
function child_theme_setup() {
    remove_filter( 'excerpt_more', 'bones_excerpt_more' ); 
    //remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );

/**
 * Add custom taxonomies for opensource.dk
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
    // Add new "License" taxonomy to Posts and Cases
    register_taxonomy('license', array( 'case', 'post' ), array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Licenser', 'taxonomy general name' ),
            'singular_name' => _x( 'Licens', 'taxonomy singular name' ),
            'search_items' =>  __( 'Søg Licenser' ),
            'all_items' => __( 'Alle Licenser' ),
            'parent_item' => __( 'Parent Licens' ),
            'parent_item_colon' => __( 'Parent Licens:' ),
            'edit_item' => __( 'Redigér Licens' ),
            'update_item' => __( 'Opdater Licens' ),
            'add_new_item' => __( 'Tilføj ny Licens' ),
            'new_item_name' => __( 'Ny Licens navn' ),
            'menu_name' => __( 'Licenser' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'licenser', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

/**
 * New content type for Open source cases
 */
function opensource_custom_init() {
  $labels = array(
    'name'               => 'Cases',
    'singular_name'      => 'Case',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Case',
    'edit_item'          => 'Edit Case',
    'new_item'           => 'New Case',
    'all_items'          => 'All Cases',
    'view_item'          => 'View Case',
    'search_items'       => 'Search Cases',
    'not_found'          => 'No Cases found',
    'not_found_in_trash' => 'No Cases found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Cases'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'case' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
    'taxonomies'         => array( 'category', 'post_tag', 'license')
  );

  register_post_type( 'case', $args );
}
add_action( 'init', 'opensource_custom_init' );

/**
 * Adding support for custom thumbnails sizes
 */
add_theme_support( 'post-thumbnails' );


/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'sidebar-thumb', 220, 180 ); // Soft Crop Mode
}

function opensource_custom_type_in_categories( $query ) {
    if ( $query->is_main_query()
    && ( $query->is_category() || $query->is_tag() ) ) {
        $query->set( 'post_type', array( 'post', 'case' ) );
    }
}
add_action( 'pre_get_posts', 'opensource_custom_type_in_categories' );

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