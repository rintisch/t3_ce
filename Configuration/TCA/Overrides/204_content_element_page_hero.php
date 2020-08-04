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
$GLOBALS['TCA']['tt_content']['types']['page_hero'] = [
    'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
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
            '
];

/***************
 * Configure element type
 */
$additionalColumns = [
    'background_image' => [
        'exclude' => true,
        'displayCond' => 'FIELD:frame_class:!=:none',
        'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.background_image',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'background_image',
            [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                ],
                'overrideChildTca' => [
                    'types' => [
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN => [
                            'showitem' => '
                            --palette--;;filePalette
                        '
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;;filePalette
                        '
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            crop,
                            --palette--;;filePalette
                        '
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;;filePalette
                        '
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;;filePalette
                        '
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;;filePalette
                        '
                        ],
                    ],
                ],
                'minitems' => 0,
                'maxitems' => 1,
            ],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
        'l10n_mode' => 'exclude',
    ],

    'background_image_options' => [
        'exclude' => true,
        'displayCond' => 'FIELD:frame_class:!=:none',
        'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.background_image_options',
        'config' => [
            'type' => 'flex',
            'ds' => [
                'default' => 'FILE:EXT:t3_ce/Configuration/FlexForms/BackgroundImage.xml',
            ],
        ],
        'l10n_mode' => 'exclude',
    ],

    'readmore_label' => [
        'exclude' => true,
        'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.readmore_label',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255
        ]
    ]
];


/***************
 * Add fields to default palettes
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'background_image',
    'page_hero',
    'after:space_after_class'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'background_image_options',
    'page_hero',
    'after:background_image'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'readmore_label',
    'page_hero',
    'after:subheader'
);
