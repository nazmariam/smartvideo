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
            <a href="/#contacts" class="main_slogan order">
                ЗАМОВИТИ
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="section_title"><span>НАШІ ТАРИФИ</span></h2>
        <div class="tarifs">
	        <?php
	        //        todo: wp query categories with description and picture
	        //top category - video ID 8
	        $categories=get_categories(
		        array(
                    'parent' => 8,
                    'hide_empty' => false,
                    'posts_per_page' => 3,
                    'orderby'   => 'ID',
                    'order' => 'ASC',
                )
	        );
	        if ($categories){
		        foreach ($categories as $category){
			        ?>
                    <div class="tarif_box">
                        <a href="<?=get_category_link($category->cat_ID);?>" class="tarif" style="background: url('<?=z_taxonomy_image_url($category->cat_ID)?>') center no-repeat; background-size: cover">
                            <span class="tarif_title">
                                <?=$category->cat_name;?>
                            </span>
                        </a>
                        <a href="<?=get_category_link($category->cat_ID);?>" class="price"><?=$category->category_description?></a>
                    </div>
                    <?php
		        }
	        }
	        ?>
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