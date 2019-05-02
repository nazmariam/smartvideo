<?php
/**
 * Template Name: Tariffs
 */

get_header();
?>
<section>
    <div class="container">
        <h1 class="section_title"><span><?php the_title(); ?></span></h1>
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
<?php get_footer(); ?>
