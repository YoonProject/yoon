<?php

namespace Yoon\YoonMvp\Domain\Entity\Mapping;


use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\Domain\State\User as UserState;

use Yoon\YoonMvp\Domain\Entity\File as FileEntity;
use Yoon\YoonMvp\Domain\Entity\User as UserEntity;

use AutoMapperPlus\Configuration\AutoMapperConfig;
use AutoMapperPlus\Configuration\Options;
use AutoMapperPlus\AutoMapper;



class MapperConfiguration extends AutoMapperConfig {

    /**
     * AutoMapperConfig constructor.
     *
     * @param callable $configurator
     */
    function __construct()
    {
        parent::__construct();
        //example, change later
        $this->registerMapping(FileState::class, FileEntity::class)
        ->beConstructedUsing(function (FileState $source): FileEntity {
            return new FileEntity($source);
        });
        $this->registerMapping(UserState::class, UserEntity::class)
        ->beConstructedUsing(function (FileState $source): FileEntity {
            return new UserEntity($source);
        });
    }
}

