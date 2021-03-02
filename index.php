<?php
/**
 * The template for displaying archive title list
 *
 * @link 
 *
 * @package WordPress
 * @subpackage Maskbook_WP_News
 * @since Maskbook News 1.0
 * Template Name: archive title list
 */
$order_by = 'post_modified_gmt';
$order = 'DESC';
$posts_per_page = 1;
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


    get_header();
?>
    <main id="main" class="site-main">

        <article <?php post_class(); ?>>
            <?php if ( $post_list->have_posts() ) : ?>
            <div class="entry-content">
               
                <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
                    <div class='post-thumbnail-list'>
                        <span class="post-title">
                            <?php the_title(); ?>
                           
                        </span>

                        <?php  maskbook_news_post_thumbnail() ?>
                    
                        <?php the_excerpt(); ?>
                    
                        <div class='operator'>
                            <span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
                            <a target="_parent" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">READ MORE</a>
                        </div>
                    </div>
            
                <?php endwhile; ?>
               
            <!-- wp_pagenavi -->
            <?php if ( function_exists('wp_pagenavi') ) wp_pagenavi( array('query' => $post_list) );  ?>
            </div><!-- .entry-content -->
            <?php endif; ?>
        </article>

    </main>

<?php
    get_footer();
?>