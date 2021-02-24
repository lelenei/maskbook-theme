<?php
/**
 * Template part for displaying posts
 *
 * @link 
 *
 * @package WordPress
 * @subpackage Maskbook_WP_News
 * @since Maskbook New 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php get_template_part( 'template/header/entry', 'header' ); ?>
    </header>

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Post title. Only visible to screen readers. */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
                    array(
                        'span' => array(
                                'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            )
        );

        ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
