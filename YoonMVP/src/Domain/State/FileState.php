<?php

namespace Yoon\YoonMvp\Domain\State;

class FileState
{
    private $id;
    private $createDate;
    private $fileName;
    private $relativePath;
    private $yoonFileMerkleRoot;
    private $fileType;

    private $userStates;

    function __constructor(
        Uuid $id, 
        \DateTime $createDate, 
        string $fileName, 
        string $relativePath, 
        string $yoonFileMerkleRoot,
        string $fileType, 
        array $userStates)
    {
        $this->id = $id;
        $this->createDate = $createDate;
        $this->fileName = $fileName;
        $this->relativePath = $relativePath;
        $this->yoonFileMerkleRoot = $yoonFileMerkleRoot;
        $this->fileType = $fileType;
        $this->userStates = $userStates;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    public function getRelativePath()
    {
        return $this->relativePath;
    }
    public function getYoonFileMerkleRoot()
    {
        return $this->yoonFileMerkleRoot;
    }
    public function getFileType()
    {
        return $this->fileType;
    }

    public function getUserstates()
    {
        return $this->fileType;
    }
}

?>