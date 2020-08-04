<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->addContainer(
    't3ce-4cols-container',
    '4 Column Container',
    'Container for 4 columns',
    [
        [
            ['name' => 'ltr:1/4', 'colPos' => 201],
            ['name' => 'ltr:2/4', 'colPos' => 202],
            ['name' => 'ltr:3/4', 'colPos' => 203],
            ['name' => 'ltr:4/4', 'colPos' => 204]
        ]
    ],
    'EXT:t3_ce/Resources/Public/Icons/ContentElements/container-4col.svg'
);

