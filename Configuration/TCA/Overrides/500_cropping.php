<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/***************
 * Add crop variants
 */

$ratio16to9 = [
    'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:ratio.16_9',
    'value' => 16 / 9
];
$ratio4to3 = [
    'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:ratio.4_3',
    'value' => 4 / 3
];
$ratio1to1 = [
    'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:ratio.1_1',
    'value' => 1.0
];
$ratioFree = [
    'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:ratio.free',
    'value' => 0.0
];

$defaultCropSettings = [
    'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.default',
    'allowedAspectRatios' => [
        '16:9' => $ratio16to9,
        '4:3' => $ratio4to3,
        '1:1' => $ratio1to1,
        'NaN' => $ratioFree,
    ],
    'selectedRatio' => 'NaN',
    'cropArea' => [
        'x' => 0.0,
        'y' => 0.0,
        'width' => 1.0,
        'height' => 1.0,
    ]
];
$largeCropSettings = $defaultCropSettings;
$largeCropSettings['title'] = 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.large';
$mediumCropSettings = $defaultCropSettings;
$mediumCropSettings['title'] = 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.medium';
$smallCropSettings = $defaultCropSettings;
$smallCropSettings['title'] = 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.small';


/***************
 * Define where the above defined crop variants shall be used
 */
/***************
 * Image content element
 */
$GLOBALS['TCA']['tt_content']['types']['image']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'default' => $defaultCropSettings,
    'large' => $largeCropSettings,
    'medium' => $mediumCropSettings,
    'small' => $smallCropSettings
];

/***************
 * Textpic content element
 */
$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'large' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.large',
        'allowedAspectRatios' => [
            '4:3' => $ratio4to3,
            '1:1' => $ratio1to1,
        ],
        'selectedRatio' => '4:3',
    ],
    'medium' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.medium',
        'allowedAspectRatios' => [
            '4:3' => $ratio4to3,
            '1:1' => $ratio1to1,
        ],
        'selectedRatio' => '4:3',
    ],
    'small' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.small',
        'allowedAspectRatios' => [
            '4:3' => $ratio4to3,
            '1:1' => $ratio1to1,
        ],
        'selectedRatio' => '4:3',
    ],
];


/***************
 * Page hero content element
 */

if (!is_array($GLOBALS['TCA']['tt_content']['types']['page_hero'])) {
    $GLOBALS['TCA']['tt_content']['types']['page_hero'] = [];
}

$GLOBALS['TCA']['tt_content']['types']['page_hero']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'large' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.large',
        'allowedAspectRatios' => [
            '16:9' => $ratio16to9
        ],
        'selectedRatio' => '16:9',
    ],
    'medium' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.medium',
        'allowedAspectRatios' => [
            '16:9' => $ratio16to9
        ],
        'selectedRatio' => '16:9',
    ],
    'small' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang_be.xlf:option.small',
        'allowedAspectRatios' => [
            '1:1' => $ratio1to1
        ],
        'selectedRatio' => '1:1',
    ],
];

/***************
 * Pages
 */
foreach ([1, 3, 4] as $type) {
    $GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
        'default' => $defaultCropSettings,
        'large' => $largeCropSettings,
        'medium' => $mediumCropSettings,
        'small' => $smallCropSettings
    ];
}
