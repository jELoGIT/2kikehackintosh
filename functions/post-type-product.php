<?php

/* Register the Product Post Type
---------------------------------------------------------------------------------------------------- */

function register_custom_post_product() {

  $labels = array(
    'name'                  => _x('Products', 'Post Type General Name', 'text_domain'),
    'singular_name'         => _x('product', 'Post Type Singular Name', 'text_domain'),
    'menu_name'             => __('Products', 'text_domain'),
    'name_admin_bar'        => __('product', 'text_domain'),
    'archives'              => __('product Items', 'text_domain'),
    'attributes'            => __('product Attributes', 'text_domain'),
    'all_items'             => __('All Products', 'text_domain')
  );

  $args = array(
    'label'                 => __('Product', 'text_domain'),
    'description'           => __('My apple custom post type.', 'text_domain'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields', 'comments', 'excerpt'),
    'taxonomies'            => array('category', 'post_tag'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-heart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'show_in_rest'          => true,
    'capability_type'       => 'post',
  );

  register_post_type('product', $args);
}
add_action('init', 'register_custom_post_product', 0);
