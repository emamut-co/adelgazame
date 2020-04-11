<?php
// Register Custom Post Type
function slide()
{
  $labels = array(
    'name'                => _x( 'Slide', 'Post Type General Name', 'slide' ),
    'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'slide' ),
    'menu_name'           => __( 'Slide', 'slide' ),
    'name_admin_bar'      => __( 'Slide', 'slide' ),
    'parent_item_colon'   => __( 'Parent Item:', 'slide' ),
    'all_items'           => __( 'Todos Los Slides', 'slide' ),
    'add_new_item'        => __( 'Añadir Nuevo Slide', 'slide' ),
    'add_new'             => __( 'Añadir Nuevo', 'slide' ),
    'new_item'            => __( 'Nuevo Slide', 'slide' ),
    'edit_item'           => __( 'Editar Slide', 'slide' ),
    'update_item'         => __( 'Actualizar Slide', 'slide' ),
    'view_item'           => __( 'Ver Slide', 'slide' ),
    'search_items'        => __( 'Buscar Slide', 'slide' ),
    'not_found'           => __( 'No encontrado', 'slide' ),
    'not_found_in_trash'  => __( 'No encontrado en papelera', 'slide' ),
  );

  $args = array(
    'label'                 => __( 'Slide', 'slide' ),
    'description'           => __( 'Slide Custom Post Type', 'slide' ),
    'labels'                => $labels,
    'supports'              => array( 'author', 'revisions', 'title', 'thumbnail' ),
    'taxonomies'            => array( 'sliders-category' ),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-gallery',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => false,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'slide-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller'
  );
  register_post_type( 'slide', $args );
}
add_action( 'init', 'slide', 0 );

function tr_create_my_taxonomy() {
  register_taxonomy(
    'sliders-category',
    'slide',
    array(
      'label' => __( 'Sliders' ),
      'rewrite' => array( 'slug' => 'sliders-category' ),
      'hierarchical' => false,
    )
  );
}
add_action( 'init', 'tr_create_my_taxonomy' );

add_filter( 'manage_slide_posts_columns', 'set_custom_edit_slide_columns' );
function set_custom_edit_slide_columns($columns) {
  unset( $columns['author'] );
  $columns['slide_image'] = __( 'Image', 'slide' );
  $columns['slide_tags'] = __( 'Sliders', 'slide' );

  return $columns;
}

add_action( 'manage_slide_posts_custom_column' , 'custom_slide_column', 10, 2 );
function custom_slide_column( $column, $post_id ) {
  switch ( $column ) {
    case 'slide_image' :
      echo '<img src="' . get_the_post_thumbnail_url($post_id, 'thumbnail') . '">';
      break;
    case 'slide_tags' :
      $tags = get_the_terms($post_id, array('sliders-category'));
      foreach ($tags as $key => $tag)
        echo $key > 0 ? ', ' . $tag->name : $tag->name;
      break;
  }
}