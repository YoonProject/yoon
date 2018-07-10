<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\AggregateRoot;
use Yoon\YoonMvp\Domain\State\ErrorLog as ErrorLogState;
use Ramsey\Uuid\Uuid;

class ErrorLog extends AggregateRoot
{

    private $errorLogState;

    function __construct(ErrorLogState $errorLogState)
    {
        parent::__construct($errorLogState);
    }

    /**
     * Applies the new state with the given event.
     * @return Promise
     */
    final public function apply(Event $event):Promise 
    {
        return new Promise();
    }
}


?>