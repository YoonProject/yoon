<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;

abstract class AggregateRoot extends EntityRoot
{
    /**
     * Applies the new state with the given event.
     * @return void
     */
    public abstract function apply(Event $event):Promise;
}