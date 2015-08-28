<?php
return [
    'eoko' => [
        'odm' => [
            'metadata' => [
                'driver' => 'Eoko\\ODM\\Metadata\\Annotation',
                'options' => [
                    'autoload' => [
                        'Eoko\\ODM\\Metadata\\Annotation' => __DIR__ . '/../src/'
                    ],
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            'Eoko\\ODM\\Metadata\\Annotation' => 'Eoko\\ODM\\Metadata\\Annotation\\AnnotationFactory'
        ]
    ]
];
