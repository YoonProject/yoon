<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class FileMetaData implements State
{
    public $fileType;
    public $owner;

    function __construct(
        Uuid $id, 
        Uuid $metaDataId, 
        \DateTime $createDate, 
        string $description, 
        string $name,
        string $fileType,
        string $owner)
    {   
        parent::__construct($id, $metaDataId, $createDate, $description, $name, File::class);
        $this->fileType = $fileType;
        $this->owner = $owner;
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