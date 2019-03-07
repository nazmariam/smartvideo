<form role="search" method="post" id="searchform" autocomplete="off" action="<?php echo home_url( '/' ) ?>" >
    <div class="group">
        <button type="submit"  id="searchsubmit" class="btn btn-search-icon">
            <svg class="svg-icon-search">
                <use xlink:href="#svg-search"></use>
            </svg>
        </button>

        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" required/>

        <span class="search_close">
            <svg>
                <use xlink:href="#svg-close"></use>
            </svg>
        </span>

        <label><?php pll_e('Search'); ?></label>
    </div>
</form>