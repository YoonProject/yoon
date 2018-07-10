<?php

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\AggregateRoot; 
use GuzzleHttp\Promise\Promise;


abstract class Process
{
    /**
     * Applies the new state with the given event.
     * @return void
     */
    public abstract function getAction(AggregateRoot $aggregate):Promise;
}

?>