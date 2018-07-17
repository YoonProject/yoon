<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Yoon\YoonMvp\Domain\State\FileMetaData;
use Ramsey\Uuid\Uuid;

class File implements State
{
    public $id;
    public $uri;
    public $yoonFileMerkleRoot;
    public $fileMetaDataState;

    function __construct(
        Uuid $id, 
        string $uri, 
        string $yoonFileMerkleRoot,
        FileMetaData $fileMetaDataState)
    {
        $this->id = $id;
        $this->uri = $uri;
        $this->yoonFileMerkleRoot = $yoonFileMerkleRoot;
        $this->fileType = $fileType;
        $this->fileMetaDataState = $fileMetaDataState;
    }

    public function getId() : Uuid
    {
        return $this->id;
    }
    public function getUrl() : string
    {
        return $this->url;
    }
    public function getYoonFileMerkleRoot() : string
    {
        return $this->yoonFileMerkleRoot;
    }
    public function getFileMetaData() : fileMetaData
    {
        return $this->fileMetaDataState;
    }
}

?>