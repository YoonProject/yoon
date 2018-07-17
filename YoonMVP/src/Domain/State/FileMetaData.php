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


    function __construct(
        Uuid $id, 
        Uuid $ownerId,
        Uuid $metaDataId,
        int $securitySeverity,
        string $fileType,
        string $description, 
        string $name,
        \DateTime $createDate = null, 
        \DateTime $updateDate = null,
        \DateTime $deleteDate = null)
    {   
        $this->fileType = $fileType;
        $this->ownerId = $ownerId;
        $this->securitySeverity = $securitySeverity;
        $this->fileOperationTypes = $fileOperationTypes;
        parent::__construct($id, $metaDataId, $createDate, $updateDate, $deleteDate, $description, $name, File::class);
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
    public function getFileType() : string
    {
        return $this->fileType;
    }
}

?>