<?php

/**
 * Extension Manager/Repository config file for ext "t3_ce".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 CE',
    'description' => 'Often needed content elements which are not included in Fluid Styled Content.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Rintisch\\T3Ce\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Gerald Rintisch',
    'author_email' => 'gerald.rintisch@posteo.de',
    'author_company' => 'Rintisch',
    'version' => '1.0.0',
];
