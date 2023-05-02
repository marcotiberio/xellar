<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => __('Page Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AccordionSystems\getACFLayout(),
                    Components\BlockAbout\getACFLayout(),
                    Components\BlockCta\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageFullScreen\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\GridFeatCovers\getACFLayout(),
                    Components\HeroContactForm\getACFLayout(),
                    Components\ListingCovers\getACFLayout(),
                    Components\ScrolltriggerComparison\getACFLayout(),
                    Components\SliderFeatProjects\getACFLayout(),
                    Components\SliderLogos\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'pilot'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'reusable-components'
                ],
            ],
        ],
    ]);
});
