<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Domain\State\Upload as UploadState;
use Yoon\YoonMvp\Domain\Entity\User;
use Yoon\YoonMvp\Domain\Aggregate\File;
use Yoon\YoonMvp\Domain\Event\FileStateChanged;
use Yoon\YoonMvp\ProcessManager;
use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class Upload extends ProcessManager
{
    function __construct(UploadState $uploadState, User $user, File $file)
    {
        parent::__construct(array($user,$file), $this);
    }
}


?>