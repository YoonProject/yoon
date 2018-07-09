<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\AggregateRoot; 


abstract class Process
{
    /**
     * Applies the new state with the given event.
     * @return void
     */
    public abstract function action(AggregateRoot $aggregate):Promise;
}