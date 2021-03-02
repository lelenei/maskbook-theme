<?php
/**
 * Custom template tags for this theme
 *
 * @package WordPress
 * @subpackage Maskbook News
 * @since Maskbook News 1.0
 */


if (!function_exists("maskbook_news_posted_by")):
    function maskbook_news_posted_by() {
        printf(
            /* translators: 1: SVG icon. 2: Post author, only visible to screen readers. 3: Author link. */
            '<span class="byline"><span class="screen-reader-text">%1$s </span><span class="author vcard">%2$s</span></span>',
            'Posted by' ,
            esc_html( get_the_author() )
        );

    }
endif;


if (!function_exists("maskbook_news_posted_on")):
    function maskbook_news_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
     
        $time_string = sprintf(
                $time_string,
                esc_attr( get_the_modified_date( DATE_W3C ) ),
                esc_html( get_the_modified_date() )
        );

        printf(
                '<span class="posted-on">%1$s</span>',
                $time_string
        );

    }
endif;


if ( ! function_exists( 'maskbook_news_post_thumbnail' ) ) :
   
    function maskbook_news_post_thumbnail() {

            if ( is_singular() ) :
                    ?>

                    <figure class="post-thumbnail">
                            <?php the_post_thumbnail('post-thumbnail'); ?>
                    </figure><!-- .post-thumbnail -->

                    <?php
            else :
                    ?>

            <figure class="post-thumbnail">
                    <a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                            <?php the_post_thumbnail( 'post-thumbnail' ); ?>
                    </a>
            </figure>

                    <?php
            endif; // End is_singular().
    }
endif;


function maskbook_news_add_dropdown_icons( $item_output, $item, $depth, $args ) {
    if (!isset($args->theme_location) || 'header' !== $args->theme_location) {
        return $item_output;
    }
    if (in_array('menu-item-has-children', $item->classes, true)) {
        $item_output .= '<button id="submenu-expand" class="submenu-expand" tabindex="-1"></button>';
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'maskbook_news_add_dropdown_icons', 10, 4 );

?>