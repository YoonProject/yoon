<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\EventStore\EventStream;
use Yoon\YoonMvp\AggregateRoot;
use Ramsey\Uuid\Uuid;

/**
* Abtract class for isolating the event sourcing feature from the general architecture.
*/
abstract class EventSourcingAggregate extends AggregateRoot
{
    /**
     * @var array<Event>
     */
    private $events = array();

    /**
     * Loads all events from the specified event stream.
     *
     * @param EventStream $eventStream
     * @return void
     */
    public function loadFromEventStream(EventStream $eventStream) : void
    {
        if ($this->events) {
            throw new RuntimeException("AggregateRoot was already created from event stream and cannot be hydrated again.");
        }
        $this->setId($eventStream->getUuid());
        foreach ($eventStream as $event) {
            $this->apply($event);
        }
    }

    /**
     * Pulls all stored outstanding events within the aggregate and clears them.
     *
     * @return void
     */
    public function popAllEvents() : array
    {
        $events = $this->events;
        $this->events = array();
        return $events;
    }
}