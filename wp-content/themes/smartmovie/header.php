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
        <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Tinos:400,700&amp;subset=cyrillic" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
<body>
<?php include_once("images/icons/icon-sprites.svg"); ?>

<header class="header">
    <div class="container-fluid">
        <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
                <svg class="svg-logo">
                    <use xlink:href="#svg-logo-title"></use>
                </svg>
            </a>
        </div><!-- .logo - END -->

        <nav id="navigation">
            <div class="language-switcher hidden-lg">
                <?php get_template_part('partials/language_switcher'); ?>
            </div><!-- .language-switcher - END -->

            <?php wp_nav_menu(array('theme_location' => 'header'));?>

            <svg class="svg-icon-close svg-icon close-el">
                <use xlink:href="#svg-close"></use>
            </svg>

        <div class="overlay-panel"></div><!-- .overlay-panel - END -->
    </div><!-- .container-fluid - END -->
</header><!--.header - END -->

<main class="main-content" role="main">