<?php
defined('TYPO3_MODE') || die();

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3_ce/Configuration/TsConfig/ContentElement/All.tsconfig">');

/***************
 * Add content rendering configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates']['t3ce'] = 'EXT:t3_ce/Configuration/TypoScript/ContentElement/';

/***************
 * Register Icons: Extension and content elements
 */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'systeminformation-site',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:t3_ce/Resources/Public/Icons/extension.svg']
);

/* Add more icons for other content elementes */
$icons = [
    'accordion',
    'accordion-item'
];
foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        'content-t3ce-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3_ce/Resources/Public/Icons/ContentElements/' . $icon . '.svg']
    );
}
