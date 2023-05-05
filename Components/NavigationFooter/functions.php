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
        'label' => __('Background Image', 'flynt'),
        'name' => 'BackgroundImageTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Background Image', 'flynt'),
        'name' => 'backgroundImage',
        'type' => 'image',
        'preview_size' => 'medium',
        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
        'required' => 0,
        'mime_types' => 'jpg,jpeg,png,svg',
        'wrapper' =>  [
            'width' => 100,
        ]
    ],
    [
        'label' => __('Address', 'flynt'),
        'name' => 'AddressTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Address', 'flynt'),
        'name' => 'addressFooterHtml',
        'type' => 'wysiwyg',
        'delay' => 1,
        'media_upload' => 0,
        'required' => 0,
        'wrapper' =>  [
            'width' => 100,
        ],
    ],
    [
        'label' => __('Contacts', 'flynt'),
        'name' => 'contactsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Contacts', 'flynt'),
        'name' => 'contactsFooterHtml',
        'type' => 'wysiwyg',
        'delay' => 1,
        'media_upload' => 0,
        'required' => 0,
        'wrapper' =>  [
            'width' => 100,
        ],
    ],
    [
        'label' => __('Logo', 'flynt'),
        'name' => 'logoTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Logo', 'flynt'),
        'name' => 'logoFooter',
        'type' => 'image',
        'preview_size' => 'medium',
        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
        'required' => 0,
        'mime_types' => 'jpg,jpeg,png,svg',
        'wrapper' =>  [
            'width' => 100,
        ]
    ],
    [
        'label' => __('Social', 'flynt'),
        'name' => 'socialTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Social', 'flynt'),
        'name' => 'socialFooterHtml',
        'type' => 'wysiwyg',
        'delay' => 1,
        'media_upload' => 0,
        'required' => 0,
        'wrapper' =>  [
            'width' => 100,
        ],
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
