<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\Event\FileChanged;
use Yoon\YoonMvp\Domain\State\UserMetaData as UserMetaDataState;
use Yoon\YoonMvp\Process;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class UserMetaData extends Process
{
    private $fileState;

    function __construct(UserMetaDataState $fileState)
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