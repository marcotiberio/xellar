<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    // ACFComposer::registerFieldGroup([
    //     'name' => 'postMeta',
    //     'title' => 'Covers Info',
    //     'style' => '',
    //     'menu_order' => 1,
    //     'position' => 'acf_after_title',
    //     'fields' => [
    //         [
    //             'label' => __('Description', 'flynt'),
    //             'name' => 'descriptionTab',
    //             'type' => 'tab',
    //             'placement' => 'top',
    //             'endpoint' => 0,
    //         ],
    //         [
    //             'label' => __('Description', 'flynt'),
    //             'name' => 'description',
    //             'type' => 'wysiwyg',
    //             'tabs' => 'visual',
    //             'media_upload' => 0,
    //             'delay' => 1,
    //             'wrapper' => [
    //                 'width' => 100,
    //             ]
    //         ],
    //         [
    //             'label' => __('Table', 'flynt'),
    //             'name' => 'tableTab',
    //             'type' => 'tab',
    //             'placement' => 'top',
    //             'endpoint' => 0,
    //         ],
    //         [
    //             'label' => __('Material', 'flynt'),
    //             'name' => 'tableMaterial',
    //             'type' => 'text',
    //             'wrapper' => [
    //                 'width' => 25
    //             ]
    //         ],
    //         [
    //             'label' => __('Softening Temperature', 'flynt'),
    //             'name' => 'tableSofteningTemperature',
    //             'type' => 'text',
    //             'wrapper' => [
    //                 'width' => 25
    //             ]
    //         ],
    //         [
    //             'label' => __('Impact Strength', 'flynt'),
    //             'name' => 'tableImpactStrength',
    //             'type' => 'text',
    //             'wrapper' => [
    //                 'width' => 25
    //             ]
    //         ],
    //         [
    //             'label' => __('Tensile Strength', 'flynt'),
    //             'name' => 'tableTensileStrength',
    //             'type' => 'text',
    //             'wrapper' => [
    //                 'width' => 25
    //             ]
    //         ],
    //         [
    //             'label' => __('Colors', 'flynt'),
    //             'name' => 'tableColors',
    //             'type' => 'text',
    //             'wrapper' => [
    //                 'width' => 25
    //             ]
    //         ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'post',
    //             ],
    //         ],
    //     ],
    // ]);
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => __('Post Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Post Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\SliderBox\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
});
