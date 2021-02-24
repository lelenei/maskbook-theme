<?php
/*
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up util <div id='content'>
 * @link 
 * 
 * @package Wordpress
 * @subpackage Maskbook_News
 * @since Maskbook News 1.0
 * 
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open();?>
            <header class="header-bar">
                <div class='site-logo'>
                   <a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" width="200px" />
                   </a>
                    
                </div>
                <?php if (has_nav_menu('header')) : ?>
                <nav id='site-navigation' class="main-navigation">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'menu_class'     => 'main-menu',
                                'item_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            )
                        );
                    ?>
                </nav>
                <?php endif ?>
                
            </header>
            <div id='content' class='site-content'>
          