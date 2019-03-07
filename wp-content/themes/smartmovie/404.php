<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */

get_header();

$main_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : '/wp-content/themes/smartmovie/images/UkraineWheat.jpg';
?>
<section class="section sh_title" style="background: url('<?=$main_thumbnail?>') center top no-repeat; background-size: cover;">
    <div class="container">
        <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
    </div>

</section>
<section class="section sh_content">
    <div class="container">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

        <?php get_search_form(); ?>
    </div>
</section>
<?php get_footer(); ?>
