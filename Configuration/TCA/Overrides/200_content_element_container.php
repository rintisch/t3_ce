<?php
## Add 2 col container

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
    't3ce-2cols-container',
    '2 Column Container',
    'Container for 2 columns',
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

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        't3ce-3cols-container',
        '3 Column Container',
        'Container for 3 columns',
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

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        't3ce-4cols-container',
        '4 Column Container',
        'Container for 4 columns',
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

## Add 1col accordion container

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
    't3ce-accordion-container',
    'Accordion Container',
    'Container to create an accordion',
    [
        [
            ['name' => 'childs', 'colPos' => 201]
        ]
    ]
    )
    )
    ->setIcon('EXT:t3_ce/Resources/Public/Icons/ContentElements/container-accordion.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
    ->setBackendTemplate('EXT:t3_ce/Resources/Private/Templates/Backend/AccordionContainer.html')
);
$GLOBALS['TCA']['tt_content']['types']['t3ce-accordion-container']['showitem'] = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        --palette--;;headers,
        bodytext,
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

$GLOBALS['TCA']['tt_content']['types']['t3ce-accordion-container']['columnsOverrides']['bodytext']['config']['enableRichtext'] = 1;

