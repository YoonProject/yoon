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
    
    function __construct(Uuid $id, Uuid $userId, string $relativePath, string $fileName)
    {
        $this->id = $id;
        $this->userId = $userId;
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
     * Gets the message hash signed by the id.
     * @return string
     */
    public function getHashSignedById() : string
    {
        return sodium_crypto_generichash(Command::class.$this->getId());
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
     * Gets the file name.
     * @return string
     */
    public function getFileName() : string
    {
        $this->fileName;
    }

    
    /**
     * Gets the file relative path.
     * @return string
     */
    public function getRelativePath() : string
    {
        $this->fileName;
    }
}

?>