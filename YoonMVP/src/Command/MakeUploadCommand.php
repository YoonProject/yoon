<?php

namespace Yoon\YoonMvp\Command;

use Yoon\YoonMvp\Command;
use Ramsey\Uuid\Uuid;

class MakeUploadCommand implements Command
{
    private $fileName;
    private $id;
    private $hash;

    function __constructor(Uuid $id, string $hash, string $fileName)
    {
        $this->id = $id;
        $this->hash = $hash;
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