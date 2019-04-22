<?php get_header(); ?>
    <section class="section">
        <div class="container">
            <h1 class="section_title"><span>Усі матеріали</span></h1>

            <div class="examples">
				<?php
				$video_args = array( 'post_type' => 'videos');
				//wp query
				$video_query = new WP_Query($video_args);
				while ( $video_query->have_posts() ) :
					$video_query->the_post();
					$video_url = get_post_meta(get_the_ID(), 'video_url', true);
					preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $video_url, $matches);
					$video_id = $matches[1];
					if ($video_id) {
						?>
                        <div class="example_box">
                            <div class="example" data-id="<?= $video_id; ?>" style="background: url('//img.youtube.com/vi/<?= $video_id; ?>/mqdefault.jpg') center no-repeat; background-size: cover;">
                            </div>
                            <div class="price"><?php the_title(); ?></div>
                        </div>
						<?php
					}
				endwhile;?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>