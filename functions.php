<?php


function zainabsyed_theme_support(){
    // this is dynamic title tag
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'zainabsyed_theme_support' );

function zainabsyed_menues(){

    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' =>'Footer Menue Items'
    );
    register_nav_menus($locations);
}

add_action( 'init','zainabsyed_menues');



function zainabsyed_register_styles(){

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'zainabsyed-style', get_template_directory_uri() . '/style.css', array('zainabsyed-bootstrap'), $version, 'all' );
    wp_enqueue_style( 'zainabsyed-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'zainabsyed-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'zainabsyed_register_styles' );


function zainabsyed_register_scripts(){

   

    wp_enqueue_script( 'zainabsyed-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'zainabsyed-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'zainabsyed-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
    wp_enqueue_script( 'zainabsyed-main', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0', true );
   

}

add_action( 'wp_enqueue_scripts', 'zainabsyed_register_scripts' );


?>