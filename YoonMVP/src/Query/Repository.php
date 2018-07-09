<?php
namespace Yoon\YoonMvp\Query;

use Yoon\YoonMvp\Entity;
use Ramsey\Uuid\Uuid;


interface Repository
{
    /**
     * @param string $className
     * @param int $expectedVersion
     *
     * @return Entity
     */
    public function find($className, Uuid $uuid, $expectedVersion = null) : Entity;
}