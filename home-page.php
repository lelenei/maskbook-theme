<?php
/**
 * The template for displaying home page
 *
 * @link 
 *
 * @package WordPress
 * @subpackage Maskbook_WP_News
 * @since Maskbook News 1.0
 * Template Name: home page
 */
get_header();
?>
<main id="home-page" class="home-page">
    <?php get_template_part( 'template/content/home-page', '' );?>
</main>

<?php
    get_footer();
?>