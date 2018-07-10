<?php

namespace Yoon\YoonMvp\Domain\Entity;

use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\Domain\State\User as UserState;
use Ramsey\Uuid\Uuid;

class User extends Entity
{
    private $userState;


    function __construct(UserState $userState)
    {
        $this->userState = $userState;
    }

    /**
     * Gets the entity id.
     * @return Rhumsaa\Uuid\Uuid
     */
    public function getId() : Uuid
    {
        return $this->userState->getId();
    }


    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    public function getHashSignedById(): string
    {
        return sodium_crypto_generichash($this->getId());
    }

    /**
     * Gets the yoons public key aka our merkle root.
     * @return string
     */
    final public function getUserName():string 
    {
        return $this->userState->getUserName();
    }

    /**
     * Gets the yoons public key aka our merkle root.
     * @return string
     */
    final public function getYoonPublicKey():string 
    {
        return $this->userState->getYoonPublicKey();
    }

    /**
     * Gets the users blockchain dependend public key e.g. stellar.
     * @return string
     */
    final public function getPublicKey():string 
    {
        return $this->userState->getPublicKey();
    }

    /**
     * Gets the users blockchain dependend public key e.g. stellar.
     * @return string
     */
    final public function getBlockchainType():string 
    {
        return $this->userState->getBlockchainType();
    }

    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    public function getState(): State 
    {
        return $this->userState;
    }
}


?>