<?php












function myheadless_setup() {

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Main Menu', 'myheadless' ),
        'secondary' => esc_html__( 'Footer Menu', 'myheadless' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    // add theme support for custom logo
    add_theme_support('custom-logo', [
        'height' => 50,
        'width' => 200,

    ]);

    // add theme support for custom header image.
    add_theme_support('custom-header', [
        'header-text' => true,
        'height' => 500,
        'width' => 2560,
        'flex-height' => true,
        'flex-width' => true,
    ]);

}
add_action( 'after_setup_theme', 'myheadless_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Widgets
if ( ! function_exists( 'myheadless_widgets_init' ) ) :

    function myheadless_widgets_init() {

        // Top Nav
        register_sidebar(array(
            'name' => esc_html__('Top Nav', 'myheadless' ),
            'id' => 'top-nav',
            'description' => esc_html__('Add widgets here.', 'myheadless' ),
            'before_widget' => '<div class="ms-3">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title d-none">',
            'after_title' => '</div>'
        ));
        // Top Nav End

        // Top Nav Search
        register_sidebar(array(
            'name' => esc_html__('Top Nav Search', 'myheadless' ),
            'id' => 'top-nav-search',
            'description' => esc_html__('Add widgets here.', 'myheadless' ),
            'before_widget' => '<div class="top-nav-search">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title d-none">',
            'after_title' => '</div>'
        ));
        // Top Nav Search End

        // Sidebar
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar', 'myheadless' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'myheadless' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s card card-body mb-4 bg-light border-0">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title card-title border-bottom py-2">',
            'after_title'   => '</h2>',
        ) );
        // Sidebar End

        // Top Footer
        register_sidebar(array(
            'name' => esc_html__('Top Footer', 'myheadless' ),
            'id' => 'top-footer',
            'description' => esc_html__('Add widgets here.', 'myheadless' ),
            'before_widget' => '<div class="footer_widget mb-5">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ));
        // Top Footer End

        // Footer 1
        register_sidebar(array(
            'name' => esc_html__('Footer 1', 'myheadless' ),
            'id' => 'footer-1',
            'description' => esc_html__('Add widgets here.', 'myheadless' ),
            'before_widget' => '<div class="footer_widget mb-4">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title h4">',
            'after_title' => '</h2>'
        ));
        // Footer 1 End

        // Footer 2
        register_sidebar(array(
            'name' => esc_html__('Footer 2', 'myheadless' ),
            'id' => 'footer-2',
            'description' => esc_html__('Add widgets here.', 'myheadless'),
            'before_widget' => '<div class="footer_widget mb-4">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title h4">',
            'after_title' => '</h2>'
        ));
        // Footer 2 End

        // Footer 3
        register_sidebar(array(
            'name' => esc_html__('Footer 3', 'myheadless' ),
            'id' => 'footer-3',
            'description' => esc_html__('Add widgets here.', 'myheadless'),
            'before_widget' => '<div class="footer_widget mb-4">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title h4">',
            'after_title' => '</h2>'
        ));
        // Footer 3 End

        // Footer 4
        register_sidebar(array(
            'name' => esc_html__('Footer 4', 'myheadless' ),
            'id' => 'footer-4',
            'description' => esc_html__('Add widgets here.', 'myheadless'),
            'before_widget' => '<div class="footer_widget mb-4">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title h4">',
            'after_title' => '</h2>'
        ));
        // Footer 4 End

        // 404 Page
        register_sidebar(array(
            'name' => esc_html__('404 Page', 'myheadless' ),
            'id' => '404-page',
            'description' => esc_html__('Add widgets here.', 'myheadless'),
            'before_widget' => '<div class="mb-4">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>'
        ));
        // 404 Page End

    }
    add_action( 'widgets_init', 'myheadless_widgets_init' );


endif;
// Widgets End

// add_filter('use_block_editor_for_post', '__return_false', 10);
// add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );