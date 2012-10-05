<?php
/**
 * AddTranslationInfoSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * AddTranslationInfoSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentService
 */
class AddTranslationInfoSignal extends Signal
{
    /**
     * TranslationInfo
     *
     * @var eZ\Publish\API\Repository\Values\Content\TranslationInfo
     */
    public $translationInfo;

}

