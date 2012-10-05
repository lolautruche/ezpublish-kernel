<?php
/**
 * GetContentCountSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ObjectStateService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * GetContentCountSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ObjectStateService
 */
class GetContentCountSignal extends Signal
{
    /**
     * ObjectState
     *
     * @var eZ\Publish\API\Repository\Values\ObjectState\ObjectState
     */
    public $objectState;

}

