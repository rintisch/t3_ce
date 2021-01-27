<?php

/*
 * This file was part of the package bk2k/bootstrap-package and is adapted here.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Rintisch\T3Ce\ViewHelpers\Format;

use Closure;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * TrimViewHelper
 */
class RemoveParagraphViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * @param array $arguments
     * @param Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     *
     * @return string the formatted amount
     */
    public static function renderStatic(array $arguments, Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $content = $renderChildrenClosure();
        $content = str_replace('<p>','', $content);
        return str_replace('</p>','', $content);
    }
}
