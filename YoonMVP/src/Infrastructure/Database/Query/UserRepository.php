<?php 

namespace Yoon\YoonMvp\Infrastructure\Query;

use Yoon\YoonMvp\Query\Repository;
use Yoon\YoonMvp\Entity;
use Yoon\YoonMvp\Infrastructure\Query\MySqlRepository;
use ByJG\MicroOrm\Mapper;
use ByJG\AnyDataset\Factory;
use Ramsey\Uuid\Uuid;


class UserRepository extends MySqlRepository {


    function __construct() {
        $parent::__construct();
    }

    public function find($className, Uuid $uuid, $expectedVersion = null) : Entity
    {
        return $this->getUnderlyingRepository()->get($uuid->getInteger());
    }
}

?>