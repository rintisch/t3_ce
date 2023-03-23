<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;
use B13\Container\Tca\Registry;
use B13\Container\Tca\ContainerConfiguration;
## Add grid (= 1 col container)

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        't3ce-grid-container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.grid_container',
        'LLL:EXT:t3_ce/Resources/Private/Language/locallang_be.xlf:content_element.grid_container.description',
        [
            [
                ['name' => 'main', 'colPos' => 201],
            ]
        ]
    )
    )
        ->setIcon('EXT:t3_ce/Resources/Public/Icons/ContentElements/container-grid.svg')
);
$GLOBALS['TCA']['tt_content']['types']['t3ce-grid-container']['showitem'] = '
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
