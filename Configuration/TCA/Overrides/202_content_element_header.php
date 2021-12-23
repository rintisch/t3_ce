<?php

/**
 * This file was part of the package bk2k/bootstrap-package and is adapted here.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/***************
 * Form configuration for edit form
 */
$GLOBALS['TCA']['tt_content']['types']['header']['showitem'] = '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general, header_label,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category, categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
            ';


/***************
 * Image cropping for content element "Header"
 */
$GLOBALS['TCA']['tt_content']['types']['header']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'default' => [
        'disabled' => true,
    ],
    'sm' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang.xlf:crop_variants.sm.label',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
        ],
        'coverAreas' => [
        ],
        'allowedAspectRatios' => [
            '3:2' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                'value' => 1.5,
            ],
        ],
        'selectedRatio' => '',
    ],
    'md' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang.xlf:crop_variants.md.label',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
        ],
        'coverAreas' => [
        ],
        'allowedAspectRatios' => [
            '2:1' => [
                'title' => '2:1',
                'value' => 2.0,
            ],
        ],
        'selectedRatio' => '',
    ],
    'lg' => [
        'title' => 'LLL:EXT:picture_extend/Resources/Private/Language/locallang.xlf:crop_variants.lg.label',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
        ],
        'coverAreas' => [
        ],
        'allowedAspectRatios' => [
            '3:1' => [
                'title' => '3:1',
                'value' => 3.0,
            ],
        ],
        'selectedRatio' => '',
    ],
];
