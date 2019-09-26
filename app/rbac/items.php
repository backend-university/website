<?php
return [
    'createProduct' => [
        'type' => 2,
        'description' => 'Create a product',
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
        ],
    ],
];
