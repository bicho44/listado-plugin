<?php
/*
Title: Datos Item
Post Type: imgd_listado
Description: Datos para el Item del Directorio
Priority: default
Order: 3
*/
piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_estrellas',
    'label' => __('Cantidad de Estrellas','imgd'),
    'value' => 0, // set default value
    'columns' => 6,
    'class'=>'estrellas',
    'choices' => array(
        0 => __('0', 'imgd')
        ,1 => __('1', 'imgd')
        ,2 => __('2', 'imgd')
        ,3 => __('3', 'imgd')
        ,4 => __('4', 'imgd')
        ,5 => __('5', 'imgd')
    )
  ));

  piklist (
    'field',
    array(
        'type' => 'number',
        'scope' => 'post_meta',
        'field' => 'imgd_dir_cant_habitaciones',
        'label' => __('Habitaciones', 'imgd'),
        'value' => '',
        'columns' => 6,
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);

 piklist('field', array(
    'type' => 'group'
    ,'label' => __('Dirección', 'imgd')
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'imgd_item_address'
        ,'label' => __('Street Address', 'imgd')
        ,'columns' => 12
      )
      ,array(
        'type' => 'select'
        ,'field' => 'imgd_item_city'
        ,'label' => __('Ciudad', 'imgd')
        ,'columns' => 6
        ,'choices' => array(
      ''=>__('Seleccione Una', 'imgd')
    )
        + piklist(get_terms( array(
           'taxonomy'=> 'imgd_listado_ciudad',
      'hide_empty' => false
    ))
    ,array(
      'term_id'
      ,'name'
    )
  )
      )
      ,array(
        'type' => 'select'
        ,'field' => 'imgd_item_state'
        ,'label' => __('Estado / Provincia', 'imgd')
        ,'columns' => 6
        ,'choices' =>array(
      ''=>__('Seleccione Una', 'imgd')
    )
    +  piklist(get_terms(array(
        'taxonomy'=> 'imgd_listado_provincia',
      'hide_empty' => false
    ))
    ,array(
      'term_id'
      ,'name'
    )
  )
      ) 
    )
  ));


