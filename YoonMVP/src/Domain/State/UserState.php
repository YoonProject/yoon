<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class UserState implements State
{
    public $id;
    public $createDate;
    public $name;
    public $yoonPublicKey;
    public $accountType;

    function __constructor(
        int $id, 
        \DateTime $createDate, 
        string $name,
        string $yoonPublicKey,
        string $accountType)
    {
        $this->id = $id;
        $this->createDate = $createDate;
        $this->name = $name;
        $this->yoonPublicKey = $yoonPublicKey;
        $this->accountType = $accountType;
    }

    public function getId() : Uuid
    {
        return Uuid::fromInteger($this->id);
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getCreatedDate() : \DateTime
    {
        return $this->createdDate;
    }
    public function getYoonPublicKey() : string
    {
        return $this->yoonPublicKey;
    }
    public function getAccountType()
    {
        return $this->accountType;
    }
}

?>