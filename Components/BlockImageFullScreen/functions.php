<?php

namespace Flynt\Components\BlockImageFullScreen;

use Flynt\Utils\Asset;
use Flynt\Utils\Options;
use Timber\Timber;

function getACFLayout()
{
    return [
        'name' => 'BlockImageFullScreen',
        'label' => __('Banner Image', 'flynt'),
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
                'required' => 1,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'contentTitle',
                'type' => 'text',
            ],
            [
                'label' => __('Title Position', 'flynt'),
                'name' => 'titlePosition',
                'type' => 'button_group',
                'choices' => [
                    'topLeft' => sprintf('<p>TOP LEFT</p>', __('Top-Left', 'flynt')),
                    'topRight' => sprintf('<p>TOP RIGHT</p>', __('Top-Right', 'flynt')),
                    'bottomLeft' => sprintf('<p>BOTTOM LEFT</p>', __('Bottom-Left', 'flynt')),
                    'bottomRight' => sprintf('<p>BOTTOM RIGHT</p>', __('Bottom-Right', 'flynt'))
                ]
            ],
        ]
    ];
}
