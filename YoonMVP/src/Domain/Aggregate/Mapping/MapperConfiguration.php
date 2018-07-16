<?php

namespace Yoon\YoonMvp\Domain\Aggregate\Mapping;

use Yoon\YoonMvp\Domain\State\ErrorLog as ErrorLogState;
use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\Domain\State\User as UserState;
use Yoon\YoonMvp\Domain\State\MetaData as MetaDataState;
use Yoon\YoonMvp\Domain\State\FileMetaData as FileMetaDataState;
use Yoon\YoonMvp\Domain\State\UserMetaData as UserMetaDataState;
use Yoon\YoonMvp\Domain\State\Upload as UploadState;

use Yoon\YoonMvp\Domain\Entity\File as FileEntity;
use Yoon\YoonMvp\Domain\Entity\User as UserEntity;

use Yoon\YoonMvp\Domain\Aggregate\File as FileAggregate;
use Yoon\YoonMvp\Domain\Aggregate\Upload as UploadAggregate;



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
            return new FileEntity($source);
        });
    }
}

