<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Entity;
use Ramsey\Uuid\Uuid;

class User extends Entity
{
    private $userName;
    private $publicKey;


    function __constructor(Uuid $id, string $userName, string $publicKey)
    {
        $this->setId($id);
        $this->userName = $userName;
        $this->
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function getPublicKey():string 
    {
        
    }
}


?>