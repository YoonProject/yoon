<?php

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\State;
use Yoon\YoonMvp\Entity;
use Ramsey\Uuid\Uuid;

abstract class EntityRoot extends Entity
{
    private $state;

    function __construct(State $state)
    {
        $this->state = $state;
    }

    public function getId() : Uuid
    {
        return $this->state->getId();
    }
    
    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    public function getHashSignedById(): string
    {
        return sodium_crypto_generichash(get_class($this).$this->getId());
    }
    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    public function getState(): State 
    {
        return $this->state;
    }
}


?>