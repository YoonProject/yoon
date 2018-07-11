<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class AdHoc implements State
{
    public $id;

    function __construct()
    {
        $this->id = Uuid::uuid4();
    }

    public function getId() : Uuid
    {
        return Uuid::fromInteger($this->id);
    }
}

?>