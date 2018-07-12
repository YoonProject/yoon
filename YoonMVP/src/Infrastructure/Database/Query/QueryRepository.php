<?php 

namespace Yoon\YoonMvp\Infrastructure\Query;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\Configuration;
use Yoon\YoonMvp\Infrastructure\Query\MySqlRepository;
use ByJG\MicroOrm\Mapper;
use ByJG\AnyDataset\Factory;
use Ramsey\Uuid\Uuid;


class QueryRepository extends MySqlRepository {

    function __construct(Configuration $configuration) {
        $dataset = new ByJG\AnyDataset\Factory($configuration->getDatabaseConnectionString('read'));
        parent::__construct($dataset);
    }

    public function find($className, Uuid $uuid, $expectedVersion = null) : Entity
    {
        return $this->getUnderlyingRepository($className)->get($uuid->getInteger());
    }
}

?>