<?php
/**
 * FieldTypeService class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot;
use \eZ\Publish\API\Repository\FieldTypeService as FieldTypeServiceInterface,

/**
 * FieldTypeService class
 * @package eZ\Publish\Core\SignalSlot
 */
class FieldTypeService implements FieldTypeServiceInterface
{
    /**
     * Aggregated service
     *
     * @var \eZ\Publish\API\Repository\FieldTypeService
     */
    protected $service;

    /**
     * SignalDispatcher
     *
     * @var \eZ\Publish\Core\SignalSlot\SignalDispatcher
     */
    protected $signalDispatcher;

    /**
     * Constructor
     *
     * Construct service object from aggregated service and signal
     * dispatcher
     *
     * @param \eZ\Publish\API\Repository\FieldTypeService $service
     * @param \eZ\Publish\Core\SignalSlot\SignalDispatcher $signalDispatcher
     */
    public function __construct( FieldTypeServiceInterface $service, SignalDispatcher $signalDispatcher )
    {
        $this->service          = $service;
        $this->signalDispatcher = $signalDispatcher;
    }

    /**
     * Returns a list of all field types.
     *
     * @return \eZ\Publish\API\Repository\FieldType[]
     */
    public function getFieldTypes()
    {
        $returnValue = $this->service->getFieldTypes();
        $this->signalDispatcher()->emit(
            new Signal\FieldTypeService\GetFieldTypesSignal( array(
            ) )
        );
        return $returnValue;
    }

    /**
     * Returns the FieldType registered with the given identifier
     *
     * @param string $identifier
     * @return \eZ\Publish\API\Repository\FieldType
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException
     *         if there is no FieldType registered with $identifier
     */
    public function getFieldType( $identifier )
    {
        $returnValue = $this->service->getFieldType( $identifier );
        $this->signalDispatcher()->emit(
            new Signal\FieldTypeService\GetFieldTypeSignal( array(
                'identifier' => $identifier,
            ) )
        );
        return $returnValue;
    }

    /**
     * Returns if there is a FieldType registered under $identifier
     *
     * @param string $identifier
     * @return bool
     */
    public function hasFieldType( $identifier )
    {
        $returnValue = $this->service->hasFieldType( $identifier );
        $this->signalDispatcher()->emit(
            new Signal\FieldTypeService\HasFieldTypeSignal( array(
                'identifier' => $identifier,
            ) )
        );
        return $returnValue;
    }

}

