<?php

namespace Yoon\YoonMvp\EventStore;

use Yoon\YoonMvp\MessageBus;
use Yoon\YoonMvp\EventSourcingAggregate;
use Yoon\YoonMvp\Command\Repository;
use Yoon\YoonMvp\AggregateRootNotFoundException;

use Rhumsaa\Uuid\Uuid;

class EventSourceRepository implements Repository
{
    private $eventStore;
    private $messageBus;
    private $streams = array();

    public function __construct(EventStore $eventStore, MessageBus $messageBus)
    {
        $this->eventStore = $eventStore;
        $this->messageBus = $messageBus;
    }

    /**
     * @return EventSourcingAggregate
     */
    public function find($className, Uuid $uuid, $expectedVersion = null) : EventSourcingAggregate
    {
        try {
            $eventStream = $this->eventStore->find($uuid);
        } catch (EventStreamNotFoundException $e) {
            throw new AggregateRootNotFoundException();
        }

        $this->streams[(string)$uuid] = $eventStream;

        $aggregateRootClass = $eventStream->getClassName();

        if ($aggregateRootClass !== ltrim($className, '\\')) {
            throw new AggregateRootNotFoundException();
        }

        if ($expectedVersion && $eventStream->getVersion() !== $expectedVersion) {
            throw new ConcurrencyException();
        }

        $reflClass = new \ReflectionClass($aggregateRootClass);

        $aggregateRoot = $reflClass->newInstanceWithoutConstructor();
        $aggregateRoot->loadFromEventStream($eventStream)->resolve();

        return $aggregateRoot;
    }

    /**
     * @return void
     */
    public function save(EventSourcingAggregate $object) : void
    {
        $id = (string)$object->getId();

        if (!isset($this->streams[$id])) {
            $this->streams[$id] = new EventStream(
                get_class($object),
                $object->getId()
            );
        }

        $eventStream = $this->streams[$id];
        $eventStream->addEvents($object->popAllEvents());

        $transaction = $this->eventStore->commit($eventStream);

        foreach ($transaction->getCommittedEvents() as $event) {
            $event->setId($object->getId());
            $this->eventBus->publish($event);
        }
    }
}
