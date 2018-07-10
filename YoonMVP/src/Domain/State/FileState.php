<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class FileState implements State
{
    private $id;
    private $createDate;
    private $fileName;
    private $relativePath;
    private $yoonFileMerkleRoot;
    private $fileType;

    function __constructor(
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