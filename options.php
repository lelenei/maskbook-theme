<?php
/*
** Maskbook News options page
**
** @package WordPress
** @suupackage Maskbook_WP_News
** @since Maskbook New 1.0 
*/

if (is_admin()):


    function maskbook_news_option_page() {
        if( !empty($_POST) && check_admin_referer('maskbook_news_admin_options-update') ) {
            update_option('maskbook_post_per_page', $_POST['posts_per_page']);
            ?>
            <div id="message" class="updated">
                <p><strong>Posts per page was saved</strong></p>
            </div>
            <?php
        }
?>
        <div class="wrap">
        <h2>Archive List Options </h2>
        <p>Welcome to Maskbooks News Theme, here you can edit posts per page to archive list page. </p>
        <form action="" method="post" id="maskbook-news-posts-per-page-options-form">
            <h3><label for="posts_per_page"></label>Posts per page:
            <input type="number" name="posts_per_page" id="posts_per_page"
            value="<?php echo get_option('maskbook_post_per_page') ?>" size="40" /></h3>
            <p><input type="submit" name="submit" value="Save" /></p>
            <?php wp_nonce_field('maskbook_news_admin_options-update'); ?>
        </form>
    </div>
<?php
    }

    function maskbook_news_options_page_menu() {
        add_theme_page('Settings', 'Theme settings', 'manage_options', '','maskbook_news_option_page' );
    }

    add_action( 'admin_menu', 'maskbook_news_options_page_menu' );

endif;

?>