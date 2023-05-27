<?php

function create_post_types() {

  register_post_type('training', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'taxonomies' => ['category'],
    'rewrite' => array('slug' => 'trainings'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Trainings',
      'add_new_item' => 'Add New Training',
      'edit_item' => 'Edit Training',
      'all_items' => 'All Trainings',
      'singular_name' => 'Training'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

}

add_action('init', 'create_post_types');
