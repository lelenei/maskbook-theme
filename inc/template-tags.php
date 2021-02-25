
<?php

if (!function_exists("maskbook_news_posted_by")):
    function maskbook_news_posted_by() {
        printf(
            /* translators: 1: SVG icon. 2: Post author, only visible to screen readers. 3: Author link. */
            '<span class="byline"><span class="screen-reader-text">%1$s</span><span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span></span>',
            'Posted by' ,
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_html( get_the_author() )
        );

    }
endif;


if (!function_exists("maskbook_news_posted_on")):
    function maskbook_news_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
                $time_string,
                esc_attr( get_the_date( DATE_W3C ) ),
                esc_html( get_the_date() ),
                esc_attr( get_the_modified_date( DATE_W3C ) ),
                esc_html( get_the_modified_date() )
        );

        printf(
                '<span class="posted-on"><a href="%1$s" rel="bookmark">%2$s</a></span>',
                esc_url( get_permalink() ),
                $time_string
        );

    }
endif;

function maskbook_news_add_dropdown_icons( $item_output, $item, $depth, $args ) {
    if (!isset($args->theme_location) || 'header' !== $args->theme_location) {
        return $item_output;
    }
    if (in_array('menu-item-has-children', $item->classes, true)) {
        $item_output .= '<button class="submenu-expand" tabindex="-1"></button>';
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'maskbook_news_add_dropdown_icons', 10, 4 );
?>