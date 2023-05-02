<?php

namespace Flynt\Components\BlockPilotSelector;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'pilot';

add_filter('Flynt/addComponentData?name=BlockPilotSelector', function ($data) {
    $postType = POST_TYPE;

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => $postType,
        'ignore_sticky_posts' => 1,
        'posts_per_page' => 3,
        'order' => 'ASC',
    ]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockPilotSelector',
        'label' => 'Listing: Pilot (select)',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Content Selection', 'flynt'),
                'name' => 'contentSelectionTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Artists', 'flynt'),
                'name' => 'post',
                'type' => 'relationship',
                'post_type' => [
                    'pilot',
                ],
                'allow_null' => 1,
                'multiple' => 1,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
            ],
        ]
    ];
}

Options::addTranslatable('BlockPilotSelector', [
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
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => __('View all', 'flynt'),
                'required' => 0,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('All Posts Link', 'flynt'),
                'name' => 'allPostsLink',
                'type' => 'link',
                'required' => 0,
                'wrapper' => [
                    'width' => 50
                ],
            ],
        ],
    ]
]);
