<?php

namespace Yoon\YoonMvp;

use Ramsey\Uuid\Uuid; 

interface State 
{
    /**
     * Gets the states unique id.
     * @return Uuid
     */
    public function getId() : Uuid;
}

?>