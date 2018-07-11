<?php

namespace Yoon\YoonMvp\ErrorLog;

use Yoon\YoonMvp\Command\Repository;
use Yoon\YoonMvp\AggregateRoot;
use __\__;

// Verwaltet alle Stellar Status
class MockRepository extends Repository
{
    
    private $store;

    function __construct() 
    {
        $store = array();
    }

     /**
     * Saves the aggregate root.
     * @return void
     */
    public function save(AggregateRoot $aggregate)
    {
        if(__::has($this->store, $aggregate->getId()))
        {
            unset($store[$aggregate->getId()]);
        }
        __::set($this->store,$aggregate->getId(), $aggregate);
    }

    /**
     * @param string $className
     * @param int $expectedVersion
     *
     * @return AggregateRoot
     */
    public function find(string $className, Uuid $id, $expectedVersion = null) : AggregateRoot
    {
        return $this->findAggregate($id);
    }

    private function findAggregate(string $className, Uuid $id) : AggregateRoot
    {
        $aggregate = __::get($this->store, $id);
        return $aggregate != null ? $aggregate : $this->aggregateFactory($className);
    }

    private function aggregateFactory(string $class) { 
        if ($class[0] != '\\') { 
             $class = '\\' . __NAMESPACE__ . '\\' . $class; 
        } 
        return new $class(); 
    } 
}

?>