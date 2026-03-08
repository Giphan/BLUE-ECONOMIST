<?php
/**
 * The Blue Reviewer functions and definitions
 *
 * @package The_Blue_Reviewer
 */

// Exit if accessed directly to prevent security vulnerabilities
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup: Defines theme features and registration
 */
if ( ! function_exists( 'the_blue_reviewer_setup' ) ) :
    function the_blue_reviewer_setup() {
        // SEO: Let WordPress manage the document title
        add_theme_support( 'title-tag' );

        // RSS: Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        // Standard: Switch default core markup to output valid HTML5
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Branding: Allow users to upload a custom logo
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // Media: Enable Featured Images for high-quality product reviews
        add_theme_support( 'post-thumbnails' );

        // Navigation: Register the primary header menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'the-blue-reviewer' ),
        ) );

        // Sidebar: Register area for affiliate widgets or Amazon banners
        register_sidebar( array(
            'name'          => esc_html__( 'Main Sidebar', 'the-blue-reviewer' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Widgets in this area will be shown on posts and pages.', 'the-blue-reviewer' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'the_blue_reviewer_setup' );

/**
 * Enqueue Styles and Scripts: The proper way to load assets
 */
function the_blue_reviewer_scripts() {
    // Load main style.css
    wp_enqueue_style( 'the-blue-reviewer-style', get_stylesheet_uri(), array(), '1.2', 'all' );

    // External: Load Segoe UI/Google Fonts for a modern review site look
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap', false );

    // Icons: Font Awesome for product ratings and social icons
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0' );

    // JavaScript: Load main.js only if it exists in the theme folder
    if ( file_exists( get_template_directory() . '/js/main.js' ) ) {
        wp_enqueue_script( 'the-blue-reviewer-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'the_blue_reviewer_scripts' );

/**
 * Search Customization: Tailor the search for product discovery
 */
function the_blue_reviewer_search_form( $form ) {
    $form = '<form role="search" method="get" class="searchform" action="' . esc_url( home_url( '/' ) ) . '" >
    <div>
        <input type="search" value="' . get_search_query() . '" name="s" placeholder="Find a product review..." aria-label="Search Products" />
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'the_blue_reviewer_search_form' );

/**
 * Review Layout: Control excerpt length and "Read More" link
 */
function the_blue_reviewer_excerpt_length( $length ) {
    return 25; // 25 words to keep the homepage grid uniform
}
add_filter( 'excerpt_length', 'the_blue_reviewer_excerpt_length', 999 );

function the_blue_reviewer_excerpt_more( $more ) {
    return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read Full Review &rarr;</a>';
}
add_filter( 'excerpt_more', 'the_blue_reviewer_excerpt_more' );

/**
 * Background Support: Allow easy changes to the dark theme background
 */
add_theme_support( 'custom-background', array(
    'default-color' => '2c2c2c',
) );
