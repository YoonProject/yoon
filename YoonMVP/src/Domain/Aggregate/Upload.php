<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\State\Upload as UploadState;
use Yoon\YoonMvp\Domain\Entity\User;
use Yoon\YoonMvp\Domain\Entity\File;
use Yoon\YoonMvp\Domain\Event\FileStateChanged;
use Yoon\YoonMvp\AggregateRoot;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class Upload extends AggregateRoot
{
    private $uploadState;
    private $user;
    private $file;

    function __construct(UploadState $uploadState, User $user, File $file)
    {
        parent::__construct($uploadState);
        $this->uploadState = $uploadState;
        $this->file = $file;
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