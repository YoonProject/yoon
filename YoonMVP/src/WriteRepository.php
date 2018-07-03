<?php
namespace Yoon\YoonMvp;

interface WriteRepository extends Repository
{
    /**
     * Saves the aggregate root.
     * @return void
     */
    public function save(AggregateRoot $aggregate);
}