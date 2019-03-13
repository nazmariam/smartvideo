<form role="search" method="post" id="searchform" autocomplete="off" action="<?php echo home_url( '/' ) ?>" >
    <div class="group">
        <label for="s"><?php _e('Try another search request: '); ?></label>
        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" required/>

        <button><?php _e('Search'); ?></button>
    </div>
</form>