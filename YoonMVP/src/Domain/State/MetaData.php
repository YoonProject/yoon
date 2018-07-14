<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

abstract class MetaData implements State
{
    public $id;
    public $metaDataId;
    public $createDate;
    public $description;
    public $name;
    public $type;

    function __construct(
        Uuid $id, 
        Uuid $metaDataId, 
        \DateTime $createDate, 
        string $description, 
        string $name, 
        string $type)
    {
        $this->id = $id;
        $this->metaDataId = $metaDataId;
        $this->createDate = $createDate;
        $this->description = $description;
        $this->name = $name;
        $this->type = $type;
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