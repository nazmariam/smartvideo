<?php get_header(); ?>

<section class="section">
    <div class="container">
        <h1><?php _e('Search results');?></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        if (have_posts()){
            while (have_posts()): the_post();
            the_content();
            endwhile;
        } else {
            echo 'Nothing found';
        }?>
    </div>
</section>

<?php get_footer(); ?>