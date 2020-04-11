<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'slider/v1', '/get', array(
    'methods' => 'GET',
    'callback' => 'get_slider'
  ));
});

function get_slider()
{
  $args = array(
    'post_type' => 'slider',
  );

  $post_array = new WP_Query($args);
  $post_array = $post_array->posts;

  foreach ($post_array as $post)
  {
    $post->custom_fields = get_post_custom($post->ID);

    $post->slide_image = get_the_post_thumbnail_url($post->ID);
  }

  return $post_array;
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'staff/v1', '/get', array(
    'methods' => 'GET',
    'callback' => 'get_staff'
  ));
});

function get_staff()
{
  $args = array(
    'post_type' => 'staff',
  );

  $post_array = new WP_Query($args);
  $post_array = $post_array->posts;

  foreach ($post_array as $post)
  {
    $post->custom_fields = get_post_custom($post->ID);

    $post->custom_fields['staff_image'] = wp_get_attachment_image_src( $post->custom_fields['staff_image'][0] , 'large' )[0];
  }

  return $post_array;
}