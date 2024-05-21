<?php
/*
Plugin Name: Custom Post Type Manager
Description: Easily create and manage custom post types and taxonomies.
Version: 1.0
Author: Your Name
*/

// Register Custom Post Type
function custom_post_type_manager() {
    $labels = array(
        'name'               => _x( 'Custom Post Types', 'Post Type General Name' ),
        'singular_name'      => _x( 'Custom Post Type', 'Post Type Singular Name' ),
        // Add more labels as needed
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'rewrite'            => array( 'slug' => 'custom-post-type' ),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        // Add more arguments as needed
    );
    register_post_type( 'custom_post_type', $args );
}
add_action( 'init', 'custom_post_type_manager' );
