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
$GLOBALS['TCA']['tt_content']['columns']['background_color_class'] = [
    'exclude' => true,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => $ll . 'field.background_color_class',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['none', 'none'],
            ['Primärfarbe 500', 'bg-primary-500'],
            ['Sekundärfarbe 500', 'bg-secondary-500'],
            ['Weiß', 'bg-white'],
            ['Grau 100', 'bg-gray-100'],
            ['Grau 200', 'bg-gray-200'],
            ['Grau 300', 'bg-gray-300'],
            ['Grau 400', 'bg-gray-400'],
            ['Grau 500', 'bg-gray-500']
        ]
    ],
    'l10n_mode' => 'exclude',
];

$GLOBALS['TCA']['tt_content']['columns']['header_label'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.header_label',
    'config' => [
        'type' => 'input',
        'eval' => 'trim',
        'size' => 50,
        'max' => 255
    ]
];


/***************
 * Add fields to default palettes
 */
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] = '
    layout, frame_class, background_color_class,
    --linebreak--,
    space_before_class, space_after_class,
    --linebreak--,
    padding_top, padding_bottom
';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'header_label',
    '',
    'before:header'
);
