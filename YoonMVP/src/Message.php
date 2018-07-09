<?php

namespace Yoon\YoonMvp;

use Ramsey\Uuid\Uuid;

/**
 * Represents a generic message which has a unique id/hash.
 *
 * The message is the central part of the cqrs architecture allowing to be published over the message bus and delegated to the 
 * corresponding handlers registered to it.
 */
interface Message
{
    /**
     * Gets the handler id.
     * @return Rhumsaa\Uuid\Uuid
     */

    public function getId() : Uuid;

    /**
     * Gets the message hash signed by the id.
     * @return string
     */
    public function getHashSignedById() : string;

}

?>