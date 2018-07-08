<?php

namespace Yoon\YoonMvp\ErrorLog;

use Yoon\YoonMvp\Command\Repository;

// Verwaltet alle Stellar Status
class MockRepository extends Repository
{
    
     /**
     * Saves the aggregate root.
     * @return void
     */
    public function save(AggregateRoot $aggregate)
    {

    }

    /**
     * @param string $className
     * @param int $expectedVersion
     *
     * @return AggregateRoot
     */
    public function find($className, Uuid $id, $expectedVersion = null) : AggregateRoot
    {
        
    }
}

?>