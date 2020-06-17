<?php
// Register Custom Post Type
function benefits()
{
  $labels = array(
    'name'                => _x( 'Benefits', 'Post Type General Name', 'benefits' ),
    'singular_name'       => _x( 'Benefit', 'Post Type Singular Name', 'benefits' ),
    'menu_name'           => __( 'Benefits', 'benefits' ),
    'name_admin_bar'      => __( 'Benefits', 'benefits' ),
    'parent_item_colon'   => __( 'Parent Item:', 'benefits' ),
    'all_items'           => __( 'Todos Benefits', 'benefits' ),
    'add_new_item'        => __( 'Añadir Nuevo Benefit', 'benefits' ),
    'add_new'             => __( 'Añadir Nuevo', 'benefits' ),
    'new_item'            => __( 'Nuevo Benefit', 'benefits' ),
    'edit_item'           => __( 'Editar Benefit', 'benefits' ),
    'update_item'         => __( 'Actualizar Benefit', 'benefits' ),
    'view_item'           => __( 'Ver Benefit', 'benefits' ),
    'search_items'        => __( 'Buscar Benefit', 'benefits' ),
    'not_found'           => __( 'No encontrado', 'benefits' ),
    'not_found_in_trash'  => __( 'No encontrado en papelera', 'benefits' ),
  );

  $args = array(
    'label'                 => __( 'Benefits', 'benefits' ),
    'description'           => __( 'Benefits Custom Post Type', 'benefits' ),
    'labels'                => $labels,
    'supports'              => array( 'author', 'revisions', 'title', 'thumbnail', 'editor' ),
    'taxonomies'            => array('category'),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-buddicons-groups',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => false,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'benefits-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller'
  );
  register_post_type( 'benefits', $args );
}
add_action( 'init', 'benefits', 0 );

add_filter( 'manage_benefits_posts_columns', 'set_custom_edit_benefits_columns' );
function set_custom_edit_benefits_columns($columns) {
  $columns['benefits_image'] = __( 'Image', 'benefits' );

  return $columns;
}

add_action( 'manage_benefits_posts_custom_column' , 'custom_benefits_column', 10, 2 );
function custom_benefits_column( $column, $post_id ) {
  switch ( $column ) {
    case 'benefits_image' :
      echo '<img src="' . get_the_post_thumbnail_url($post_id, 'thumbnail') . '">';
      break;
  }
}