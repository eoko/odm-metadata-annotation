<?php
return [
    'odm' => [
        'metadata' => [
            'driver' => 'Eoko\ODM\Annotation',
            'options' => [
                'autoload' => [
                    'Eoko\ODM\Metadata\Annotation' => __DIR__ . '/../src/'
                ],
            ],
        ],
    ],
];
