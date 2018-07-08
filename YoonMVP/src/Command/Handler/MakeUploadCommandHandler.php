<?php

namespace Yoon\YoonMvp\Commnand\Handler;

use Yoon\YoonMvp\Commnand\MakeUploadCommand;
use Yoon\YoonMvp\Message;
use Yoon\YoonMvp\ErrorLog\ErrorLogException;
use Yoon\YoonMvp\ErrorLog\ErrorLogType;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;


/**
 * Handles the make upload command.
 *
 */
class MakeUploadCommandHandler implements Handler
{

    function __constructor(MessageBus $messageBus)
    {

    }

    /**
     * Gets the message type.
     * @return string
     */
    public function getMessageType() 
    {
        return MakeUploadCommand::class;
    }

    /**
     * Handles a message.
     *
     * @param Event $event
     * @return Promise
     */
    public function getHandle(Message $message) : Promise
    {
        if(get_class($message) != $this->getMessageType())
        {
            throw new ErrorLogException(ErrorLogType::Logical, "Invalid message type within".MakeUploadCommandHandler::class.".");
        }
        
    }

}

?>