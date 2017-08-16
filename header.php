<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main-page">
    <header class="top-header">
        <div class="sauvant-container padding-top">
            <div class="box y-center mobile wrap">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_reversion.png" width="307"
                             height="83" alt="Logo reversion relais"/>
                    </a>
                </div>
                <div class="header-widget wrap box y-center item-right">
                    <?php dynamic_sidebar( 'header-widget' ); ?>
                </div>
            </div>

            <nav>
                <?php wp_nav_menu(array('theme_location' => 'menu', 'container_class' => 'menu-header-container')); ?>
            </nav>
        </div>
    </header>


