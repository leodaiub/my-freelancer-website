<?php
//Adding js and css files

function ld_setup(){
    wp_enqueue_style('google fonts', '//https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'ld_setup');

//adding theme support

function ld_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-from'));
}

add_action('after_setup_theme', 'ld_init');

//Projects post type

function ld_custom_post_type(){
    register_post_type('project',
    array(
        'rewrite' => array('slug'=> 'projects'),
        'labels' => array(
            'name' => 'Projects',
            'singular-name' => 'Project',
            'add_new_item' => 'Add new Project',
            'edit-item' => 'Edit Project'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has-archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
    )
    );
}

add_action('init', 'ld_custom_post_type');

//sidebar   

function ld_widgets() {
    register_sidebar(
        array(
            'name'=> 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'ld_widgets');

// filters

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array ('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');