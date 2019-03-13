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
    <?php
    if (!is_front_page()){
        ?>
        <div class="main_link">
            На головну
        </div>
        <div class="top_link">
            <img src="" alt="">
        </div>
        <div class="back_link">
            Назад
        </div>
        <?php
    }
    ?>
</header>

<main>