<?php 

namespace Yoon\YoonMvp;

use Yoon\YoonPublic\ConfigExtractor;
use Yoon\YoonMvp\Handler;
use Yoon\YoonMvp\Configuration;
use Yoon\YoonMvp\ChainRepository;
use Yoon\YoonMvp\MessageBus;
use Yoon\YoonMvp\InternalMessageBus;
use Yoon\YoonMvp\Command\Handler\MakeUploadCommandHandler;
use Yoon\YoonMvp\Domain\Command\MakeUpload;
use Psr\Container\ContainerInterface;

return [
    MessageBus::class => \DI\autowire(InternalMessageBus::class),
    
    \Yoon\YoonMvp\Command\Repository::class => \DI\autowire(\Yoon\YoonMvp\Command\MockRepository::class),
    'repositories' => function (ContainerInterface $c) {
        return array($c->get(\Yoon\YoonMvp\Command\Repository::class));
    },
    RepositoryPipe::class => function (ContainerInterface $c) {
        return new ChainRepository($c->get('repositories'));
    },
    Handler::class.MakeUpload::class => function (ContainerInterface $c) {
        return new MakeUploadCommandHandler($c->get(MessageBus::class), $c->get(RepositoryPipe::class));
    },
    Configuration::class => ConfigExtractor::class
];


?>