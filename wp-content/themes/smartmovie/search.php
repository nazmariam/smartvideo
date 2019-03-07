<?php get_header(); ?>

<?php

$searcher = new Theme\Searcher();
$searcher->page( get_query_var('paged'))->searchItems();

$eventsTop = $searcher->getTopLevelTerms('tribe_events_cat');
$categoryTop = $searcher->getTopLevelTerms('category');
$shevchenkoTop = $searcher->getTopLevelTerms('sh_category');

$slugs = $searcher->getItemsSlugs();

?>

<section class="top_search">
    <div class="container">
        <div class="page_search">
            <form role="search" method="post" id="main_searchform" autocomplete="off" action="<?php echo home_url( '/' ) ?>" >
                <div class="group">
                    <button type="submit"  id="main_searchsubmit" class="btn btn-search-icon">
                        <svg class="svg-icon-search">
                            <use xlink:href="#svg-search"></use>
                        </svg>
                    </button>

                    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="main_s" required/>

                    <input type="hidden" name="taxonomies" value="">
                    <input type="hidden" name="paged" value="<?php echo $searcher->getCurrentPage(); ?>">

                    <span class="search_close">
                        <svg>
                            <use xlink:href="#svg-close"></use>
                        </svg>
                    </span>

                    <label><?php pll_e('Search'); ?></label>
                </div>
            </form>
        </div>
        <h1><?php pll_e('Search results');?><span class="filter_button"></span></h1>
        <div class="results"><?php pll_e('Search count'); ?>: <span class="result_total"><?php echo $searcher->getTotal() ?></span></div>
    </div>
</section>
<section class="main_search">
    <div class="container">
        <div class="results">
            <div class="filters">
                <div class="f_title"><?php pll_e('Show'); ?></div>
                <div class="label_box">
                    <?php foreach ($eventsTop as $event) : ?>
                        <label<?php if(!in_array($event->slug, $slugs)) : ?> class="disabled"<?php endif; ?>>
                            <input type="checkbox" name="<?php echo $event->slug; ?>" aria-invalid="false"<?php if(!in_array($event->slug, $slugs)) : ?> disabled="disabled"<?php endif; ?>>
                            <span class="check_label">
                                <?php echo $event->name; ?>
                            </span>
                        </label>
                    <?php endforeach; ?>
                    <?php foreach ($categoryTop as $event) : ?>
                        <label<?php if(!in_array($event->slug, $slugs)) : ?> class="disabled"<?php endif; ?>>
                            <input type="checkbox" name="<?php echo $event->slug; ?>" aria-invalid="false"<?php if(!in_array($event->slug, $slugs)) : ?> disabled="disabled"<?php endif; ?>>
                            <span class="check_label">
                            <?php echo $event->name; ?>
                        </span>
                        </label>
                    <?php endforeach; ?>
                    <?php foreach ($shevchenkoTop as $event) : ?>
                        <label<?php if(!in_array($event->slug, $slugs)) : ?> class="disabled"<?php endif; ?>>
                            <input type="checkbox" name="<?php echo $event->slug; ?>" aria-invalid="false"<?php if(!in_array($event->slug, $slugs)) : ?> disabled="disabled"<?php endif; ?>>
                            <span class="check_label">
                            <?php echo $event->name; ?>
                        </span>
                        </label>
                    <?php endforeach; ?>
                </div>
                <div class="filter_controls">
                    <div class="cancel_filter"><?php pll_e('Cancel'); ?></div>
                    <div class="apply_filter"><?php pll_e('Apply'); ?></div>
                </div>
            </div>
            <div class="result_box">

                <?php

                if ($searcher->getTotal()) {
                    $items = $searcher->getItems();
                    foreach ($items as $item) {
                        echo $item;
                    }
                } else {
                    echo '<div class="result"><h2>' . pll__('No posts') . '</h2></div>';
                }

                ?>

            </div>
        </div>

        <div class="more_wrapper"><button class="load-more"<?php if (!$searcher->hasNext()) : ?> disabled="disabled" style="display: none;"<?php endif; ?>>
                <svg class="svg-arrow-right-circle">
                    <use xlink:href="#svg-arrow-right-circle"></use>
                </svg>

                <?=pll__('Load more');?>
            </button></div>

    </div>
</section>

<?php get_footer(); ?>