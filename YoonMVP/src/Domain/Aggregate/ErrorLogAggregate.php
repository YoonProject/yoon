<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\AggregateRoot;
use Ramsey\Uuid\Uuid;

class ErrorLogAggregate extends AggregateRoot
{
    function __constructor(Uuid $id)
    {
        $this->setId($id);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function apply(Event $event):void 
    {

    }
}


?>