<?php
$social = get_option('social_options');

if ($social) {
    echo '<div class="social-networks">';
    foreach ($social as $key => $value) {
        if ($value) {
            echo '<a target="_blank" class="icon-link" href="' . $value . '"><svg class="svg-icon-social">';
                switch ($key):
                    case 'facebook':
                        echo '<use xlink:href="#svg-facebook"></use>';
                        break;

                    case 'instagram':
                        echo '<use xlink:href="#svg-instagram"></use>';
                        break;

                    case 'twitter':
                        echo '<use xlink:href="#svg-twitter"></use>';
                        break;
                endswitch;
            echo '</svg></a>';
        }
    }
    echo '</div>';
}
?>
