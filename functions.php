<?php
add_theme_support('post-thumbnails');

add_action('init', 'create_post_type_watching', 10);
add_action('init', 'create_post_type_reading', 11);
add_action('init', 'create_post_type_playing', 12);
add_action('init', 'create_post_type_learning', 12);

function create_post_type_watching()
{
    $post_type = "Now Watching";
    $args = array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'watching'),
        'labels' => array(
            'name' => __('Now Watching'),
            'singular_name' => __('Now Watching')
        ),
        'menu_position' => 4,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('post_tag')
    );
    register_post_type($post_type, $args);
}

;

function create_post_type_reading()
{
    $post_type = "Now Reading";
    $args = array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'reading'),
        'labels' => array(
            'name' => __('Now Reading'),
            'singular_name' => __('Now Reading')
        ),
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'tags'),
        'taxonomies' => array('post_tag')
    );
    register_post_type($post_type, $args);
}

;


function create_post_type_playing()
{
    $post_type = "Now Playing";
    $args = array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'playing'),
        'labels' => array(
            'name' => __('Now Playing'),
            'singular_name' => __('Now Playing')
        ),
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail', 'tags'),
    );
    register_post_type($post_type, $args);
}

;

function create_post_type_learning()
{
    $post_type = "Now Learning";
    $args = array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'learning'),
        'labels' => array(
            'name' => __('Now Learning'),
            'singular_name' => __('Now Learning')
        ),
        'menu_position' => 7,
        'supports' => array('title', 'editor', 'thumbnail', 'tags'),
    );
    register_post_type($post_type, $args);
}

function theme_name_scripts()
{
    wp_enqueue_style('style-name', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');