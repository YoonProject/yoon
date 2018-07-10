<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\Entity;
use Ramsey\Uuid\Uuid;

class User extends Entity
{
    private $userName;
    private $yoonPublicKey;
    private $publicKey;
    private $blockchainType;


    function __constructor(Uuid $id, string $userName, string $yoonPublicKey, string $publicKey, string $blockchainType)
    {
        $this->setId($id);
        $this->userName = $userName;
        $this->yoonPublicKey = $yoonPublicKey;
        $this->publicKey = $publicKey;
        $this->blockchainType = $blockchainType;
    }

    /**
     * Gets the yoons public key aka our merkle root.
     * @return string
     */
    final public function getUserName():string 
    {
        return $this->yoonPublicKey;
    }

    /**
     * Gets the yoons public key aka our merkle root.
     * @return string
     */
    final public function getYoonPublicKey():string 
    {
        return $this->yoonPublicKey;
    }

    /**
     * Gets the users blockchain dependend public key e.g. stellar.
     * @return string
     */
    final public function getPublicKey():string 
    {
        return $this->publicKey;
    }

    /**
     * Gets the users blockchain dependend public key e.g. stellar.
     * @return string
     */
    final public function getBlockchainType():string 
    {
        return $this->blockchainType;
    }

}


?>