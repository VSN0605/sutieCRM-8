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
    'vehicle_id' => 
    array (
      'name' => 'vehicle_id',
      'type' => 'int',
      'vname' => 'LBL_VEHICLE_ID',
      'auto_increment' => true,
      'readonly' => true,
      'required' => false,
      'studio' => 'visible',
    ),
    'vehicle_name' => 
    array (
      'name' => 'vehicle_name',
      'type' => 'varchar',
      'len' => 100,
      'vname' => 'LBL_VEHICLE_NAME',
    ),
    'vehicle_color' => 
    array (
      'name' => 'vehicle_color',
      'type' => 'varchar',
      'len' => 50,
      'vname' => 'LBL_VEHICLE_COLOR',
    ),
    'vehicle_model' => 
    array (
      'name' => 'vehicle_model',
      'type' => 'varchar',
      'len' => 100,
      'vname' => 'LBL_VEHICLE_MODEL',
    ),
    'vehicle_number' => 
    array (
      'name' => 'vehicle_number',
      'type' => 'int',
      'vname' => 'LBL_VEHICLE_NUMBER',
    ),
  ),
  'custom_fields' => false,
);