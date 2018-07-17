<?php 

namespace Yoon\YoonMvp\Infrastructure\Database;

use Yoon\YoonMvp\Domain\Entity\User;
use Yoon\YoonMvp\Infrastructure\Database\Mapping\UserMap;
use ByJG\MicroOrm\Mapper;

return [
    Mapper::class.User::class=> \DI\autowire(UserMap::class)
];


?>