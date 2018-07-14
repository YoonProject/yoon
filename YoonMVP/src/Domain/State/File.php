<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class File implements State
{
    public $id;
    public $createDate;
    public $uri;
    public $yoonFileMerkleRoot;
    public $fileMetaDataState;

    function __construct(
        Uuid $id, 
        \DateTime $createDate, 
        string $uri, 
        string $yoonFileMerkleRoot,
        FileMetaData $fileMetaDataState)
    {
        $this->id = $id;
        $this->createDate = $createDate;
        $this->uri = $uri;
        $this->yoonFileMerkleRoot = $yoonFileMerkleRoot;
        $this->fileType = $fileType;
        $this->fileMetaDataState = $fileMetaDataState;

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