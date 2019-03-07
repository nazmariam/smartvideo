<?php
?>


<?php
/**
facebook sharing needs API ID
 */
//share URL, title, description, image


//get the post type
$ip_post_type = get_post_type();
//define the id
$ip_id = get_the_ID();
//get title
$title = get_the_title( $ip_id );

$social = get_option('social_options');
$insta_url = $social['instagram'];

?>

<div class="social_share_box">

    <a rel="nofollow" class="icon-link share twitter" target=_blank href="https://twitter.com/share?text=<?=urlencode(get_the_title());?>&url=<?=get_permalink();?>&hashtags=shevchenko_museum&via=shevchenko_museum&related=Shevchenko_museum" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=480,width=640');return false;" title="<?php pll_e('Share on Twitter');?>">
        <svg class="svg-icon-social">
            <use xlink:href="#svg-twitter"></use>
        </svg>
    </a>

    <?php
    if ($insta_url){
        echo '<a rel="nofollow" class="icon-link share instagram" target="_blank" title="Follow us on Instagram" href="' . $insta_url. '">
            <svg class="svg-icon-social">
                <use xlink:href="#svg-instagram"></use>
            </svg>
        </a>';
    }
    ?>

    <div id="facebookBtn" class="icon-link share facebook" title="<?php pll_e('Share on Facebook');?>">
        <svg class="svg-icon-social">
            <use xlink:href="#svg-facebook"></use>
        </svg>
    </div>

</div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '137066277005544',
            xfbml      : true,
            version    : 'v2.11'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    document.getElementById('facebookBtn').onclick = function() {
        FB.ui({
            method: 'share',
            <?php //this works only on live site, cuz it need real page to read OG tags! ?>
            href: "<?=get_permalink()?>"
        }, function(response){});
    }
</script>