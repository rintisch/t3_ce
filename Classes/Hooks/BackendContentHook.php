<?php

namespace Rintisch\T3Ce\Hooks;

/**
 * This information is copied gratefully from https://www.schmutt.de/739/backend-infos-wie-space-before-anzeigen/
 */

use TYPO3\CMS\Backend\View\PageLayoutViewDrawFooterHookInterface;

class BackendContentHook implements PageLayoutViewDrawFooterHookInterface
{

    /**
     * Preprocesses the preview footer rendering of a content element.
     * Todo: Needs refactoring when dropping v9 support because PageLayoutView is deprecated
     *
     * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
     * @param string $info Processed values
     * @param array $row Record row of tt_content
     */
    public function preProcess(\TYPO3\CMS\Backend\View\PageLayoutView &$parentObject, &$info, array &$row){
        if ($row['padding_top'] != '' || $row['padding_bottom'] != '') {
            $paddingString =  "Innerer Abstand:";
            if ($row['padding_top'] != '') {
                $paddingString .= " oben = " . $row['padding_top'];
            }
            if ($row['padding_top'] != '' && $row['padding_bottom'] != '') {
                $paddingString .= ", ";
            }
            if ($row['padding_bottom'] != '') {
                $paddingString .= " unten = " . $row['padding_bottom'];
            }

            $info[] = $paddingString;
        }

        if (!($row['background_color_class'] == 'none' || $row['background_color_class'] == '')) {
            $info[] = "Hintergrundfarbe: " . ucfirst(preg_replace('/bg-/', '', $row['background_color_class']));
        }
    }
}
