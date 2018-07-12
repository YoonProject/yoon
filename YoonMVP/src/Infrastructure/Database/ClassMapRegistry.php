<?php 

namespace Yoon\YoonMvp\Infrastructure\Database;

use Yoon\YoonMvp\Domain\Entity\User;
use Yoon\YoonMvp\Infrastructure\Database\Mapping\UserMap;


return [
    User::class => \DI\autowire(UserMap::class),
];


?>