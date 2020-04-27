<?php
// Register Custom Post Type
function plans()
{
  $labels = array(
    'name'                => _x( 'Plans', 'Post Type General Name', 'plans' ),
    'singular_name'       => _x( 'Plan', 'Post Type Singular Name', 'plans' ),
    'menu_name'           => __( 'Plans', 'plans' ),
    'name_admin_bar'      => __( 'Plans', 'plans' ),
    'parent_item_colon'   => __( 'Parent Item:', 'plans' ),
    'all_items'           => __( 'Todos Plans', 'plans' ),
    'add_new_item'        => __( 'Añadir Nuevo Plan', 'plans' ),
    'add_new'             => __( 'Añadir Nuevo', 'plans' ),
    'new_item'            => __( 'Nuevo Plan', 'plans' ),
    'edit_item'           => __( 'Editar Plan', 'plans' ),
    'update_item'         => __( 'Actualizar Plan', 'plans' ),
    'view_item'           => __( 'Ver Plan', 'plans' ),
    'search_items'        => __( 'Buscar Plan', 'plans' ),
    'not_found'           => __( 'No encontrado', 'plans' ),
    'not_found_in_trash'  => __( 'No encontrado en papelera', 'plans' ),
  );

  $args = array(
    'label'                 => __( 'Plans', 'plans' ),
    'description'           => __( 'Plans Custom Post Type', 'plans' ),
    'labels'                => $labels,
    'supports'              => array( 'author', 'revisions', 'title', 'thumbnail', 'editor' ),
    'taxonomies'            => array('category'),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-megaphone',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => false,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'plans-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller'
  );
  register_post_type( 'plans', $args );
}
add_action( 'init', 'plans', 0 );

add_filter( 'manage_plans_posts_columns', 'set_custom_edit_plans_columns' );
function set_custom_edit_plans_columns($columns) {
  $columns['plans_image'] = __( 'Image', 'plans' );

  return $columns;
}

add_action( 'manage_plans_posts_custom_column' , 'custom_plans_column', 10, 2 );
function custom_plans_column( $column, $post_id ) {
  switch ( $column ) {
    case 'plans_image' :
      echo '<img src="' . get_the_post_thumbnail_url($post_id, 'thumbnail') . '">';
      break;
  }
}