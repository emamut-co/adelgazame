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
        'name'              => 'Imagen grande',
        'id'                => $prefix . 'big_image',
        'type'              => 'image',
        'max_file_uploads'  => 1
      ),
      array(
        'name'              => 'Página',
        'id'                => $prefix . 'page',
        'type'              => 'select',
        'placeholder'       => 'Elija una página',
        'options'           => array(
          'balon-intragastrico' => 'Balón Intragástrico',
          'nutricion'           => 'Nutrición',
          'deportologia'        => 'Deportología'
        )
      )
    )
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'staff_register_meta_boxes' );