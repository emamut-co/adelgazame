<?php
function slide_register_meta_boxes($meta_boxes)
{
  $prefix = 'slide_';

  $meta_boxes[] = array(
    'id'         => 'slide',
    'title'      => 'Slide',
    'post_types' => 'slide',
    'context'    => 'normal',
    'priority'   => 'high',
    'fields'     => array(
      array(
        'name'              => 'Texto',
        'id'                => $prefix . 'text',
        'type'              => 'wysiwyg',
        'options'           => array (
          'textarea_rows'   => 5,
          'teeny'           => true,
          'media_buttons'   => false
        )
      ),
      array(
        'name'              => 'Texto del botón',
        'id'                => $prefix . 'button_text',
        'type'              => 'text'
      ),
      array(
        'name'              => 'URL del botón',
        'id'                => $prefix . 'button_url',
        'type'              => 'text'
      ),
      array(
        'name'              => 'Imagen móvil',
        'id'                => $prefix . 'mobile_image',
        'type'              => 'image_advanced',
        'max_file_uploads'  => 1
      )
    )
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'slide_register_meta_boxes' );