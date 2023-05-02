<?php

function theme_add_color_palette()
{

    add_theme_support(
        'editor-color-palette',
        '#000',
        '#fff',
        '#263978',
        '#51bad9',
        '#e6ecee',
        '#d9d9d9',
    );
}
add_action('init', 'theme_add_color_palette');
