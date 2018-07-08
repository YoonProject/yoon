<?php
namespace Yoon\YoonMvp;

use Ramsey\Uuid\Uuid;

abstract class AggregateRoot extends Entity
{
    /**
     * @var Ramsey\Uuid\Uuid;
     */
    private $id;

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
    public function getHashSignedById() : string
    {
        return sodium_crypto_generichash($this->id);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    public abstract function apply(Event $event):void;
}