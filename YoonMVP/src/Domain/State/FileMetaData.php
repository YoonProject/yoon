<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Yoon\YoonMvp\Domain\State\MetaData;
use Ramsey\Uuid\Uuid;

class FileMetaData extends MetaData
{
    public $fileType;
    public $ownerId;
    public $securitySeverity;
    public $fileOperationTypes;

    function __construct(
        Uuid $id, 
        Uuid $ownerId,
        Uuid $metaDataId,
        int $securitySeverity,
        int $fileOperationTypes, 
        string $fileType,
        \DateTime $createDate, 
        string $description, 
        string $name)
    {   
        $this->fileType = $fileType;
        $this->ownerId = $ownerId;
        $this->securitySeverity = $securitySeverity;
        $this->fileOperationTypes = $fileOperationTypes;
        parent::__construct($id, $metaDataId, $createDate, $description, $name, File::class);
    }

    public function getId() : Uuid
    {
        return $this->id;
    }
    public function getOwnerId() : Uuid
    {
        return $this->ownerId;
    }
    public function getSecuritySeverity() : int
    {
        return $this->securitySeverity;
    }
    public function getOperationTypes() : int
    {
        return $this->fileOperationTypes;
    }
    public function getFileType() : string
    {
        return $this->fileType;
    }
}

?>