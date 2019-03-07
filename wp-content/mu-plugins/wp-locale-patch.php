<?php

if( defined( 'DOING_AJAX' ) && (isset( $_REQUEST[ 'lang' ] ) || isset( $_COOKIE[ 'pll_language' ] )) ) {

    add_action( 'muplugins_loaded', function() {

        global $locale;

        $language = $locale;

        if (isset($_REQUEST[ 'lang' ])) {
            $language = $_REQUEST[ 'lang' ];
        } else if (isset($_COOKIE[ 'pll_language' ])) {
            $language = $_COOKIE[ 'pll_language' ];
        }

        if(preg_match("/(^[a-z]{2,}_[A-Z]{2,}$)|(^[a-z]{2,})/", $language)) {
            $locale = $language;
        }
    });
}
