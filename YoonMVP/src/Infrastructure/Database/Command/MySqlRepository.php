<?php 

namespace Yoon\YoonMvp\Infrastructure\Command;

use Yoon\YoonMvp\Command\Repository;
use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\AggregateRoot;
use \ByJG\MicroOrm\Mapper;
use \ByJG\AnyDataset\Factory;


abstract class MySqlRepository implements Repository {

    private $repository;

    function __construct(Factory $dataset, Mapper $mapper) {
        $this->repository = new \ByJG\MicroOrm\Repository($dataset, $mapper);
    }

    public abstract function find($className, Uuid $uuid, $expectedVersion = null) : AggregateRoot;

    public abstract function save(AggregateRoot $aggregate);

    protected final function getUnderlyingRepository() : \ByJG\MicroOrm\Repository
    {
        return $this->repository;
    }
}

?>