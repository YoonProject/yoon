<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class File implements State
{
    public $id;
    public $createDate;
    public $fileName;
    public $relativePath;
    public $yoonFileMerkleRoot;
    public $fileType;

    function __construct(
        Uuid $id, 
        \DateTime $createDate, 
        string $fileName, 
        string $relativePath, 
        string $yoonFileMerkleRoot,
        string $fileType)
    {
        $this->id = $id;
        $this->createDate = $createDate;
        $this->fileName = $fileName;
        $this->relativePath = $relativePath;
        $this->yoonFileMerkleRoot = $yoonFileMerkleRoot;
        $this->fileType = $fileType;
        $this->userStates = $userStates;
    }

    public function getId() : Uuid
    {
        return $this->id;
    }
    public function getFileName() : string
    {
        return $this->fileName;
    }
    public function getCreatedDate() : \DateTime
    {
        return $this->createdDate;
    }
    public function getRelativePath() : string
    {
        return $this->relativePath;
    }
    public function getYoonFileMerkleRoot() : string
    {
        return $this->yoonFileMerkleRoot;
    }
    public function getFileType() : string
    {
        return $this->fileType;
    }
}

?>