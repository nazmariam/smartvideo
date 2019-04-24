<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>
            <?php wp_title(); ?>
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
        <?php wp_head(); ?>
    </head>
<body>

<header class="header">
    <div class="container">
        <div class="main_link">
            <?php
            if (!is_home()){
                echo '<a class="main_url" href="/">Smart Movie <span>production</span></a>';
            } else {
                echo '<span class="main_url">Smart Movie <span>production</span></span>';
            }
            ?>
        </div>
        <div class="top_menu">
		    <?php wp_nav_menu([
			    'theme_location' => 'header',
			    'container' => false,
                'menu_id' => 'nav'
		    ]);?>
        </div>

        <div id="mobile_burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
</header>

<main>