<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless',
    'description' => 'This extension provides way to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.pl',
    'category' => 'fe',
    'internal' => '',
    'version' => '2.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'frontend' => '9.5.0-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
