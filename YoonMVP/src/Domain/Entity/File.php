<?php

namespace Yoon\YoonMvp\Domain\Entity;

use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\State;
use Yoon\YoonMvp\EntityRoot;
use Ramsey\Uuid\Uuid;

class File extends EntityRoot
{
    function __construct(FileState $fileState)
    {
        parent::__construct($fileState);
    }

    public function getFileName() : string
    {
        return $this->fileState->getFileName();
    }
    public function getCreatedDate() : \DateTime
    {
        return $this->fileState->createdDate();
    }
    public function getRelativePath() : string
    {
        return $this->fileState->getRelativePath();
    }
    public function getYoonFileMerkleRoot() : string
    {
        return $this->fileState->yoonFileMerkleRoot();
    }
    public function getFileType() : string
    {
        return $this->fileState->getFileType();
    }
}


?>