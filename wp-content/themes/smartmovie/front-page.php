<?php get_header(); ?>

<section class="section top">
    <video autoplay loop muted playsinline id="top_video" poster="/wp-content/themes/smartmovie/showreel1.jpg">
        <source src="/wp-content/themes/smartmovie/showreel1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <div class="main_box">
	        <?php
	        $options = get_option('general_options');
	        if (isset($options['top_text'])){
		        echo '<div class="main_slogan">' . $options['top_text'] . '</div>';
	        }
	        ?>

            <a href="/contacts" class="main_slogan order">
                ЗАМОВИТИ
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="tarifs">
	        <?php
	        //        todo: wp query categories with description and picture
	        //top category - video ID 8
	        $categories=get_categories(
		        array(
                    'parent' => 8,
                    'hide_empty' => false,
                    'posts_per_page' => 3,
                    'orderby'   => 'modified',
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
    <video autoplay loop muted playsinline id="top_video2" poster="/wp-content/themes/smartmovie/showreel2.jpg">
        <source src="/wp-content/themes/smartmovie/showreel2.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <?php
        $options = get_option('general_options');
        if (isset($options['bottom_text'])){
            echo '<h2>' . $options['bottom_text'] . '</h2>';
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>