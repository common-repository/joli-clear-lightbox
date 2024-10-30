<?php

$vars = [
    'dontaddpx' => '<span style="color:orange;">' . __('Do not add "px".', 'joli-clb') . '</span>',
    'dontaddem' => '<span style="color:orange;">' . __('Do not add "em".', 'joli-clb') . '</span>',
];

return [
    [
        'group' => 'general',
        'label' => __('General', 'joli-clb'),
        'sections' => [
            //Post types
            [
                'name' => 'post-types',
                'title' => __('Post types', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'post-types',
                        'title' => __('Post types', 'joli-clb'),
                        'type' => 'posttype',
                        'args' => [
                            'desc' => __('Enables lightbox on specific post types', 'joli-clb'),
                        ],
                        'default' => null,
                        'initial_value' => ['post', 'page'], //set value upon activation
                    ],
                ],
            ],
            [
                'name' => 'force-loading',
                'title' => __('Force loading', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'force-post-types',
                        'title' => __('Always load for', 'joli-clb'),
                        'type' => 'posttype',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Always load the lightbox on specific post types', 'joli-clb'),
                        ],
                        'default' => null,
                    ],
                ],
            ],
            [
                'name' => 'medias',
                'title' => __('Medias', 'joli-clb'),
                // 'desc' => 'Section description',
                'fields' => [
                    [
                        'id' => 'selector',
                        'title' => __('Selector', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'desc' => __('Media links to be displayed in the lightbox', 'joli-clb'),
                            'placeholder' => __('.entry-content a', 'joli-clb'),
                            'key' => 'selector',
                            'var_type' => 'string',
                        ],
                        'default' => __('.entry-content a', 'joli-clb'),
                    ],
                    [
                        'id' => 'media-types',
                        'title' => __('Media types', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'desc' => __('Allowed media types (separated by a "|")', 'joli-clb'),
                            'placeholder' => __('jpg|gif|png', 'joli-clb'),
                            'key' => 'mediaTypes',
                            'var_type' => 'string',
                        ],
                        'default' => __('jpg|gif|png|jpeg|jfif', 'joli-clb'),
                    ],
                ],
            ],
            //Theme
            [
                'name' => 'theme',
                'title' => __('Theme', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'color-scheme',
                        'title' => __('Color scheme', 'joli-clb'),
                        'type' => 'select',
                        'args' => [
                            // 'class' => 'joli-ccac',
                            'desc' =>  __('Dark scheme has white control buttons and dark background. Light scheme has black controls and light background.', 'joli-clb'),
                            'values' => [
                                'dark' => __('Dark (default)', 'joli-clb'),
                                'light' => __('Light', 'joli-clb'),
                            ],
                            'key' => 'theme',
                            'var_type' => 'string',
                        ],
                        'default' => 'dark',
                    ],
                    [
                        'id' => 'theme',
                        'title' => __('Theme', 'joli-clb'),
                        'type' => 'select',
                        'args' => [
                            'pro' => true,
                            // 'class' => 'joli-ccac',
                            'desc' =>  __('Selecting a Theme will override all Styles settings.', 'joli-clb'),
                            'values' => [
                                'none' => __('None (default)', 'joli-clb'),
                            ],
                            // 'settings' => null,
                            // 'key' => 'theme',
                            'var_type' => 'string',
                        ],
                        'default' => 'none',
                    ],
                    // [
                    //     'id' => 'theme-override',
                    //     'title' => __('Allow custom settings override', 'joli-clb'),
                    //     'type' => 'switch',
                    //     'args' => [
                    //         'pro' => true,
                    //         'desc' => __('By default a theme will take over all the custom appearance/frame settings. Check this if you wish to override one or many settings from the theme', 'joli-clb'),
                    //         // 'class' => 'tab-general'
                    //         // 'key' => 'loop',
                    //         // 'var_type' => 'bool',
                    //     ],
                    //     'default' => 0,
                    //     'sanitize' => 'checkbox',
                    // ],
                ],
            ],
            [
                'name' => 'behaviour',
                'title' => __('Behaviour', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'loop',
                        'title' => __('Loop', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Loops over to the first element when the end of the gallery has been reached', 'joli-clb'),
                            // 'class' => 'tab-general'
                            'key' => 'loop',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'esc-key',
                        'title' => __('Press Esc key to close', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Enables to close the lightbox by pressing the Esc key', 'joli-clb'),
                            'key' => 'escKey',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'arrow-keys',
                        'title' => __('Navigates with arrow keys', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Enables navigation with keyboard Arrow keys', 'joli-clb'),
                            'key' => 'arrowKeys',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'close-click-away',
                        'title' => __('Close on click-away', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Closes the lightbox when clicking a blank area.', 'joli-clb'),
                            'key' => 'closeOnClickAway',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'idle-after',
                        'title' => __('Hide controls after', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Hides the controls after x milliseconds of inactivity', 'joli-clb'),
                            'placeholder' => '3000',
                            'key' => 'idleAfter',
                            'var_type' => 'int',
                        ],
                        'default' => 3000,
                        'sanitize' => 'Number',
                    ],
                ],
            ],
        ],
    ],
    [
        // 'group' => Application::SLUG . '_settings',
        'group' => 'appearance',
        'label' => __('Appearance', 'joli-clb'),
        'sections' => [
            [
                'name' => 'display',
                'title' => __('Display', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'show-counter',
                        'title' => __('Show counter', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Shows a counter with the current index in the top left corner (e.g: "3/10"). Counter does not show if only one item.', 'joli-clb'),
                            'key' => 'showCounter',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'show-caption',
                        'title' => __('Show caption', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Shows a caption (if provided) or the "alt" attribue as a fallback.', 'joli-clb'),
                            'key' => 'showCaption',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'vertical-padding',
                        'title' => __('Vertical padding', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'desc' => __('If media height is bigger than the container, a padding may be applied on each side.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => '50 (top bar height)',
                            'key' => 'contentPaddingY',
                            'var_type' => 'int',
                        ],
                        'default' => 0,
                        'sanitize' => 'Number',
                    ],
                    [
                        'id' => 'horizontal-padding',
                        'title' => __('Horizontal padding', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'desc' => __('If media width is bigger than the container, a padding may be applied on each side.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => '50 (navigation arrows width)',
                            'key' => 'contentPaddingX',
                            'var_type' => 'int',
                        ],
                        'default' => 0,
                        'sanitize' => 'Number',
                    ],
                    [
                        'id' => 'media-max-height',
                        'title' => __('Max frame height', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Restricts the maximum height of the frame (border included). Set to "0" for no limitation.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => __('500', 'joli-clb'),
                            'key' => 'imageMaxHeight',
                            'var_type' => 'int',
                        ],
                        'default' => '0',
                    ],
                    [
                        'id' => 'media-max-width',
                        'title' => __('Max frame width', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Restricts the maximum height of the frame (border included). Set to "0" for no limitation.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => __('500', 'joli-clb'),
                            'key' => 'imageMaxWidth',
                            'var_type' => 'int',
                        ],
                        'default' => '0',
                    ],
                ],
            ],
            [
                'name' => 'navigation',
                'title' => __('Navigation', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'navigation-buttons-height',
                        'title' => __('Navigation buttons height', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'desc' => __('By default, the navigation buttons use all the vertical space available. If you wish to have smaller buttons, you can specify a fixed value in pixels. Leave to 0 for default value.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => '120',
                            'key' => 'navHeight',
                            'var_type' => 'int',
                        ],
                        'default' => 0,
                        'sanitize' => 'Number',
                    ],
                ],
            ],
        ],
    ],
    [
        // 'group' => Application::SLUG . '_settings',
        'group' => 'styles',
        'label' => __('Styles', 'joli-clb'),
        'sections' => [
            [
                'name' => 'background',
                'title' => __('Background', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'ambi-background',
                        'title' => __('AmbiBackground™', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'pro' => true,
                            'desc' => __('AmbiBackground™ is a unique feature that makes the background have the same color tone as the current image. It provides an enhanced visualization experience for the viewer but requires more processing power. (Deactivate if any slowness).', 'joli-clb'),
                            'key' => 'ambiBackground',
                            'var_type' => 'bool',
                            'img' => 'ambibackground-demo-bis.jpg'
                        ],
                        'default' => 0,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'jcl-background-color',
                        'title' => __('Background color', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            // 'class' => 'tab-appearance',
                            'placeholder' => '#000000',
                            'classes' => 'joli-color-picker', //adds color picker
                            'key' => 'backgroundColor',
                            'var_type' => 'string',
                        ],
                        // 'default' => '#ffffff',
                        'sanitize' => 'Color'
                    ],
                    [
                        'id' => 'jcl-background-opacity',
                        'title' => __('Background opacity', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'desc' => __('Opacity of the background (in percent between 0 and 100)', 'joli-clb'),
                            'placeholder' => '90',
                            'key' => 'backgroundOpacity',
                            'var_type' => 'int',
                        ],
                        'default' => 90,
                        'sanitize' => 'Number',
                    ],
                    [
                        'id' => 'jcl-background-blur',
                        'title' => __('Background blur', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Background blur will blur the underlying content for a less distractive visualization.', 'joli-clb'),
                            'key' => 'backgroundBlur',
                            'var_type' => 'bool',
                        ],
                        'default' => 1,
                        'sanitize' => 'checkbox',
                    ],
                ],
            ],
            [
                'name' => 'frame-border-settings',
                'title' => __('Frame Border settings', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'frame-border',
                        'title' => __('Frame border', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'desc' => __('Will show a border around the actual image.', 'joli-clb'),
                            'key' => 'frameBorder',
                            'var_type' => 'bool',
                        ],
                        'default' => 0,
                        'sanitize' => 'checkbox',
                    ],
                    [
                        'id' => 'frame-border-width',
                        'title' => __('Frame border width', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Width of the frame in pixels.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => '12',
                            'key' => 'frameBorderWidth',
                            'var_type' => 'int',
                        ],
                        'default' => 0,
                        'sanitize' => 'Number',
                    ],
                    [
                        'id' => 'frame-border-radius',
                        'title' => __('Rounded corners radius', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Specify a number in pixels for rounded border corners. Leave to 0 for no rounding.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => '14',
                            'key' => 'frameBorderRadius',
                            'var_type' => 'int',
                        ],
                        'default' => 0,
                        'sanitize' => 'Number',
                    ],
                    [
                        'id' => 'frame-border-color',
                        'title' => __('Frame border color', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            // 'class' => 'tab-appearance',
                            'placeholder' => '#ffffff',
                            'classes' => 'joli-color-picker', //adds color picker
                            'key' => 'frameBorderColor',
                            'var_type' => 'string',
                        ],
                        // 'default' => '#ffffff',
                        'sanitize' => 'Color'
                    ],
                    [
                        'id' => 'frame-border-opacity',
                        'title' => __('Frame border opacity', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Opacity of the frame border (in percent between 0 and 100)', 'joli-clb'),
                            'placeholder' => '50',
                            'key' => 'frameBorderOpacity',
                            'var_type' => 'int',
                        ],
                        'default' => 100,
                        'sanitize' => 'Number',
                    ],
                    [
                        'id' => 'frame-shadow',
                        'title' => __('Frame shadow', 'joli-clb'),
                        'type' => 'switch',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Adds a shadow effect around the frame.', 'joli-clb'),
                            'key' => 'frameBoxShadow',
                            'var_type' => 'bool',
                        ],
                        'default' => 0,
                        'sanitize' => 'checkbox',
                    ],
                ],
            ],
            [
                'name' => 'frame-image-settings',
                'title' => __('Image settings', 'joli-clb'),
                'fields' => [
                    [
                        'id' => 'image-border-radius',
                        'title' => __('Image rounded corners radius', 'joli-clb'),
                        'type' => 'text',
                        'args' => [
                            'pro' => true,
                            'desc' => __('Specify a number in pixels for rounded border corners of the actual image within the frame. Leave to 0 for no rounding.', 'joli-clb') . ' ' . $vars['dontaddpx'],
                            'placeholder' => '4',
                            'key' => 'imageBorderRadius',
                            'var_type' => 'int',
                        ],
                        'default' => 0,
                        'sanitize' => 'Number',
                    ],
                ],
            ],
        ],
    ],
];
