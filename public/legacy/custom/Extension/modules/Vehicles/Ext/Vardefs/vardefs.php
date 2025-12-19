<?php

$dictionary['Vehicle'] = [
    'table' => 'vehicles',
    'audited' => true,
    'templates' => ['basic', 'assignable'],
    'fields' => [
        'vehicle_name' => [
            'name' => 'vehicle_name',
            'type' => 'varchar',
            'len' => 100,
            'label' => 'LBL_VEHICLE_NAME',
        ],
        'vehicle_color' => [
            'name' => 'vehicle_color',
            'type' => 'varchar',
            'len' => 50,
            'label' => 'LBL_VEHICLE_COLOR',
        ],
        'vehicle_model' => [
            'name' => 'vehicle_model',
            'type' => 'varchar',
            'len' => 100,
            'label' => 'LBL_VEHICLE_MODEL',
        ],
        'vehicle_number' => [
            'name' => 'vehicle_number',
            'type' => 'int',
            'len' => 50,
            'label' => 'LBL_VEHICLE_NUMBER',
        ],
    ],
    'indices' => [
        [
            'name' => 'idx_vehicle_pk', 
            'type' => 'primary', 
            'fields' => ['id']
        ],
    ]
];