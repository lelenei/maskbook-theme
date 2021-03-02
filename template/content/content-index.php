<?php
/**
 * Template part for displaying archive list
 *
 * @link 
 *
 * @package WordPress
 * @subpackage Maskbook_WP_News
 * @since Maskbook New 1.0
 */

$order_by = 'post_modified_gmt';
$order = 'DESC';
$posts_per_page = get_option('maskbook_post_per_page');
$cat = '';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_list = new WP_Query(
    "posts_per_page=" . $posts_per_page .
    "&orderby=" . $order_by .
    "&order=" . $order .
    "&cat=" . $cat .
    "&paged=" . $paged
);


$total_posts = $post_list->found_posts;

?>
<article <?php post_class(); ?>>
    <?php if ( $post_list->have_posts() ) : ?>
    <div class="entry-content">
    
        <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
            <div class='post-thumbnail-list'>
            <header class="entry-header">
            <a target="_parent" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
            </header>

                <?php  maskbook_news_post_thumbnail() ?>
            
                <?php the_excerpt(); ?>
            
                <div class='operator'>
                    <span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
                    <a target="_parent" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">READ MORE</a>
                </div>
            </div>

        <?php endwhile; ?>
    
        <!-- wp_pagenavi -->
        <?php if ( function_exists('wp_pagenavi') ) 
            wp_pagenavi( array('query' => $post_list) );  
        ?>
    
         <?php endif; ?>
     </div><!-- .entry-content -->
</article>