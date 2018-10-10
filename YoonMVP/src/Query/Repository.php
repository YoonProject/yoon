<?php
namespace Yoon\YoonMvp\Query;

use Yoon\YoonMvp\Entity;
use Ramsey\Uuid\Uuid;


interface Repository
{
    /**
     * Finds an entity specified by the class name and an uuid. If expected version is provided then the entity gets filtered by 
     * a generic version identitier.
     * @param string $className
     * @param int $expectedVersion
     *
     * @return Entity
     */
    public function find(string $className, Uuid $uuid, $expectedVersion = null) : Entity;
}
