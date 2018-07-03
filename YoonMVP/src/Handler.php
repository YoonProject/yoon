<?php

namespace Yoon\YoonMvp;
/**
 * 
 *
 * The Message Bus finds all message handlers that listen to a certain
 * command or event, and then triggers these handlers one after another. Exceptions in
 * event or command handlers should be swallowed. Intelligent Messagge Systems should know
 * how to retry failing messages until they are successful or failed too often.
 */
interface Handler
{
    /**
     * Publish an event to the bus.
     *
     * @param Event $event
     * @return void
     */
    public function publish(Message $event);
        /**
     * Publish an event to the bus.
     *
     * @param Event $event
     * @return void
     */
    public function register(Message $event);
}

?>