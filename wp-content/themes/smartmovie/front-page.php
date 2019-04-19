<?php get_header(); ?>

<section class="section top">
    <video autoplay loop muted id="top_video">
        <source src="/wp-content/themes/smartmovie/Cloud-Landing-video-banner-1920.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <div class="main_box">
            <div class="main_slogan">
                Відео для бізнесу
            </div>
            <a href="/contacts" class="main_slogan order">
                ЗАМОВИТИ
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="section_title"><span>НАШІ ТАРИФИ</span></h2>
        <?php
//        todo: wp query categories with description and picture
        ?>
        <div class="tarifs">
            <div class="tarif_box">
                <a href="#" class="tarif" style="background: url('http://lorempixel.com/400/400/people/1') center no-repeat; background-size: cover">
                <span class="tarif_title">
                    Basic
                </span>
                </a>
                <a href="#" class="price">300$</a>
            </div>

            <div class="tarif_box">
                <a href="#" class="tarif" style="background: url('http://lorempixel.com/400/400/people/2') center no-repeat; background-size: cover">
                    <span class="tarif_title">
                        Standard
                    </span>
                </a>
                <a href="#" class="price">500$</a>
            </div>

            <div class="tarif_box">
                <a href="#" class="tarif" style="background: url('http://lorempixel.com/400/400/people/3') center no-repeat; background-size: cover">
                    <span class="tarif_title">
                        Animation
                    </span>
                </a>
                <a href="#" class="price">10$/sec</a>
            </div>
        </div>
    </div>
</section>

<section class="section last">
    <video autoplay loop muted id="top_video">
        <source src="/wp-content/themes/smartmovie/Cloud-Landing-video-banner-1920.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <h2>Наша ціль - приносити вам нових клієнтів та збільшувати продажі</h2>
    </div>
</section>

<?php get_footer(); ?>