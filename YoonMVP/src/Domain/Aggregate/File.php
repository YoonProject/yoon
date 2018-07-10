<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\Event\FileChanged;
use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\Process;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class File extends Process
{
    private $fileState;

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
        if(get_class($event) == FileChanged::class) 
        {
            return new Promise();
        }
    }


}


?>