<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Maskbook_WP_News
 * @since Maskbook News 1.0
 */
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
        <?php maskbook_news_posted_by(); ?>
        <?php maskbook_news_posted_on(); ?>
        <?php
            /* translators: Used between list items, there is a space after the comma. */
            $categories_list = get_the_category_list( __( ', ', 'maskbook' ) );
            if ( $categories_list ) {
                    printf( 
                            /* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of categories. */              
                            '<span class="cat-links"><span class="screen-reader-text">%1$s</span>%2$s</span>',                                  
                            __( 'Posted in', 'maskbook' ),
                            $categories_list
                    ); // WPCS: XSS OK.
            }
        ?>

</div><!-- .entry-meta -->
<?php endif; ?>
