<?php

namespace Rintisch\T3Ce\ViewHelpers\Math;

use Closure;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class RandomIntegerViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    public function initializeArguments()
    {
        $this->registerArgument('min', 'int', 'Lower level');
        $this->registerArgument('max', 'int', 'Upper level');
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
        $min = $arguments['min'];
        $max = $arguments['max'];

        return random_int($min, $max);
    }
}
