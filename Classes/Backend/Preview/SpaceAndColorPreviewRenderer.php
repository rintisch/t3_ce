<?php
declare(strict_types=1);

namespace Rintisch\T3Ce\Backend\Preview;

/*
 * Copyright (C) 2023 Gerald Rintisch <gerald.rintisch@posteo.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301, USA.
 */

use TYPO3\CMS\Backend\Preview\StandardContentPreviewRenderer;
use TYPO3\CMS\Backend\View\BackendLayout\Grid\GridColumnItem;

/**
 *
 */
class SpaceAndColorPreviewRenderer extends StandardContentPreviewRenderer
{
    public function renderPageModulePreviewFooter(GridColumnItem $item): string
    {
        $content = parent::renderPageModulePreviewFooter($item);
        $info = [];
        $record = $item->getRecord();
        $itemLabels = $item->getContext()->getItemLabels();

        if ($record['space_after_class'] === '0') {
            $info[] = $this->createHtmlOutput($itemLabels, $record, 'space_after_class');
        }
        if ($record['space_before_class'] === '0') {
            $info[] = $this->createHtmlOutput($itemLabels, $record, 'space_before_class');
        }
        if (!in_array($record['background_color_class'], ['none', 0, ''])) {
            $info[] = $this->createHtmlOutput($itemLabels, $record, 'background_color_class');
        }

        if (!empty($info)) {
            $content .= implode('<br>', $info);
        }

        return $content;
    }

    private function createHtmlOutput(array $labels, array $record, string $key): string
    {
        return '<strong>' . htmlspecialchars((string)($labels[$key] ?? '')) . '</strong> ' . htmlspecialchars($record[$key]);
    }
}
