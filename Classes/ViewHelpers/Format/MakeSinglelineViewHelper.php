<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Rintisch\T3Ce\ViewHelpers\Format;

use Closure;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use function GuzzleHttp\Psr7\str;

/**
 * MakeSinglelineViewHelper
 * Remove linebreaks and double (or multiple) whitespaces
 */
class MakeSinglelineViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    public function initializeArguments()
    {
        $this->registerArgument('value', 'string', 'string to format');
    }

    /**
     * @param array $arguments
     * @param Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     *
     * @return string the formatted amount
     */
    public static function renderStatic(array $arguments, Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        if($arguments['value']){
            $stringToFormat = $arguments['value'];
        } else {
            $stringToFormat = $renderChildrenClosure();
        }

        return trim(preg_replace('/[\s]{2,}/', ' ', $stringToFormat));
    }
}
