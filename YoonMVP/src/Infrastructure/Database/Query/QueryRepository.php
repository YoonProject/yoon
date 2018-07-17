<?php 

namespace Yoon\YoonMvp\Infrastructure\Query;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\EntityRoot;
use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\Configuration;
use Yoon\YoonMvp\Infrastructure\Query\MySqlRepository;
use ByJG\MicroOrm\Mapper;
use ByJG\AnyDataset\Factory;
use Ramsey\Uuid\Uuid;
use Psr\Container\ContainerInterface;
use AutoMapperPlus\MapperInterface;

class QueryRepository extends MySqlRepository {

    //same here
    function __construct(ContainerInterface $containerInterface) {
        $configuration = $c->get(Configuration::class);
        $dataset = new \ByJG\AnyDataset\Factory($configuration->getDatabaseConnectionString('read'));
        parent::__construct($containerInterface, $dataset);
        $this->mapper = $c->get(MapperInterface::class.EntityRoot::class);
    }

    public function find($className, Uuid $uuid, $expectedVersion = null) : Entity
    {
        $state = $this->getUnderlyingRepository(Mapper::class.$className)->get($uuid->getInteger());
        return $this->mapEntity($this->mapper, $state);
    }

    //replace with automapping third component

    private function mapEntity(MapperInterface $mapper, $className, State $state) : Entity
    {
        return $mapper->map($state, $className);
    }
}

?>