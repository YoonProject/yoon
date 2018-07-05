<?php 

namespace Yoon\YoonMvp\Infrastructure\Query;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\Entity;
use \ByJG\MicroOrm\Mapper;
use \ByJG\AnyDataset\Factory;


abstract class MySqlRepository implements Repository {

    private $repository;

    function __construct(Factory $dataset, Mapper $mapper) {
        $this->repository = new \ByJG\MicroOrm\Repository($dataset, $mapper);
    }

    public abstract function find($className, Uuid $uuid, $expectedVersion = null) : Entity;

    protected final function getUnderlyingRepository() : \ByJG\MicroOrm\Repository
    {
        return $this->repository;
    }
}

?>