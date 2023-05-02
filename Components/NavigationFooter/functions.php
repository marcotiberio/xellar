<?php

namespace Flynt\Components\NavigationFooter;

use Flynt\Utils\Options;
use Flynt\Shortcodes;
use Timber\Timber;

add_action('init', function () {
    register_nav_menus([
        'navigation_footer' => __('Navigation Footer', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationFooter', function ($data) {
    $data['maxLevel'] = 0;
    $data['menu'] = Timber::get_menu('navigation_footer') ?? Timber::get_pages_menu();

    return $data;
});

Options::addTranslatable('NavigationFooter', [
    [
        'label' => __('General', 'flynt'),
        'name' => 'generalTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    // [
    //     'label' => __('Logo', 'flynt'),
    //     'name' => 'logoFooter',
    //     'type' => 'image',
    //     'preview_size' => 'medium',
    //     'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
    //     'required' => 0,
    //     'mime_types' => 'jpg,jpeg,png,svg',
    //     'wrapper' =>  [
    //         'width' => 100,
    //     ]
    // ],
    [
        'label' => __('Copyright', 'flynt'),
        'name' => 'copyrightFooter',
        'type' => 'text',
        'wrapper' =>  [
            'width' => 50,
        ]
    ],
    [
        'label' => __('Email', 'flynt'),
        'name' => 'emailFooter',
        'type' => 'link',
        'return_format' => 'array',
        'wrapper' =>  [
            'width' => 50,
        ]
    ],
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
                'label' => __('Aria Label', 'flynt'),
                'name' => 'ariaLabel',
                'type' => 'text',
                'default_value' => __('Footer', 'flynt'),
                'required' => 1,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
        ],
    ],
]);
