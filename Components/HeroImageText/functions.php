<?php

namespace Flynt\Components\HeroImageText;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'HeroImageText',
        'label' => __('Hero: Image Text', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg',
                'wrapper' =>  [
                    'width' => 50,
                ],
            ],
            [
                'label' => __('Video', 'flynt'),
                'instructions' => __('Video-Format: mp4.', 'flynt'),
                'name' => 'video',
                'type' => 'file',
                'return_format' => 'url',
                'mime_types' => 'mp4',
                'wrapper' => [
                    'width' => 50,
                ]
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
                'wrapper' =>  [
                    'width' => 100,
                ],
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' =>  [
                    'width' => 100,
                ],
            ],
            [
                'label' => __('Button', 'flynt'),
                'name' => 'buttonLink',
                'type' => 'link',
                'required' => 0,
                'wrapper' => [
                    'width' => 100
                ],
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
                    FieldVariables\getColorBackground(),
                ]
            ]
        ]
    ];
}
