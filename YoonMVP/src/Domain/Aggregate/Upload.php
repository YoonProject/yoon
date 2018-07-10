<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\State\FileState;
use Yoon\YoonMvp\Domain\Event\FileStateChanged;
use Yoon\YoonMvp\AggregateRoot;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class Upload extends AggregateRoot
{
    private $user;
    private $state;

    function __constructor(UploadState $state)
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

    }
}


?>