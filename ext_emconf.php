<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Tailor ext',
    'description' => 'Example extension using tailor cli tool for publishing to TER',
    'category' => 'example',
    'author' => 'Oliver Bartsch',
    'author_email' => 'bo@cedev.de',
    'author_company' => '',
    'state' => 'test',
    'clearCacheOnLoad' => true,
    'version' => '1.0.5',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'php' => '7.3.0-7.4.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
