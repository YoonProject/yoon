<?php 

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\Handler;
use Yoon\YoonMvp\RepositoryPipe;
use Yoon\YoonMvp\MessageBus;
use Yoon\YoonMvp\InternalMessageBus;
use Yoon\YoonMvp\Command\Handler\MakeUploadCommandHandler;
use Psr\Container\ContainerInterface;

return [
    MessageBus::class => \DI\autowire(InternalMessageBus::class),
    
    Yoon\YoonMvp\Command\Repository::class => \DI\autowire(Yoon\YoonMvp\Command\MockRepository::class),
    'repositories' => function (ContainerInterface $c) {
        return array($c->get(Yoon\YoonMvp\Command\Repository::class));
    },
    Handler::class.MakeUpload::class => \DI\autowire(MakeUploadCommandHandler::class)->constructor()
];


?>