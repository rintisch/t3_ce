<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;
use B13\Container\Tca\Registry;
use B13\Container\Tca\ContainerConfiguration;
## Add 2 col container

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        't3ce-2cols-container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.2_col_container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.2_col_container.description',
        [
            [
                ['name' => 'left', 'colPos' => 201],
                ['name' => 'right', 'colPos' => 202],
            ]
        ]
    )
    )
        ->setIcon('EXT:t3_ce/Resources/Public/Icons/ContentElements/container-2col.svg')
);
$GLOBALS['TCA']['tt_content']['types']['t3ce-2cols-container']['showitem'] = '
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
';

## Add 3 col container

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        't3ce-3cols-container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.3_col_container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.3_col_container.description',
        [
            [
                ['name' => 'left', 'colPos' => 201],
                ['name' => 'middle', 'colPos' => 202],
                ['name' => 'right', 'colPos' => 203],
            ]
        ]
    ))
        ->setIcon('EXT:t3_ce/Resources/Public/Icons/ContentElements/container-3col.svg')
);
$GLOBALS['TCA']['tt_content']['types']['t3ce-3cols-container']['showitem'] = '
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
';

## Add 4 col container

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        't3ce-4cols-container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.4_col_container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.4_col_container.description',
        [
            [
                ['name' => 'ltr:1/4', 'colPos' => 201],
                ['name' => 'ltr:2/4', 'colPos' => 202],
                ['name' => 'ltr:3/4', 'colPos' => 203],
                ['name' => 'ltr:4/4', 'colPos' => 204]
            ]
        ]
    )
    )
        ->setIcon('EXT:t3_ce/Resources/Public/Icons/ContentElements/container-4col.svg')
);
$GLOBALS['TCA']['tt_content']['types']['t3ce-4cols-container']['showitem'] = '
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
';

