<?php

/*
 * This file was part of the package bk2k/bootstrap-package and is adapted here
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/***************
 * Adjust columns for generic usage
 */
$GLOBALS['TCA']['tt_content']['columns']['background_color_class'] = [
    'exclude' => true,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.background_color_class',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['none', 'none'],
            ['primary', 'theme-primary'],
            ['secondary', 'theme-secondary'],
            ['light', 'theme-light'],
            ['dark', 'theme-dark']
        ]
    ],
    'l10n_mode' => 'exclude',
];

/***************
 * Add fields to default palettes
 */
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] .= '
    --linebreak--,
    background_color_class
';
