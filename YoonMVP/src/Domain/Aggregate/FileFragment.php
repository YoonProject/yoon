<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\Event\FileEdited;

use Yoon\YoonMvp\Domain\State\FileFragment as FileFragmentState;
use Yoon\YoonMvp\Process;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class FileFragment extends File
{
    private $fileFragmentationState;
    

    function __construct(FileFragmentState $fileState)
    {
        parent::__construct($fileState);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function apply(Event $event):Promise 
    {
        return new Promise();
    }
}


?>