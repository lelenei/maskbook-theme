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
        if( !empty($_POST)) {
            if (check_admin_referer('maskbook_news_admin_options-update') ) {
                update_option('maskbook_post_per_page', $_POST['posts_per_page']);

                update_option('maskbook_vedio1_source', $_POST['video1_source']);
                update_option('maskbook_vedio2_source', $_POST['video2_source']);
                update_option('maskbook_vedio3_source', $_POST['video3_source']);
                update_option('maskbook_vedio4_source', $_POST['video4_source']);
?>
                <div id="message" class="updated">
                    <p><strong>Options was saved</strong></p>
                </div>
<?php
            }
        }
?>
        <div class="wrap">
            <h2>Theme Options </h2>
            <p>Welcome to Maskbooks News Theme, here you can edit option. </p>
            
            <form action="" method="post" id="maskbook-news-posts-per-page-options-form">
                <h3>
                    <label for="posts_per_page">Posts per page:</label>
                    <input type="number" name="posts_per_page" id="posts_per_page"
                        value="<?php echo get_option('maskbook_post_per_page') ?>" size="40" />
                </h3>
               
                <h3>
                    <label for="video1_source">Video Source 1:</label>
                    <input type="text" name="video1_source" id="video1_source"
                        value="<?php echo get_option('maskbook_video1_source') ?>" size="100" />
                </h3>
                <h3>
                    <label for="video1_source">Video Source 2:</label>
                    <input type="text" name="video2_source" id="video2_source"
                        value="<?php echo get_option('maskbook_video2_source') ?>" size="100" />
                </h3>
                <h3>
                    <label for="video1_source">Video Source 3:</label>
                    <input type="text" name="video3_source" id="video3_source"
                        value="<?php echo get_option('maskbook_video3_source') ?>" size="100" />
                </h3>
                <h3>
                    <label for="video1_source">Video Source 4:</label>
                    <input type="text" name="video4_source" id="video4_source"
                        value="<?php echo get_option('maskbook_video4_source') ?>" size="100" />
                </h3>

                <input type="submit" name="submit" value="Save" />
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