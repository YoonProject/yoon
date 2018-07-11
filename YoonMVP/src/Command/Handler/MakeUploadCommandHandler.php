<?php

namespace Yoon\YoonMvp\Command\Handler;

use Yoon\YoonMvp\Domain\Command\MakeUpload;
use Yoon\YoonMvp\Domain\Event\UploadAttemptCreated;
use Yoon\YoonMvp\Domain\Aggregate\Upload;
use Yoon\YoonMvp\Handler;
use Yoon\YoonMvp\Message;
use Yoon\YoonMvp\MessageBus;
use Yoon\YoonMvp\ProcessManager;
use Yoon\YoonMvp\ChainRepository;
use Yoon\YoonMvp\ErrorLog\ErrorLogException;
use Yoon\YoonMvp\ErrorLog\ErrorLogType;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;


/**
 * Handles the make upload command for generating a blockchain based upload.
 *
 */
class MakeUploadCommandHandler implements Handler
{
    private $messageBus;
    private $repository;

    function __construct(MessageBus $messageBus, Repository $repository)
    {
        $this->$messageBus = $messageBus;
        $messageBus->register($this);
        $this->repositoryPipe = $repositoryPipe;
        $this->processManager = $processManager;
    }

    /**
     * Gets the message type.
     * @return string
     */
    public function getMessageType() 
    {
        return MakeUpload::class;
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
        return $this->constructHandle($message);
    }

    private function constructHandle(MakeUpload $command) : Promise 
    {
        $upload = $this->findAggregate($command);
        return $upload->apply(new UploadAttemptCreated());
    }

    private function findAggregate(MakeUpload $command) : Upload
    {
        return $this->repository->find(Upload::class, $command->getId());
    }
}

?>