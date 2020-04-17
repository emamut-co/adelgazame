<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'slider/v1/', 'get', array(
    'methods' => 'GET',
    'callback' => 'get_slider'
  ) );
} );

function get_slider($request)
{
  $args = array(
    'post_type'   => 'slide',
    'tax_query'   => array(
      array(
        'taxonomy'  => 'slider',
        'field'     => 'slug',
        'terms'     => array( $request['slider'] )
      )
    )
  );
  $post_array = new WP_Query($args);

  $post_array = $post_array->posts;

  foreach ($post_array as $post)
  {
    $post->post_image = get_the_post_thumbnail_url($post->ID);

    $post->post_tags = array();
    $tags = get_the_terms($post->ID, array('slider'));
    foreach ($tags as $key => $tag)
        $post->post_tags[] = $tag->slug;

    $post->custom_fields = get_post_custom($post->ID);
  }

  return $post_array;
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'staff/v1/', 'get', array(
    'methods' => 'GET',
    'callback' => 'get_staff'
  ));
});

function get_staff($request)
{
  $args = array(
    'post_type'   => 'staff',
    'meta_key'    => 'staff_page',
    'meta_value'  => $request['page']
  );

  $post_array = new WP_Query($args);
  $post_array = $post_array->posts;

  foreach ($post_array as $post)
  {
    $post->custom_fields = get_post_custom($post->ID);
    $post->post_image = get_the_post_thumbnail_url($post->ID);
  }

  return $post_array;
}