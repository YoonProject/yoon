<?php

namespace Yoon\YoonMvp\Domain\Event;

use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class UploadAttemptCreated extends Event
{
    private $userId;
    private $fileName;
    private $relativePath;
    private $id;
    private $hash;

    function __construct(Uuid $id, Uuid $userId, string $relativePath, string $fileName)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->relativePath = $relativePath;
        $this->fileName = $fileName;
    }

    /**
     * Gets the message hash signed by the id.
     * @return string
     */
    public function getHashSignedById() : string
    {
        return sodium_crypto_generichash(Event::class.$this->getId());
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
     * Gets the file name.
     * @return string
     */
    public function getFileName() : string
    {
        $this->fileName;
    }
}

?>