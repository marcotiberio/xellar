<?php

namespace Flynt\Components\GridImageText;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'GridImageText',
        'label' => __('Grid: Image Text', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'instructions' => __('Want to add a headline? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'name' => 'headlineTitle',
                'type' => 'text',
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'itemsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => __('Add Item', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'mime_types' => 'jpg,jpeg,png',
                        'wrapper' => [
                            'width' => 100
                        ],
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 100
                        ],
                    ],
                    [
                        'label' => __('Button', 'flynt'),
                        'name' => 'buttonLink',
                        'type' => 'link',
                        'return_format' => 'array'
                    ],
                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Grid Columns', 'flynt'),
                        'name' => 'gridColumns',
                        'type' => 'button_group',
                        'choices' => [
                            '1' => sprintf('<p>1</p>', __('1', 'flynt')),
                            '2' => sprintf('<p>2</p>', __('2', 'flynt')),
                            '3' => sprintf('<p>3</p>', __('3', 'flynt'))
                        ],
                        'default' => '3',
                    ],
                ]
            ]
        ]
    ];
}
