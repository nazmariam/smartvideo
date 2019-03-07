<?php get_header();

get_template_part( 'partials/social-share-page' );

//for smartmovie post type
if (get_post_type() === 'smartmovie'){
    $news_cat = get_terms( array(
        'taxonomy' => 'sh_category',
        'object_ids' => get_the_ID(),
        'hide_empty' => false,
    ) );
} else {
    $news_cat = get_the_category();
}
// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
if (get_post_type() === 'smartmovie') {
    $wpseo_primary_news_cat = new WPSEO_Primary_Term( 'sh_category', get_the_ID() );
} else{
    $wpseo_primary_news_cat = new WPSEO_Primary_Term( 'category', get_the_ID() );
}
$wpseo_primary_news_cat = $wpseo_primary_news_cat->get_primary_term();
$primary_news_cat = get_term( $wpseo_primary_news_cat );
if (!is_wp_error($primary_news_cat)) {
    $news_cat = $primary_news_cat->name;
} else {
    $news_cat = $news_cat[0]->name;
}
?>

<section class="top_news">
    <div class="container">
        <div class="left">
            <div class="category"><?=$news_cat;?></div>
            <h1><?php the_title(); ?></h1>
            <div class="excerpt">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <div class="right">
            <div class="img">
                <img src="<?php the_post_thumbnail_url(); ?>">
            </div>
        </div>
    </div>
</section>
<section class="main_news">
    <div class="container">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php
get_footer(); ?>