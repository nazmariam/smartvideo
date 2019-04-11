<?php get_header(); ?>

<section class="section top">
    <video autoplay loop muted id="top_video">
        <source src="/wp-content/themes/smartmovie/Cloud-Landing-video-banner-1920.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <div class="main_box">
            <a href="#" class="main_logo">
                <img src="/wp-content/themes/smartmovie/images/logo.png" alt="main logo">
            </a>
            <a href="#" class="main_slogan">
                Відео для бізнесу
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="section_title"><span>НАШИ ТАРИФЫ</span></h2>
        <div class="tarifs">
            <a href="#" class="tarif" style="background: url('http://lorempixel.com/400/400/people/1') center no-repeat; background-size: cover">
                <span class="tarif_title">
                    Basic
                </span>
            </a>
            <a href="#" class="tarif" style="background: url('http://lorempixel.com/400/400/people/2') center no-repeat; background-size: cover">
                <span class="tarif_title">
                    Standart
                </span>
            </a>
            <a href="#" class="tarif" style="background: url('http://lorempixel.com/400/400/people/3') center no-repeat; background-size: cover">
                <span class="tarif_title">
                    Pro
                </span>
            </a>
        </div>
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

<section class="section last">
    <video autoplay loop muted id="top_video">
        <source src="/wp-content/themes/smartmovie/Cloud-Landing-video-banner-1920.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <h2>НАША ЦЕЛЬ — ПРИНОСИТЬ ВАМ НОВЫХ КЛИЕНТОВ И УВЕЛИЧИВАТЬ ВАШИ ПРОДАЖИ</h2>
    </div>
</section>

<?php get_footer(); ?>