<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;

abstract class AggregateRoot extends Entity
{
    /**
     * @var Ramsey\Uuid\Uuid;
     */
    private $id;
    protected $state;

    function __construct(State $state)
    {
        $this->state = $state;
    }

    final protected function setId(Uuid $uuid) : void
    {
        $this->id = $uuid;
    }

    /**
     * @return Ramsey\Uuid\Uuid;
     */
    final public function getId() : Uuid
    { 
        return $this->id;
    }

    /**
     * Gets the entity hash signed by the id.
     * @return string
     */
    final public function getHashSignedById() : string
    {
        return sodium_crypto_generichash($this->id);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    public abstract function apply(Event $event):Promise;


    /**
     * Gets the state.
     * @return State
     */
    final public function getState(): State
    {
        return $this->state;
    }

}