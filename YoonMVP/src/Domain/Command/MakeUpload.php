<?php

namespace Yoon\YoonMvp\Domain\Command;

use Yoon\YoonMvp\Command;
use Ramsey\Uuid\Uuid;

class MakeUpload implements Command
{
    private $userId;
    private $fileName;
    private $relativePath;
    private $id;
    private $hash;

    function __construct(Uuid $id, Uuid $userId, string $hash, string $relativePath, string $fileName)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->hash = $hash;
        $this->relativePath = $relativePath;
        $this->fileName = $fileName;
    }

    /**
     * Gets the handler id.
     * @return Rhumsaa\Uuid\Uuid
     */

    public function getId() : Uuid
    {
        return $this->id;
    }

    /**
     * Gets the handler id.
     * @return Rhumsaa\Uuid\Uuid
     */

    public function getUserId() : Uuid
    {
        return $this->userId;
    }


    /**
     * Gets the message hash signed by the id.
     * @return string
     */
    public function getHashSignedById() : string
    {
        return $this->hash;
    }

    /**
     * Gets the file name.
     * @return string
     */
    public function getFileName() : string
    {
        $this->fileName;
    }
}

?>