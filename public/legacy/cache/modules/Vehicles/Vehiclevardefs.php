<?php 
 $GLOBALS["dictionary"]["Vehicle"]=array (
  'table' => 'vehicles',
  'audited' => true,
  'templates' => 
  array (
    0 => 'basic',
    1 => 'assignable',
  ),
  'fields' => 
  array (
    'vehicle_name' => 
    array (
      'name' => 'vehicle_name',
      'type' => 'varchar',
      'len' => 100,
      'label' => 'LBL_VEHICLE_NAME',
    ),
    'vehicle_color' => 
    array (
      'name' => 'vehicle_color',
      'type' => 'varchar',
      'len' => 50,
      'label' => 'LBL_VEHICLE_COLOR',
    ),
    'vehicle_model' => 
    array (
      'name' => 'vehicle_model',
      'type' => 'varchar',
      'len' => 100,
      'label' => 'LBL_VEHICLE_MODEL',
    ),
    'vehicle_number' => 
    array (
      'name' => 'vehicle_number',
      'type' => 'int',
      'len' => 50,
      'label' => 'LBL_VEHICLE_NUMBER',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_vehicle_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'custom_fields' => false,
);