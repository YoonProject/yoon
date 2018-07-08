<?php 

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\Handler;
use Yoon\YoonMvp\Command\Handler\MakeUploadCommandHandler;


return [
    Handler::class.MakeUploadCommand::class => \DI\autowire(MakeUploadCommandHandler::class),
    Yoon\YoonMvp\Command\Repository::class => \DI\autowire(Yoon\YoonMvp\Command\MockRepository::class),
    Yoon\YoonMvp\Repository::class => \DI\autowire(Yoon\YoonMvp\Command\MockRepository::class),
    
];


?>