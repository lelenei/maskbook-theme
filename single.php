<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <main id="main" class="site-main">
            <?php
            // Start the Loop.
            while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template/content/content', 'single' );
            endwhile; // End the loop.
            ?>

    </main><!-- #main -->

<?php
get_footer();
?>

