<?php
/*
** Maskbook News options page
**
** @package WordPress
** @suupackage Maskbook_WP_News
** @since Maskbook New 1.0 
*/



function register_theme_settings() {
    register_setting("","page_size");
}
add_action('admin_init', 'register_theme_settings');

function maskbook_news_options_admin_menu()
{
    add_theme_page("Maskbook News Setup", "Theme Options", "edit_themes", basename(__FILE__), "maskbook_news_options_page");
}

add_action("admin_menu", "maskbook_news_options_admin_menu");

function maskbook_news_options_page() {
    if ( $_POST['“update_options”'] == 'true' ) { 
        maskbook_news_options_update(); 
        echo "true";
    }
    $defaults = '
    <div>
       
        <h2>Archive List Setup</h2>
        <form method="POST" action="">
            <input type="hidden" name="update_options" value="true" />
            <h4>Page Size</h4>
            <input type="text" name="page_size" id="page_size" size="32" value="'.get_option("page_size"). '"/>
            <input type="submit" name="bcn_admin_options" value="更新数据"/>
        </form>
    </div>
    ';
    
    echo $defaults;
}

function maskbook_news_options_update() {
    update_option('page_size', $_POST['page_size']);
    echo $_POST('page_size');
}


?>