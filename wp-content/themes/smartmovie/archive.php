<?php get_header(); ?>
    <section>
        <div>
            <h1><?php single_cat_title(); ?> (archive)</h1>
        </div>
        <div>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div style="border: 1px solid black; margin: 8px; padding: 8px;">
                    <h2><?php the_title(); ?></h2>
                    <div>
                        <img style="max-width: 200px" src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                    <?php the_content(); ?>
                    <a href="<?php the_permalink(); ?> ">
                        <span>Read more</span>
                    </a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>