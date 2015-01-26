<?php 

//========================================================================================================================

function my_custom_post_docu() {
  $labels = array(
    'name'               => _x( 'Documentation', 'post type general name' ),
    'singular_name'      => _x( 'Documentation', 'post type singular name' ),
    'add_new'            => _x( 'Add New Post', 'book' ),
    'add_new_item'       => __( 'Add New Post' ),
    'edit_item'          => __( 'Edit Post' ),
    'new_item'           => __( 'New Post' ),
    'all_items'          => __( 'All Posts' ),
    'view_item'          => __( 'View Post' ),
    'search_items'       => __( 'Search Post' ),
    'not_found'          => __( 'No Post found' ),
    'not_found_in_trash' => __( 'No Post found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Documentation'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => '',
    'public'        => true,
    'menu_position' => 8,
    'capability_type'    => 'post',
    'menu_icon' => 'dashicons-format-aside',
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'docu', $args ); 
}
add_action( 'init', 'my_custom_post_docu' );

function my_docu_taxonomy() {
    $labels = array(
      'name'              => _x( 'Documentation Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Documentation Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Documentation Categories' ),
      'all_items'         => __( 'All Documentation Categories' ),
      'parent_item'       => __( 'Parent Documentation Category' ),
      'parent_item_colon' => __( 'Parent Documentation Category:' ),
      'edit_item'         => __( 'Edit Documentation Category' ), 
      'update_item'       => __( 'Update Documentation Category' ),
      'add_new_item'      => __( 'Add New Documentation Category' ),
      'new_item_name'     => __( 'New Documentation Category' ),
      'menu_name'         => __( 'Documentation Categories' ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
    );
    register_taxonomy( 'docu_category', 'docu', $args );
  }
  add_action( 'init', 'my_docu_taxonomy', 0 );



//========================================================================================================================


function my_custom_post_main_features() {
  $labels = array(
    'name'               => _x( 'Main Features', 'post type general name' ),
    'singular_name'      => _x( 'Main Features', 'post type singular name' ),
    'add_new'            => _x( 'Add New Post', 'book' ),
    'add_new_item'       => __( 'Add New Post' ),
    'edit_item'          => __( 'Edit Post' ),
    'new_item'           => __( 'New Post' ),
    'all_items'          => __( 'All Posts' ),
    'view_item'          => __( 'View Post' ),
    'search_items'       => __( 'Search Post' ),
    'not_found'          => __( 'No Post found' ),
    'not_found_in_trash' => __( 'No Post found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Main Features'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => '',
    'public'        => true,
    'menu_position' => 8,
    'menu_icon' => 'dashicons-format-aside',
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'main-features', $args ); 
}
add_action( 'init', 'my_custom_post_main_features' );



//========================================================================================================================
