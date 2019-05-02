<?php
get_header();

$main_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : '/wp-content/themes/smartmovie/images/night_sky.jpg';
?>
<section class="section">
    <div class="container">
        <h1 class="section_title"><span><?php the_title(); ?></span></h1>

        <div class="content">
	        <?php if (have_posts()): while (have_posts()): the_post(); ?>
		        <?php the_content(); ?>
	        <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
