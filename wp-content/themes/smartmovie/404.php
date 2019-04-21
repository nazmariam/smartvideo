<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */

get_header();

?>
<section class="section">
    <div class="container center" style="padding: 80px 0">
        <h1><?php _e( 'Отакої! Схоже що сторінка загубилася...', 'smartmovie' ); ?></h1>

        <div>
            <a class="main_button" href="<?=get_home_url()?>">На головну</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
