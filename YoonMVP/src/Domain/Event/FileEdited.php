<?php

namespace Yoon\YoonMvp\Domain\Event;

use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class FileEdited extends Event
{
    private $id;
    private $hash; 
    private $userId;
    private $fileOperationType;
    private $createDate;
    private $fileName;
    private $relativePath;
    private $yoonFileMerkleRoot;
    private $fileType;



    function __construct(
        Uuid $userId, 
        int $fileOperationType, 
        \DateTime $createDate, 
        string $fileName, 
        string $relativePath, 
        string $yoonFileMerkleRoot, 
        string $fileType)
    {
        $this->userId = $userId;
        $this->fileOperationType = $fileOperationType;
        $this->createDate = $createDate;
        $this->fileName = $fileName;
        $this->relativePath = $relativePath;
        $this->yoonFileMerkleRoot = $yoonFileMerkleRoot;
        $this->fileType = $fileType;
    }


    /**
     * Gets the event id.
     * @return Rhumsaa\Uuid\Uuid
     */

    public function getId() : Uuid
    {
        return Uuid::uuid4();
    }

    /**
     * Gets the message hash signed by the id.
     * @return string
     */
    public function getHashSignedById() : string
    {
        return sodium_crypto_generichash($this->getId());
    }
}

?>