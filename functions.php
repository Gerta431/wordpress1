<?php

function wpdevs_load_scripts(){
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );



function dstheme_config(){
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' =>200,
        'height' => 110,
        'flex-width' => true,
        'flex-height' => true

    ));
}

add_action('after_setup_theme', 'dstheme_config', 0);
add_action('widgets_init', 'dstheme_sidebars');

function dstheme_sidebars(){
    register_sidebar(
        array(
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-blog',
        'description' => 'This is the blog side bar',
        'before_widget' => '<div class = "widget wraper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class = "widget-title">'
        )
    );
    register_sidebar(
        array(
        'name' => 'Service 1',
        'id' => 'sidebar-service-1',
        'description' => 'first service area',
        'before_widget' => '<div class = "widget wraper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class = "widget-title">'
        )
    );
    register_sidebar(
        array(
        'name' => 'Service 2',
        'id' => 'service-2',
        'description' => 'second service area',
        'before_widget' => '<div class = "widget wraper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class = "widget-title">'
        )
    );
    register_sidebar(
        array(
        'name' => 'Service 3',
        'id' => 'service-3',
        'description' => 'third service area',
        'before_widget' => '<div class = "widget wraper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class = "widget-title">'
        )
    );
}