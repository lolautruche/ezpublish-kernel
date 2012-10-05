<?php
/**
 * PublishContentTypeDraftSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentTypeService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * PublishContentTypeDraftSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentTypeService
 */
class PublishContentTypeDraftSignal extends Signal
{
    /**
     * ContentTypeDraft
     *
     * @var eZ\Publish\API\Repository\Values\ContentType\ContentTypeDraft
     */
    public $contentTypeDraft;

}

