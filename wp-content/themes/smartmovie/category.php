<?php get_header();
?>
<section class="section news category">
    <div class="container">
        <h1>
            <?=pll__('News and events')?>
        </h1>
        <?php
        $news_args = [
            'post_type' => 'post',
            'posts_per_page' => 6,
            'pagination' => true,
        ];
        //wp query
        $news_query = new WP_Query($news_args);

        if ( $news_query->have_posts() ) {
            $news_counter = 1;
            while ( $news_query->have_posts() ) {
                $news_query->the_post();

                $news_url = get_the_permalink();
                $news_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : '';
                $news_title = get_the_title();
                $news_date = get_the_date('d.m.Y');
                $news_text = get_the_excerpt();
                $news_cat = get_the_category();

                // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
                $wpseo_primary_news_cat = new WPSEO_Primary_Term( 'category', get_the_ID() );
                $wpseo_primary_news_cat = $wpseo_primary_news_cat->get_primary_term();
                $primary_news_cat = get_term( $wpseo_primary_news_cat );
                if (!is_wp_error($primary_news_cat)) {
                    $news_cat = $primary_news_cat->name;
                } else {
                    $news_cat = $news_cat[0]->name;
                }

                echo <<<ROW
<a class="post_box" href="$news_url">
    <span class="simple-slider-hover"></span>
    <div class="post_image" style="background: url($news_thumbnail) center no-repeat; background-size: cover">
    </div>
    <div class="post_labels">
        <div class="label" title="$news_cat">
            $news_cat
        </div>
        <div class="date">
            $news_date
        </div>
    </div>
    <h3>
        $news_title
    </h3>
    <div class="exc">
        $news_text
    </div>
</a>
ROW;
//                if ($news_counter % 3 === 0){ //use it if need every 3
                $news_counter++;
            }
            $furure_args = [
                'post_type' => 'post',
                'posts_per_page' => 1,
                'pagination' => true,
                'offset' => 6
            ];
            $future_query = new WP_Query($furure_args);
            if ($future_query->have_posts()){
                echo '<div class="more_wrapper"><button class="load-more" data-shown="6">  <svg class="svg-arrow-right-circle">
                <use xlink:href="#svg-arrow-right-circle"></use>
            </svg> ' . pll__('More news') . '</button></div>';
            }
        } else {
            echo '<div>' . pll__('No news') . '</div>';
        }
        //restore original post data
        wp_reset_postdata();
        ?>
    </div>
</section>

<?php if (is_active_sidebar("related-events") ) : ?>
    <section class="section events-upcoming events-previews related">
        <div class="container">
            <?php dynamic_sidebar( 'related-events' ); ?>
        </div>
    </section>
<?php endif;

get_footer(); ?>