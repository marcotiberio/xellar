<?php

namespace Flynt\Components\BlockWysiwyg;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwyg',
        'label' => __('Block: Text Editor', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ],
        ]
    ];
}
