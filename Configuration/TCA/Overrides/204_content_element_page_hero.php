<?php

/**
 * This file was part of the package bk2k/bootstrap-package and is adapted here.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/**
 * Temporary variables
 */
$extensionKey = 't3_ce';


/***************
 * Add Content Element
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['page_hero'])) {
    $GLOBALS['TCA']['tt_content']['types']['page_hero'] = [];
}

/***************
 * Add content element PageTSConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/ContentElement/Element/PageHero.tsconfig',
    'Content Element: Page Hero Element'
);

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Page Hero',
        'page_hero',
        'content-t3ce-page-hero'
    ],
    'accordion',
    'before'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['page_hero'] = 'content-t3ce-page-hero';


/***************
 * Form configuration for edit form
 */
$GLOBALS['TCA']['tt_content']['types']['page_hero']['showitem'] = '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
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
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ';

/***************
 * Configure element type
 */
$additionalColumns = [
    'readmore_label' => [
        'exclude' => true,
        'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.readmore_label',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255
        ]
    ],
];

$GLOBALS['TCA']['tt_content']['types']['page_hero'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['page_hero'],
    [
    'columnsOverrides' => [
        'header' => [
            'config' => [
                'enableRichtext' => true,
                'cols' => 30,
                'rows' => 1,
                'type' => 'text',
            ]
        ]
    ]
]);

/***************
 * Add fields to default palettes
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'readmore_label',
    'page_hero',
    'after:subheader'
);
