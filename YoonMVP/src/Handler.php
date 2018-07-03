<?php

use Rhumsaa\Uuid\Uuid;

namespace Yoon\YoonMvp;
/**
 * Handles a specified message type aka "Event"Handler respectivly "Command"Handler triggered by the messae bus.
 *
 */
interface Handler
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

    /**
     * Publish an event to the bus.
     *
     * @param Event $event
     * @return void
     */
    public function handle(Message $event);
}

?>