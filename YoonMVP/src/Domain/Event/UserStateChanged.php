<?php

namespace Yoon\YoonMvp\Domain\Event;

use Yoon\YoonMvp\Event;
use Ramsey\Uuid\Uuid;

class UserStateChanged extends Event
{
    private $id;
    private $hash; 

    function __constructor()
    {
        
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