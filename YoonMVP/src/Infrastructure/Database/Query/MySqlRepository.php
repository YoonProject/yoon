<?php 

namespace Yoon\YoonMvp\Infrastructure\Query;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\Entity;
use ByJG\MicroOrm\Mapper;
use ByJG\AnyDataset\Factory;
use Ramsey\Uuid\Uuid;
use Psr\Container\ContainerInterface;


abstract class MySqlRepository implements Repository {

    private $dataset;
    private $containerInterface;

    function __construct(Factory $dataset) {
        $this->dataset = $dataset;
    }

    public abstract function find(string $className, Uuid $uuid, $expectedVersion = null) : Entity;

    protected final function getUnderlyingRepository(string $className) : \ByJG\MicroOrm\Repository
    {
        return new \ByJG\MicroOrm\Repository($this->dataset, $this->containerInterface->get($className));
    }
}

?>