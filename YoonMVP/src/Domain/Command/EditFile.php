<?php

namespace Yoon\YoonMvp\Domain\Command;

use Yoon\YoonMvp\Command;
use Ramsey\Uuid\Uuid;

class EditFile implements Command
{
    private $id;
    private $oldUserId;
    private $oldFileName;
    private $oldUri;
    private $newFileName;
    private $newUri;

    
    function __construct(Uuid $oldUserId, Uuid $newUserId, string $oldUri, string $oldFileName, string $newUri, string $newFileName)
    {
        $this->id = Uuid::uuid4();

        $this->oldUserId = $oldUserId;
        $this->newUserId = $newUserId;
        $this->oldUri = $oldUri;
        $this->oldFileName = $oldFileName;
        $this->newUri = $newUri;
        $this->newFileName = $newFileName;
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
     * Gets the old user id.
     * @return Rhumsaa\Uuid\Uuid
     */

    public function getOldUserId() : Uuid
    {
        return $this->oldUserId;
    }

    /**
     * Gets the new user id.
     * @return Rhumsaa\Uuid\Uuid
     */

    public function getNewUserId() : Uuid
    {
        return $this->newUserId;
    }


    /**
     * Gets the old file name.
     * @return string
     */
    public function getOldFileName() : string
    {
        $this->oldFileName;
    }
    
    /**
     * Gets the new file name.
     * @return string
     */
    public function getNewFileName() : string
    {
        $this->newFileName;
    }

    /**
     * Gets the old file uri.
     * @return string
     */
    public function getOldUri() : string
    {
        $this->oldUri;
    }

    /**
     * Gets the old file uri.
     * @return string
     */
    public function getNewUri() : string
    {
        $this->oldUri;
    }
}

?>