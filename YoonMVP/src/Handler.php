<?php

use Rhumsaa\Uuid\Uuid;

use GuzzleHttp\Promise\Promise;

namespace Yoon\YoonMvp;

/**
 * Handles a specified message type aka "Event"Handler respectivly "Command"Handler triggered by the messae bus.
 *
 */
interface Handler
{
    /**
     * Gets the message type.
     * @return string
     */
    public function getMessageType() : string;

    /**
     * Handles a message.
     *
     * @param Event $event
     * @return Promise
     */
    public function getHandle(Message $message) : Promise;

}

?>