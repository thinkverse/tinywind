<?php

return [

    'production' => false,

    'baseUrl' => 'http://tinywind.test',

    'title' => 'Tinywind',

    'description' => 'A small collection of free Tailwind components.',

    'collections' => [
        'pages',
    ],

    'components' => [
        'Accordions' => [
            'Basic' => 'accordions.basic'
        ],
        'Alerts' => [
            'Basic with dismiss' => 'alerts.basic',
            'Information with icon' => 'alerts.info',
        ],
        'Avatars' => [
            'Basic' => 'avatars.basic',
            'Activity indicator' => 'avatars.activity',
        ],
        'Badges' => [
            'Basic' => 'badges.basic',
            'Pills' => 'badges.pills',
            'Small' => 'badges.small',
            'Small pills' => 'badges.small-pills',
        ],
        'Buttons' => [
            'Solid' => 'buttons.solid',
            'Outline' => 'buttons.outline',
            'Rounded' => 'buttons.rounded',
            'Icons' => 'buttons.icons',
            'Three dimensional' => 'buttons.3d'
        ],
        'Blog posts' => [
            'Card' => 'blogs.card',
        ],
        'Empty states' => [
            'Basic' => 'empty-states.basic',
            'List' => 'empty-states.list',
            'Minimal' => 'empty-states.minimal',
        ],
        'Inputs' => [
            'Basic' => 'inputs.basic',
            'With help' => 'inputs.with-help',
            'Optional' => 'inputs.optional',
            'Validation errors' => 'inputs.validation-errors',
            'Checkbox group' => 'inputs.checkbox',
            'Radio group' => 'inputs.radio-group',
        ],
        'Maps' => false,
        'Stars' => [
            'Basic' => 'stars.basic',
        ],
        'Stats' => [
            'Basic' => 'stats.basic',
            'With icon' => 'stats.icon',
        ],
        'Tables' => [
            'Basic' => 'tables.basic',
            'Striped' => 'tables.striped',
            'With actions' => 'tables.actions'
        ],
        'Tabs' => [
            'Pills' => 'tabs.pills',
        ],
    ]

];
