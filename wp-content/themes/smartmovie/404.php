<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */

get_header();

?>
<section class="section">
    <div class="container">
        <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'smartmovie' ); ?></h1>

        <p><?php _e( 'It looks like nothing was found...', 'smartmovie' ); ?></p>

        <?php get_search_form(); ?>

        <div>
            or go to <a class="main_button" href="<?=get_home_url()?>">Main Page</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
