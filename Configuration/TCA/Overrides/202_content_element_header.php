<?php

/**
 * This file was part of the package bk2k/bootstrap-package and is adapted here.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

use JosefGlatz\CropVariantsBuilder\Builder;
use JosefGlatz\CropVariantsBuilder\CropVariant;
use JosefGlatz\CropVariantsBuilder\Defaults\AspectRatio;
use JosefGlatz\CropVariantsBuilder\Defaults\CropArea;

/***************
 * Form configuration for edit form
 */
$GLOBALS['TCA']['tt_content']['types']['header']['showitem'] = '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general, header_label,
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
                --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category, categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
            ';


/***************
 * Image cropping for content element "Page Hero"
 */
call_user_func(
    static function ($table, $field, $cType) {

        /**
         * Set cropVariants configuration with EXT:cropvariantsbuilder
         */
        Builder::getInstance($table, $field, $cType)
            ->disableDefaultCropVariants()
            ->addCropVariant(
                CropVariant::create('sm')
                    ->addAllowedAspectRatios(AspectRatio::get(['3:2']))
                    ->setCropArea(CropArea::get())
                    ->get()
            )
            ->addCropVariant(
                CropVariant::create('md')
                    ->addAllowedAspectRatios(AspectRatio::get(['2:1']))
                    ->setCropArea(CropArea::get())
                    ->get()
            )
            ->addCropVariant(
                CropVariant::create('lg')
                    ->addAllowedAspectRatios(AspectRatio::get(['3:1']))
                    ->setCropArea(CropArea::get())
                    ->get()
            )
            ->persistToTca();
    },
    'tt_content',
    'image',
    'header'
);
