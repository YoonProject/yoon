<?php
namespace Yoon\YoonMvp\Command;

use Yoon\YoonMvp\AggregateRoot;
use Rhumsaa\Uuid\Uuid;

interface Repository
{
    /**
     * Saves the aggregate root.
     * @return void
     */
    public function save(AggregateRoot $aggregate);

    /**
     * @param string $className
     * @param int $expectedVersion
     *
     * @return AggregateRoot
     */
    public function find($className, Uuid $uuid, $expectedVersion = null) : AggregateRoot;
}