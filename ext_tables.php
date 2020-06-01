<?php
defined('TYPO3_MODE') || die();

/***************
 * Allow Custom Records on Standard Pages
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3ce_accordion_item');
