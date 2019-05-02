<?php
/**
 * Template Name: Works
 */

get_header();
?>
<section class="section">
    <div class="container">
        <h1 class="section_title"><span><?php the_title(); ?></span></h1>

	    <?php
	    get_template_part( 'partials/video_examples' );
	    ?>

    </div>
</section>
<?php get_footer(); ?>
