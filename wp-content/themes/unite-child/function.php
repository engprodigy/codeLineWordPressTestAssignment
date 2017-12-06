<?php

add_action( 'init', 'my_custom_post_product' );
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/*function my_custom_post_film() {
  $args = array();
  register_post_type( 'film', $args ); 
}
add_action( 'init', 'my_custom_post_film' );*/

function my_custom_post_product() {
  $labels = array(
    'name'               => _x( 'Film', 'post type general name' ),
    'singular_name'      => _x( 'Film', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Film' ),
    'add_new_item'       => __( 'Add New Film' ),
    'edit_item'          => __( 'Edit Film' ),
    'new_item'           => __( 'New Film' ),
    'all_items'          => __( 'All Film' ),
    'view_item'          => __( 'View Film' ),
    'search_items'       => __( 'Search Film' ),
    'not_found'          => __( 'No films found' ),
    'not_found_in_trash' => __( 'No films found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Film'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our film and film specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'film', $args ); 
}

