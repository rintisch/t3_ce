<?php

/*
 * This file was part of the package bk2k/bootstrap-package and is adapted here
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

$GLOBALS['TCA']['tt_content']['columns']['tx_t3ce_carousel_item'] = [
    'label' => 'LLL:EXT:t3ce/Resources/Private/Language/locallang_be.xlf:carousel_item',
    'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_t3ce_carousel_item',
        'foreign_field' => 'tt_content',
        'appearance' => [
            'useSortable' => true,
            'showSynchronizationLink' => true,
            'showAllLocalizationLink' => true,
            'showPossibleLocalizationRecords' => true,
            'showRemovedLocalizationRecords' => false,
            'expandSingle' => true,
            'enabledControls' => [
                'localize' => true,
            ]
        ],
        'behaviour' => [
            'mode' => 'select',
        ]
    ]
];
