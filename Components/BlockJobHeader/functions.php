<?php

namespace Flynt\Components\BlockJobHeader;

use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=BlockJobHeader', function ($data) {
    $data['dateFormat'] = get_option('date_format');
    return $data;
});

Options::addTranslatable('BlockJobHeader', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Material', 'flynt'),
                'name' => 'tableMaterial',
                'type' => 'text',
                'default_value' => __('Material', 'flynt'),
                'wrapper' => [
                    'width' => 25,
                ],
            ],
            [
                'label' => __('Softening Temperature', 'flynt'),
                'name' => 'tableSofteningTemperature',
                'type' => 'text',
                'default_value' => __('Softening Temperature', 'flynt'),
                'wrapper' => [
                    'width' => 25
                ]
            ],
            [
                'label' => __('Impact Strength', 'flynt'),
                'name' => 'tableImpactStrength',
                'type' => 'text',
                'default_value' => __('Impact Strength', 'flynt'),
                'wrapper' => [
                    'width' => 25
                ]
            ],
            [
                'label' => __('Tensile Strength', 'flynt'),
                'name' => 'tableTensileStrength',
                'type' => 'text',
                'default_value' => __('Tensile Strength', 'flynt'),
                'wrapper' => [
                    'width' => 25
                ]
            ],
            [
                'label' => __('Colors', 'flynt'),
                'name' => 'tableColors',
                'type' => 'text',
                'default_value' => __('Colors', 'flynt'),
                'wrapper' => [
                    'width' => 25
                ]
            ],
        ],
    ],
]);
