<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

/***************
 * PageTS
 */
ExtensionManagementUtility::addPageTSConfig('@import "EXT:t3_ce/Configuration/TsConfig/ContentElement/All.tsconfig"');

/***************
 * Add content rendering configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates']['t3ce'] = 'EXT:t3_ce/Configuration/TypoScript/ContentElement/';

//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawFooter'][] = \Rintisch\T3Ce\Hooks\BackendContentHook::class;
