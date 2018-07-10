<?php

namespace Yoon\YoonMvp\Domain\Entity;

use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\State;
use Yoon\YoonMvp\Entity;
use Ramsey\Uuid\Uuid;

class File extends Entity
{
    private $fileState;

    function __construct(FileState $fileState)
    {
        $this->fileState = $fileState;
    }

    public function getId() : Uuid
    {
        return $this->fileState->getId();
    }
    
    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    public function getHashSignedById(): string
    {
        return sodium_crypto_generichash($this->getId());
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

    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    public function getState(): State 
    {
        return $this->fileState;
    }
}


?>