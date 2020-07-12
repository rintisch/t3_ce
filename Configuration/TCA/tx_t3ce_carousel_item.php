<?php

/*
 * This file was part of the package bk2k/bootstrap-package and is adapted here.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('lang')) {
    $generalLanguageFile = 'EXT:lang/Resources/Private/Language/locallang_general.xlf';
} else {
    $generalLanguageFile = 'EXT:core/Resources/Private/Language/locallang_general.xlf';
}

return [
    'ctrl' => [
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item',
        'type' => 'item_type',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:' . $generalLanguageFile . ':LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'typeicon_column' => 'item_type',
        'typeicon_classes' => [
            'default' => 'content-t3ce-carousel-item',
            'header' => 'content-t3ce-carousel-item-header',
            'call_to_action' => 'content-t3ce-carousel-item-calltoaction',
            'image' => 'content-t3ce-carousel-item-image',
            'text' => 'content-t3ce-carousel-item-text',
            'text_and_image' => 'content-t3ce-carousel-item-textandimage',
            'background_image' => 'content-t3ce-carousel-item-backgroundimage',
            'html' => 'content-t3ce-carousel-item-html'
        ]
    ],
    'interface' => [
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header,
            subheader,
            bodytext,
            image,
            background_color,
            background_image
        ',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'header' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header;header,
                nav_title,
                link,
                --div--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'text' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                --div--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'call_to_action' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                button_text,
                link,
                --div--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'image' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                image,
                link,
                --div--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'text_and_image' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                image,
                link,
                --div--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'background_image' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                background_color,
                background_image,
                background_image_options,
                link,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
        'html' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => false
                    ]
                ]
            ]
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => ''
        ],
        'access' => [
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            '
        ],
        'header' => [
            'showitem' => '
                header,
                --linebreak--,
                subheader,
                --linebreak--,
                header_position,
            '
        ],
        'general' => [
            'showitem' => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
            '
        ],
        'visibility' => [
            'showitem' => '
                hidden;LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item
            '
        ],
        // hidden but needs to be included all the time, so sys_language_uid is set correctly
        'hiddenLanguagePalette' => [
            'showitem' => 'sys_language_uid, l10n_parent',
            'isHiddenPalette' => true,
        ],
    ],
    'columns' => [
        'tt_content' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.tt_content',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType IN ("carousel","carousel_small","carousel_fullscreen")',
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'item_type' => [
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.header',
                        'header',
                        'content-t3ce-carousel-item-header'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.text',
                        'text',
                        'content-t3ce-carousel-item-text'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.calltoaction',
                        'call_to_action',
                        'content-t3ce-carousel-item-calltoaction'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.image',
                        'image',
                        'content-t3ce-carousel-item-image'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.textandimage',
                        'text_and_image',
                        'content-t3ce-carousel-item-textandimage'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.backgroundimage',
                        'background_image',
                        'content-t3ce-carousel-item-backgroundimage'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.item_type.html',
                        'html',
                        'content-t3ce-carousel-item-html'
                    ],
                ],
                'default' => 'header',
                'authMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['explicitADmode'],
                'authMode_enforce' => 'strict'
            ],
            'l10n_mode' => 'exclude',
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0'
                    ]
                ]
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    [
                        'LLL:' . $generalLanguageFile . ':LGL.allLanguages',
                        -1
                    ],
                    [
                        'LLL:' . $generalLanguageFile . ':LGL.default_value',
                        0
                    ]
                ],
                'allowNonIdValues' => true,
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0
                    ]
                ],
                'foreign_table' => 'tx_t3ce_carousel_item',
                'foreign_table_where' => 'AND tx_t3ce_carousel_item.pid=###CURRENT_PID### AND tx_t3ce_carousel_item.sys_language_uid IN (-1,0)',
                'default' => 0
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'link' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.link',
                        ],
                    ],
                ],
                'softref' => 'typolink'
            ],
        ],
        'header' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ],
        ],
        'header_position' => [
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header_position',
            'exclude' => true,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header_position.default',
                        ''
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header_position.center',
                        'center'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header_position.right',
                        'right'
                    ],
                    [
                        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.header_position.left',
                        'left'
                    ]
                ],
                'default' => ''
            ]
        ],
        'subheader' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.subheader',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ],
        ],
        'nav_title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.nav_title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ],
        ],
        'bodytext' => [
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.bodytext',
            'l10n_mode' => 'prefixLangTitle',
            'l10n_cat' => 'text',
            'config' => [
                'type' => 'text',
                'cols' => '80',
                'rows' => '5',
                'softref' => 'typolink_tag,images,email[subst],url',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ],
        ],
        'button_text' => [
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.button_text',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'max' => 255
            ]
        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
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
                                    title,
                                    alternative,
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
        ],
        'background_color' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.background_color',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'default' => '#333333',
            ],
            'l10n_mode' => 'exclude',
        ],
        'background_image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:carousel_item.background_image',
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
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            'l10n_mode' => 'exclude',
        ],
        'background_image_options' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:field.background_image_options',
            'config' => [
                'type' => 'flex',
                'ds' => [
                    'default' => 'FILE:EXT:t3_ce/Configuration/FlexForms/BackgroundImage.xml',
                ],
            ],
            'l10n_mode' => 'exclude',
        ]
    ],
];
