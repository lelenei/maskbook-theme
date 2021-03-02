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
        <?php maskbook_news_posted_on(); ?>
       
    </div><!-- .entry-meta -->
<?php endif; ?>
