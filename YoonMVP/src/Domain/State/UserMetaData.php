<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class UserMetaData extends MetaData
{
    public $ipAddress;
    public $userAgent;
    public $device;
    public $countryCode;
    public $city;
    public $longitude;
    public $latitude;


    function __construct(
        Uuid $id, 
        Uuid $metaDataId, 
        \DateTime $createDate, 
        string $description, 
        string $name,
        string $fileType,
        string $ipAddress,
        string $userAgent,
        string $device,
        string $countryCode,
        float $longitude,
        float $latitude)
    {   
        parent::__construct($id, $metaDataId, $createDate, $description, $name, User::class);
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