<?php

$viewdefs['Vehicles']['EditView'] = [
    'templateMeta' => [
        'maxColumns' => 2,
        'widths' => [
            ['label' => '10', 'field' => '30'],
            ['label' => '10', 'field' => '30'],
        ],
    ],
    'panels' => [
        'default' => [
            ['name'],
            ['vehicle_name', 'vehicle_color'],
            ['vehicle_number'],
        ],
    ],
];