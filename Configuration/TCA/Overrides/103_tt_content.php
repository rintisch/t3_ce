<?php

/*
 * This file was part of the package bk2k/bootstrap-package and is adapted here
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

$ll = 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:';

/***************
 * Adjust columns for generic usage
 */
$temporaryColumns = [
    'background_color_class' => [
        'exclude' => true,
        'displayCond' => 'FIELD:frame_class:!=:none',
        'label' => $ll . 'field.background_color_class',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['none', '0'],
                ['Color 1', '1'],
                ['Color 2', '2'],
                ['Color 3', '3'],
                ['Color 4', '4'],
            ]
        ],
        'l10n_mode' => 'exclude',
    ],
    'header_label' => [
        'exclude' => true,
        'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.header_label',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumns);

/***************
 * Add fields to default palettes
 */
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] = '
    layout, frame_class, background_color_class,
    --linebreak--,
    space_before_class, space_after_class
';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'header_label',
    '',
    'before:header'
);

/**
 * Adapted PreviewRenderer for footer of content elements.
 * Add the following out commented lines to your TCA config
 * if you want to use the PreviewRenderer.
 * Alternatively you can extend the SpaceAndColorPreviewRenderer
 * in the same way as it extends the StandardContentPreviewRenderer.
 */
//$GLOBALS['TCA']['tt_content']['ctrl']['previewRenderer']
//    = \Rintisch\T3Ce\Backend\Preview\SpaceAndColorPreviewRenderer::class;
//$GLOBALS['TCA']['tt_content']['types']['textmedia']['previewRenderer']
//    = \Rintisch\T3Ce\Backend\Preview\SpaceAndColorPreviewRenderer::class;
