<?php 

namespace Yoon\YoonMvp\Infrastructure\Query;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\Configuration;
use Yoon\YoonMvp\Infrastructure\Query\MySqlRepository;
use ByJG\MicroOrm\Mapper;
use ByJG\AnyDataset\Factory;
use Ramsey\Uuid\Uuid;
use Psr\Container\ContainerInterface;

class QueryRepository extends MySqlRepository {

    //same here
    function __construct(ContainerInterface $containerInterface, Configuration $configuration) {
        $dataset = new ByJG\AnyDataset\Factory($configuration->getDatabaseConnectionString('read'));
        parent::__construct($containerInterface, $dataset);
    }

    public function find($className, Uuid $uuid, $expectedVersion = null) : Entity
    {
        $entity = parent::$containerInterface->get($className);
        $state = $this->getUnderlyingRepository($className)->get($uuid->getInteger());
        return $this->mapEntity($entity, $state);
    }

    //replace with automapping third component

    private function mapEntity(Entity $entity, State $state) : Entity
    {
        return $entity->constructFromState($state);
    }
}

?>