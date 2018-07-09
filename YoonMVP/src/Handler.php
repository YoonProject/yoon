<?php

namespace Yoon\YoonMvp;

use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;

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