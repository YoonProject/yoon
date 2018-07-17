<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\Event\FileEdited;
use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\Process;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class File extends Process
{
    function __construct(FileState $fileState)
    {
        parent::__construct($fileState);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function apply(Event $event):Promise 
    {
        if(get_class($event) == FileEdited::class) 
        {
            return new Promise();
        }
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    public function getProcessState():string
    {
        $createDate = $this->getState()->getFileMetaData()->getCreateDate();
        $updateDate = $this->getState()->getFileMetaData()->getUpdateDate();
        $deleteDate = $this->getState()->getFileMetaData()->getDeleteDate();
        
    }

}


?>