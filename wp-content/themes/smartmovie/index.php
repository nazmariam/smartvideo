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

    <section>
        <div class="container">
            <h2 class="section_title"><span>НАШИ РАБОТЫ</span></h2>

            <div class="examples">
				<?php
				$video_args = array( 'post_type' => 'videos', 'posts_per_page' => 9);
				//wp query
				$video_query = new WP_Query($video_args);
				$events_query = new WP_Query( array('post_type' => array('videos')));
				while ( $video_query->have_posts() ) :
					$video_query->the_post();
					$video_url = get_post_meta(get_the_ID(), 'video_url', true);
					preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $video_url, $matches);
					$video_id = $matches[1];
					if ($video_id) {
						?>
                        <div class="example" data-id="<?= $video_id; ?>" style="background: url('//img.youtube.com/vi/<?= $video_id; ?>/mqdefault.jpg') center no-repeat; background-size: cover;">
                        </div>
						<?php
					}
				endwhile;?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>