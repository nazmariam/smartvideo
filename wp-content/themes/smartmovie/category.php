<?php
get_header();
?>
<section class="section">
    <div class="container">
        <h1 class="section_title"><span><?php echo single_cat_title( '', false ); ?></span></h1>

			<?php
			$category = get_category( get_query_var( 'cat' ) );
			$category_id = $category->cat_ID;

			//if page with same slug exists lets show it as info for our category,
            // else show videos from this category
			$pageArgs = [
                'post_type' => 'page',
                'pagename' => $category->slug
            ];
			$pageQuery = new WP_Query($pageArgs);
			if ($pageQuery->post_count > 0){
			    echo '<div class="content">';
			    echo $pageQuery->post->post_content;
			    echo '</div>';
            }

            $sub_categories=get_categories(
                array(
                    'parent' => $category_id,
                    'hide_empty' => false,
                    'posts_per_page' => 3,
                    'orderby'   => 'ID',
                )
            );
            if ($sub_categories){
                echo '<div class="tarifs">';
                foreach ($sub_categories as $category){
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
                echo '</div>';
            } else {
	            $video_args = array(
		            'post_type' => 'videos',
		            'category__in' => array($category_id),
	            );
	            //wp query
	            $video_query = new WP_Query($video_args);
	            if ($video_query->post_count > 0){
		            echo '<div class="examples">';
		            while ( $video_query->have_posts() ) :
			            $video_query->the_post();
			            $video_url = get_post_meta(get_the_ID(), 'video_url', true);
			            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $video_url, $matches);
			            $video_id = $matches[1];
			            if ($video_id) {
				            $thumb = get_the_post_thumbnail_url()?get_the_post_thumbnail_url():'//img.youtube.com/vi/'. $video_id .'/mqdefault.jpg';
				            ?>
                            <div class="example_box">
                                <div class="example" data-id="<?= $video_id; ?>" style="background: url(<?=$thumb;?>) center no-repeat; background-size: cover;">
                                </div>
                                <div class="price"><?php the_title(); ?></div>
                            </div>
				            <?php
			            }
		            endwhile;
		            echo '</div>';
	            }
            }
            ?>
    </div>
</section>
<?php get_footer(); ?>
