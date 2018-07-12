<?php 

namespace Yoon\YoonMvp\Infrastructure\Command;

use Yoon\YoonMvp\Command\Repository;
use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\AggregateRoot;
use \ByJG\MicroOrm\Mapper;
use \ByJG\AnyDataset\Factory;


abstract class MySqlRepository implements Repository {

    private $dataset;
    private $containerInterface;

    function __construct(Factory $dataset) {
        $this->dataset = $dataset;
    }

    public abstract function find(string $className, Uuid $uuid, $expectedVersion = null) : AggregateRoot;

    public abstract function save(AggregateRoot $aggregate);

    protected final function getUnderlyingRepository(string $className) : \ByJG\MicroOrm\Repository
    {
        return new \ByJG\MicroOrm\Repository($this->dataset, $this->containerInterface->get($className));
    }
}

?>