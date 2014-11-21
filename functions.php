<?php
/**
 * Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions including 
 * custom template tags, actions and filter hooks to change core functionality.
 *
 *
 * @package Starter_Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) :
    $content_width = 600;
endif;

if ( ! function_exists( 'starter_theme_setup' ) ):
    function starter_theme_setup() {

        // Make theme available for translation.
        // Translations can be filed in the /languages/ directory.
        load_theme_textdomain( 'starter-theme', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Enable support for Post Thumbnails on posts and pages
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size(200, 200, true);
        add_image_size('Blog Archive', 550, 290, true);
        add_image_size('Banner', 1000, 600, true);

        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array( 
            'aside',
            'image',
            'video',
            'quote',
            'link'
        ) );

        // Enable support for HTML5 markup.
        add_theme_support( 'html5', array(
            'comment-list',
            'search-form',
            'comment-form',
            'gallery',
        ) );

        // Enable support for editable menus via Appearance > Menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'starter-theme' ),
            'footer' => __('Footer Menu', 'starter-theme'),
        ) );

        // Add custom image sizes
        // add_image_size( 'name', 500, 300, true );
    }
endif; // starter_theme_setup
add_action( 'after_setup_theme', 'starter_theme_setup' );

/**
 * Register sidebars and widgetized areas
 */
function starter_theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'starter-theme' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'starter_theme_widgets_init' );

/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function starter_theme_scripts() {
    // theme style.css file
    wp_enqueue_style( 'starter-theme-style', get_stylesheet_uri() );
    wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/assets/vendor/fancybox/jquery.fancybox.css' );

    // threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


    //jquery

    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null, true);
    wp_enqueue_script('jquery');

    // vendor scripts
 wp_enqueue_script(
     'vendor',
     get_template_directory_uri() . '/assets/vendor/html5shiv.min.js',
     array('jquery')
 );

 wp_enqueue_script(
    'isotope',
    get_template_directory_uri() . '/assets/vendor/isotope.pkgd.min.js',
    array('jquery')
    );

 wp_enqueue_script(
    'fancybox',
    get_template_directory_uri() . '/assets/vendor/fancybox/jquery.fancybox.js',
    array('jquery')
    );

    // theme scripts
 wp_enqueue_script(
     'theme-init',
     get_template_directory_uri() . '/assets/theme.js',
     array('jquery')
 );

 wp_enqueue_script(
    'imagesloaded',
    get_template_directory_uri() . '/assets/vendor/imagesloaded.pkgd.min.js',
    array('jquery')

    );


}    


add_action('wp_enqueue_scripts', 'starter_theme_scripts', 11 );



/**
 * Remove the front-end admin bar for everybody, always
 */
show_admin_bar( false );

// Add TinyMCE buttons that are disabled by default
//function themeFunction_mce_buttons_2($buttons) {  
//  /**
//   * Add in a core button that's disabled by default
//   */
//  $buttons[] = 'justify'; // fully justify text
//  $buttons[] = 'hr'; // insert HR
//
//  return $buttons;
//}
//add_filter('mce_buttons_2', 'themeFunction_mce_buttons_2');

// Remove all colors except those custom colors specified from TinyMCE
//function themeFunction_change_mce_options( $init ) {
//  $custom_colors = '"#####1", "Color Name 1", "#####2", "Color Name 2", "#####3", "Color Name 3"';    
//  $init['textcolor_map'] = '['.$custom_colors.']';
//return $init;
//}
//add_filter('tiny_mce_before_init', 'themeFunction_change_mce_options');

//load Bootstrap CDN


add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */
function prefix_enqueue_awesome() {
    wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
}



//removes image link by default

function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

