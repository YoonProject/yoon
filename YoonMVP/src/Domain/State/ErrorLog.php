<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class ErrorLog implements State
{
    private $id;
    private $errorLogType;
    private $message;
    private $createDate;


    function __construct(Uuid $id, string $errorLogType, string $message, \DateTime $createdDate)
    {
        $this->id = $id;
        $this->errorLogType = $errorLogType;
        $this->message = $message;
        $this->createdDate = $createdDate;
    }


    public function getId() : Uuid 
    {
        return $this->id;
    }
    
    public function getErrorLogType() : string 
    {
        return $this->errorLogType;
    }
    
    public function getMessage() : string 
    {
        return $this->message;
    }
    
    public function getCreatedDate() : \DateTime 
    {
        return $this->createdDate;
    }
}

?>