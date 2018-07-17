<?php 

namespace Yoon\YoonMvp\Infrastructure\Command;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\AggregateRoot;
use Yoon\YoonMvp\Configuration;
use Yoon\YoonMvp\Infrastructure\Command\MySqlRepository;
use ByJG\MicroOrm\Mapper;
use ByJG\AnyDataset\Factory;
use Ramsey\Uuid\Uuid;
use Psr\Container\ContainerInterface;
use AutoMapperPlus\MapperInterface;

class CommandRepository extends MySqlRepository {

    private $mapper;

    //same here
    function __construct(ContainerInterface $containerInterface) 
    {
        $configuration = $c->get(Configuration::class);
        $dataset = new \ByJG\AnyDataset\Factory($configuration->getDatabaseConnectionString('read'));
        parent::__construct($containerInterface, $dataset);
        $this->mapper = $c->get(MapperInterface::class.AggregateRoot::class);
    }

    public function find($className, Uuid $uuid, $expectedVersion = null) : AggregateRoot
    {
        $state = $this->getUnderlyingRepository($className)->get($uuid->getInteger());
        return $this->mapEntity($this->mapper, $state);
    }

    
    public function save(AggregateRoot $aggregate) : void
    {
        try 
        {
            $this->getUnderlyingRepository($className)-save($aggregate->getState());
        }
        catch(\Excpetions $e)
        {
            //TODO error log
        }
    }

    //replace with automapping third component

    private function mapAggregate(MapperInterface $mapper, $className, State $state) : AggregateRoot
    {
        return $mapper->map($state, $className);
    }
}

?>