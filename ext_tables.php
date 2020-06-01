<?php
defined('TYPO3_MODE') || die();

/***************
 * Allow Custom Records on Standard Pages
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3ce_accordion_item');

// Hide table in all list views, in order to provide smooth inline editing experience
$TCA['tx_t3ce_accordion_item']['ctrl']['hideTable'] = 1;
