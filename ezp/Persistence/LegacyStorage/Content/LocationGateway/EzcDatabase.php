<?php
/**
 * File containing the EzcDatabase location gateway class
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace ezp\Persistence\LegacyStorage\Content\LocationGateway;
use ezp\Persistence\LegacyStorage\Content\LocationGateway;

/**
 * Location gateway implementation using the zeta database component.
 */
class EzcDatabase extends LocationGateway
{
    /**
     * Database handler
     *
     * @var \ezcDbHandler
     */
    protected $handler;

    /**
     * Construct from database handler
     *
     * @param \ezcDbHandler $handler
     * @return void
     */
    public function __construct( \ezcDbHandler $handler )
    {
        $this->handler = $handler;
    }

    /**
     * Loads the data for the location identified by $locationId.
     *
     * @param int $locationId
     * @return ezp\Persistence\Content\Location
     */
    public function load( $locationId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Copy location object identified by $sourceId, into destination identified by $destinationParentId.
     *
     * Performs a deep copy of the location identified by $sourceId and all of
     * its child locations, copying the most recent published content object
     * for each location to a new content object without any additional version
     * information. Relations are not copied. URLs are not touched at all.
     *
     * @param mixed $sourceId
     * @param mixed $destinationParentId
     * @return Location the newly created Location.
     */
    public function copySubtree( $sourceId, $destinationParentId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Moves location identified by $sourceId into new parent identified by $destinationParentId.
     *
     * Performs a full move of the location identified by $sourceId to a new
     * destination, identified by $destinationParentId. Relations do not need
     * to be updated, since they refer to Content. URLs are not touched.
     *
     * @param mixed $sourceId
     * @param mixed $destinationParentId
     * @return boolean
     */
    public function move( $sourceId, $destinationParentId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Sets a location to be hidden, and it self + all children to invisible.
     *
     * @param mixed $id Location ID
     */
    public function hide( $id )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Sets a location to be unhidden, and self + children to visible unless a parent is hidding the tree.
     * If not make sure only children down to first hidden node is marked visible.
     *
     * @param mixed $id
     */
    public function unHide( $id )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Swaps the content object being pointed to by a location object.
     *
     * Make the location identified by $locationId1 refer to the Content
     * referred to by $locationId2 and vice versa.
     *
     * @param mixed $locationId1
     * @param mixed $locationId2
     * @return boolean
     */
    public function swap( $locationId1, $locationId2 )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Updates an existing location position aka priority.
     *
     * @param int $locationId
     * @param int $position
     * @return boolean
     */
    public function updatePosition( $locationId, $position )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Creates a new location for $contentId rooted at $parentId.
     *
     * @param mixed $contentId
     * @param mixed $parentId
     * @return ezp\Persistence\Content\Location
     */
    public function createLocation( $contentId, $parentId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Removes all Locations under and includin $locationId.
     *
     * Performs a recursive delete on the location identified by $locationId,
     * including all of its child locations. Content which is not referred to
     * by any other location is automatically removed. Content which looses its
     * main Location will get the first of its other Locations assigned as the
     * new main Location.
     *
     * @param mixed $locationId
     * @return boolean
     */
    public function removeSubtree( $locationId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Sends a subtree to the trash
     *
     * Moves all locations in the subtree to the Trash. The associated content
     * objects are left untouched.
     *
     * @param mixed $locationId
     * @return boolean
     */
    public function trashSubtree( $locationId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Returns a trashed subtree to normal state.
     *
     * The affected subtree is now again part of matching content queries.
     *
     * @param mixed $locationId
     * @return boolean
     */
    public function untrashSubtree( $locationId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }

    /**
     * Set section on all content objects in the subtree
     *
     * @param mixed $locationId
     * @param mixed $sectionId
     * @return boolean
     */
    public function setSectionForSubtree( $locationId, $sectionId )
    {
        throw new RuntimeException( '@TODO: Implement' );
    }
}
