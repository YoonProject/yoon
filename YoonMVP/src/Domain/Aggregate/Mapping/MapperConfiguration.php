<?php

namespace Yoon\YoonMvp\Domain\Aggregate\Mapping;

use Yoon\YoonMvp\Domain\State\ErrorLog as ErrorLogState;
use Yoon\YoonMvp\Domain\State\File as FileState;
use Yoon\YoonMvp\Domain\State\User as UserState;
use Yoon\YoonMvp\Domain\State\FileMetaData as FileMetaDataState;
use Yoon\YoonMvp\Domain\State\UserMetaData as UserMetaDataState;
use Yoon\YoonMvp\Domain\State\Upload as UploadState;

use Yoon\YoonMvp\Domain\Aggregate\File as FileAggregate;
use Yoon\YoonMvp\Domain\Aggregate\ErrorLog as ErrorLogAggregate;
use Yoon\YoonMvp\Domain\Aggregate\FileMetaData as FileMetaDataAggregate;
use Yoon\YoonMvp\Domain\Aggregate\UserMetaData as UserMetaDataAggregate;
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
        $this->registerMapping(FileState::class, FileAggregate::class)
        ->beConstructedUsing(function (FileState $source): FileAggregate {
            return new FileAggregate($source);
        });
        $this->registerMapping(ErrorLogState::class, ErrorLogAggregate::class)
        ->beConstructedUsing(function (ErrorLogState $source): ErrorLogAggregate {
            return new ErrorLogAggregate($source);
        });
        $this->registerMapping(FileMetaDataState::class, FileMetaDataAggregate::class)
        ->beConstructedUsing(function (FileMetaDataState $source): FileMetaDataAggregate {
            return new FileMetaDataAggregate($source);
        });
        $this->registerMapping(UserMetaDataState::class, UserMetaDataAggregate::class)
        ->beConstructedUsing(function (UserMetaDataState $source): UserMetaDataAggregate {
            return new UserMetaDataAggregate($source);
        });
        $this->registerMapping(UploadState::class, UploadAggregate::class)
        ->beConstructedUsing(function (UploadState $source): UploadAggregate {
            return new UploadAggregate($source, array(new FileAggregate(), new FileMetaDataAggregate(), new UserMetaDataAggregate()));
        });
    }
}

