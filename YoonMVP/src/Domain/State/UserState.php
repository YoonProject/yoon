<?php

namespace Yoon\YoonMvp\Domain\State;

use Ramsey\Uuid\Uuid;

class UserState
{
    private $id;
    private $createDate;
    private $name;
    private $yoonPublicKey;
    private $accountType;

    private $fileStates;

    function __constructor(
        Uuid $id, 
        \DateTime $createDate, 
        string $name,
        string $yoonPublicKey,
        string $accountType, 
        array $fileStates)
    {
        $this->id = $id;
        $this->createDate = $createDate;
        $this->fileName = $fileName;
        $this->relativePath = $relativePath;
        $this->yoonFileMerkleRoot = $yoonFileMerkleRoot;
        $this->fileType = $fileType;
        $this->fileStates = $fileStates;
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
}

?>