<?php
return [
    'createProduct' => [
        'type' => 2,
        'description' => 'Create a product',
    ],
    'viewSubscriptions' => [
        'type' => 2,
        'description' => 'View subscriptions',
    ],
    'author' => [
        'type' => 1,
        'children' => [
            'createProduct',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'author',
            'viewSubscriptions',
        ],
    ],
];
