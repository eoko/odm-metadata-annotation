<?php
return [
    'eoko' => [
        'odm' => [
            'metadata' => [
                'driver' => 'Eoko\\ODM\\Metadata\\Annotation',
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            'Eoko\\ODM\\Metadata\\Annotation' => 'Eoko\\ODM\\Metadata\\Annotation\\AnnotationFactory'
        ]
    ]
];
