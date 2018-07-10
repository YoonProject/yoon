<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\State\FileState;
use Yoon\YoonMvp\Domain\Event\FileStateChanged;
use Yoon\YoonMvp\Process;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class File extends Process
{
    private $user;
    private $state;

    function __constructor(FileState $state, User $user)
    {
        $this->setId($id);
        $this->user = $user;
        $this->state = $state;
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function apply(Event $event):Promise 
    {
        if(get_class($event) == FileStateChanged::class) 
        {
            
        }
    }


}


?>