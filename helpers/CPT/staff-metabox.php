<?php
function staff_register_meta_boxes($meta_boxes)
{
  $prefix = 'staff_';

  $meta_boxes[] = array(
    'id'         => 'staff',
    'title'      => 'Staff',
    'post_types' => 'staff',
    'context'    => 'normal',
    'priority'   => 'high',
    'fields'     => array(
      array(
        'name'              => 'Tratamiento',
        'id'                => $prefix . 'treatment',
        'type'              => 'text',
        'placeholder'       => 'Doctor o Doctora'
      ),
      array(
        'name'              => 'Título',
        'id'                => $prefix . 'degree',
        'type'              => 'text',
        'placeholder'       => 'Médico'
      ),
      array(
        'name'              => 'Imagen',
        'id'                => $prefix . 'image',
        'type'              => 'image_advanced',
        'max_status'        => false,
        'max_file_uploads'  => 1,
        'image_size'        => 'medium'
      ),
      array(
        'name'              => 'Texto',
        'id'                => $prefix . 'text',
        'type'              => 'wysiwyg',
        'options'           => array (
          'textarea_rows'   => 5,
          'teeny'           => true,
          'media_buttons'   => false
        )
      )
    )
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'staff_register_meta_boxes' );