<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'KWM2025',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Kwm2025\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Rebecca Wallner',
    'author_email' => 's2410456031@students.fh-hagenberg.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
