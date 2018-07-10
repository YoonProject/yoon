<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class UploadState implements State
{
    public $id;
    public $createDate;
    public $uploadFinished;
    public $fileState;
    public $userState;

    function __constructor(
        Uuid $id, 
        \DateTime $createDate, 
        UserState $userState,
        FileState $fileState,
        bool $uploadFinished = false)
    {
        $this->id = $id;
        $this->createDate = $createDate;
        $this->userState = $userState;
        $this->fileState = $fileState;
        $this->uploadFinished = $uploadFinished;
    }

    public function getId() : Uuid
    {
        return $this->id;
    }
    public function getCreatedDate() : \DateTime
    {
        return $this->createdDate;
    }
    public function getFileState() : FileState
    {
        return $this->fileType;
    }

    public function getUserState() : UserState
    {
        return $this->userStates;
    }

    public function getUploadFinished() : bool
    {
        return $this->uploadFinished;
    }
}

?>