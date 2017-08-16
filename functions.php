<?php
function sauvant_setup()
{

    add_theme_support('title-tag');

    load_theme_textdomain('sauvant');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(825, 510, true);


    register_nav_menus(array(
        'menu' => __('Menu', 'sauvant'),
        'footer-menu' => __('Footer Menu', 'sauvant'),
        'social-menu' => __('Social Menu', 'sauvant')
    ));
    add_theme_support('custom-logo', array(
        'height' => 310,
        'width' => 55,
        'flex-height' => true,
    ));

    register_post_type('offre',
        array(
            'labels' => array(
                'name' => __('Offres'),
                'singular_name' => __('Offre')
            ),
            'supports' => array('title', 'editor'),
            'menu_icon' => 'dashicons-cart',
            'public' => true
        )
    );
}

add_action('after_setup_theme', 'sauvant_setup');


function sauvant_widgets_init()
{
    register_sidebar(array(
        'name' => __('Header', 'sauvant'),
        'id' => 'header-widget',
        'description' => __('Ajouter ici le contenu', 'sauvant'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<label class="widget-title">',
        'after_title' => '</label>',
    ));
    register_sidebar(array(
        'name' => __('Slider', 'sauvant'),
        'id' => 'slider-widget',
        'description' => __('Ajouter ici le contenu', 'sauvant'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Edito', 'sauvant'),
        'id' => 'edito-widget',
        'description' => __('Ajouter ici le contenu', 'sauvant'),
        'before_widget' => '<aside id="%1$s" onclick="toggleEdito(this)" class="widget edito mobile text-center %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title text-uppercase">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer texte de loi', 'sauvant'),
        'id' => 'footer-widget',
        'description' => __('Ajouter ici le contenu', 'sauvant'),
        'before_widget' => '<h5 id="%1$s" class="widget %2$s">',
        'after_widget' => '</h5>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'sauvant_widgets_init');

function sauvant_scripts()
{
    /*CSS load*/
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), array(), '3.3.7', 'all');
    wp_enqueue_style('datetimepicker', get_theme_file_uri('/css/bootstrap-datepicker3.standalone.min.css'), array(), '1.7.1', 'all');
    wp_enqueue_style('timepicker', get_theme_file_uri('/css/bootstrap-timepicker.min.css'), array(), '0.5.2', 'all');
    wp_enqueue_style('main', get_theme_file_uri('/css/main.css'), array('bootstrap'), '1.0', 'all');
    /*JS load*/
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.min.js'), array(), '3.2.1', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery'), '3.3.7', true);
    wp_enqueue_script('timepicker', get_theme_file_uri('/js/bootstrap-timepicker.min.js'), array('jquery'), '0.5.2', true);
    wp_enqueue_script('datetimepicker', get_theme_file_uri('/js/bootstrap-datepicker.min.js'), array('jquery'), '1.7.1', true);
    wp_enqueue_script('localfr', get_theme_file_uri('/js/bootstrap-datepicker.fr.min.js'), array('jquery'), '1.7.1', true);
    wp_enqueue_script('app', get_theme_file_uri('/js/app.js'), array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'sauvant_scripts');