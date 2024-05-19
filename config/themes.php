<?php

return [
    'default' => 'navi',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

        // 'bliss' => [
        //     'views_path' => 'resources/themes/bliss/views',
        //     'assets_path' => 'public/themes/bliss/assets',
        //     'name' => 'Bliss',
        //     'parent' => 'default'
        // ]

        // 'velocity' => [
        //     'views_path' => 'resources/themes/velocity/views',
        //     'assets_path' => 'public/themes/velocity/assets',
        //     'name' => 'Velocity',
        //     'parent' => 'default'
        // ],

        'navi' => [
            'views_path' => 'resources/themes/navi/views',
            'assets_path' => 'public/themes/navi/assets',
            'name' => 'Navi',
            'parent' => 'default'
        ],
    ],

    'admin-default' => 'default',

    'admin-themes' => [
        'default' => [
            'views_path' => 'resources/admin-themes/default/views',
            'assets_path' => 'public/admin-themes/default/assets',
            'name' => 'Default'
        ]
    ]
];
