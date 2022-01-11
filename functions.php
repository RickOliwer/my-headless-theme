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
