<?php
get_header();

$main_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : '/wp-content/themes/smartmovie/images/UkraineWheat.jpg';
?>
    <section class="section sh_title" style="background: url('<?=$main_thumbnail?>') center top no-repeat; background-size: cover;">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>

    </section>
    <section class="section sh_content">
        <div class="container">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
