<?php 

add_theme_support('post-formats', array('aside', 'audio', 'video'));
add_theme_support('post-thumbnails');
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'customize-selective-refresh-widgets' );
add_image_size('slide-image',1024, 360, true);
add_image_size('portfolio-thumb', 400, 305, true);



?>