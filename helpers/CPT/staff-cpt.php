<?php
// Register Custom Post Type
function staff()
{
  $labels = array(
    'name'                => _x( 'Staff', 'Post Type General Name', 'staff' ),
    'singular_name'       => _x( 'Staff', 'Post Type Singular Name', 'staff' ),
    'menu_name'           => __( 'Staff', 'staff' ),
    'name_admin_bar'      => __( 'Staff', 'staff' ),
    'parent_item_colon'   => __( 'Parent Item:', 'staff' ),
    'all_items'           => __( 'Todos Staff', 'staff' ),
    'add_new_item'        => __( 'Añadir Nuevo Staff', 'staff' ),
    'add_new'             => __( 'Añadir Nuevo', 'staff' ),
    'new_item'            => __( 'Nuevo Staff', 'staff' ),
    'edit_item'           => __( 'Editar Staff', 'staff' ),
    'update_item'         => __( 'Actualizar Staff', 'staff' ),
    'view_item'           => __( 'Ver Staff', 'staff' ),
    'search_items'        => __( 'Buscar Staff', 'staff' ),
    'not_found'           => __( 'No encontrado', 'staff' ),
    'not_found_in_trash'  => __( 'No encontrado en papelera', 'staff' ),
  );

  $args = array(
    'label'                 => __( 'Staff', 'staff' ),
    'description'           => __( 'Staff Custom Post Type', 'staff' ),
    'labels'                => $labels,
    'supports'              => array( 'author', 'revisions', 'title', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-users',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => false,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'staff-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller'
  );
  register_post_type( 'staff', $args );
}
add_action( 'init', 'staff', 0 );

add_filter( 'manage_staff_posts_columns', 'set_custom_edit_staff_columns' );
function set_custom_edit_staff_columns($columns) {
  $columns['staff_image'] = __( 'Image', 'staff' );
  $columns['staff_title'] = __( 'Título', 'staff' );

  return $columns;
}

add_action( 'manage_staff_posts_custom_column' , 'custom_staff_column', 10, 2 );
function custom_staff_column( $column, $post_id ) {
  switch ( $column ) {
    case 'staff_image' :
      echo '<img src="' . get_the_post_thumbnail_url($post_id, 'thumbnail') . '">';
      break;
    case 'staff_title' :
      $custom_fields = get_post_custom($post_id);
      echo $custom_fields['staff_treatment'][0];
      break;
  }
}