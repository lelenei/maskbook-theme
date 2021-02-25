<?php
/*
** Maskbook News function and definitions
**
** @package WordPress
** @suupackage Maskbook_WP_News
** @since Maskbook New 1.0 
*/

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/assets/icons/logo.svg" />'  ;
}
add_action('wp_head', 'favicon_link');


if (!function_exists('maskbook_news_setup')) :

    function maskbook_news_setup() {
        load_theme_textdomain( 'maskbook', get_template_directory() . '/languages');

        register_nav_menus(
            array(
                'header' => __("Primary", 'maskbook'),
                'footer' => __("Footer Menu", 'maskbook'),
                'social' => __("Social Links", "maskbook"),
            )
            );
   
        add_theme_support(
            'html5',
            array(
                'style',
                'script',
            )
            );
        add_theme_support(
            'custom-logo',
            array(
                'height'     => 160,
                'width'      => 640,
                'flex-width' => false,
                'flex-height'=> false,
            )
            );
    }


endif;

add_action('after_setup_theme', 'maskbook_news_setup');


/**
 * Enqueue scripts and styles.
 */
function maskbook_news_scripts() {
    wp_enqueue_style( 'maskbook-news-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    wp_enqueue_style('maskbook-news-main-style', get_template_directory_uri().'/assets/css/main.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style('maskbook-news-syntax-style', get_template_directory_uri().'/assets/css/syntax.css', array(), wp_get_theme()->get('Version'));
    if ( has_nav_menu( 'header' ) ) {
        /*
            wp_enqueue_script( 'maskbook-news-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '20181214', true );
            wp_enqueue_script( 'maskbook-news-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '20181231', true );
        */
    }

}
add_action( 'wp_enqueue_scripts', 'maskbook_news_scripts' );



function wpmaker_menu_classes($classes, $item, $args) {
    if($args->theme_location === 'header') {
            if ($item->title === 'Install') {
                    $classes[] = 'menu-install-button';
            }
    }
    return $classes;
}
add_filter('nav_menu_css_class','wpmaker_menu_classes',1,3);


require get_template_directory() . '/inc/template-tags.php';




?>