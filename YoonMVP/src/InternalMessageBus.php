<?php

use __\__;

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\ErrorLog\ErrorLogException;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\FulfilledPromise;

/**
 * Message bus handles all messages that were emitted by domain objects or commannd handlers.
 *
 * The Message Bus finds all message handlers that listen to a certain
 * command or event, and then triggers these handlers one after another. Exceptions in
 * event or command handlers should be swallowed. Intelligent Messagge Systems should know
 * how to retry failing messages until they are successful or failed too often.
 * 
 * This is a simple in memory message bus.
 */
class InternalMessageBus implements MessageBus
{
    private $handlers = array();

    /**
     * Publish a message to the bus.
     *
     * @param Message $message
     * @return Promise
     */
    public function publish(Message $message) : Promise
    {
        $handler = $this->findHandler(get_class($message));
        $handle = $handler->getHandle($message);
        $handle->then(function ($inneMessage){
            return $this->publish($innerMessage);
        })->otherwise(function() use($message){
            return new FulfilledPromise($message);
        })->then(null, function ($reason) {
            throw new ErrorLogException($reason);
        })->resolve($message);
    }


    private function findHandler(string $className) : Handler
    {
        $handler = __::get($this->handlers, $className);
        return $handler;
    }

    /**
     * Registeres a message handler.
     *
     * @param Event $handler
     * @return void
     */
    public function register(Handler $handler) : void
    {
        if(__::has($this->handlers, $handler->getId().$handler->getMessageType()))
        {
            return;
        }
        __::set($this->handlers, $handler->getId().$handler->getMessageType(), $handler);
    }
}

?>