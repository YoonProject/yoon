<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Yoon\YoonMvp\Domain\State\MetaData;
use Ramsey\Uuid\Uuid;

class FileFragment extends File
{
    function __construct(
        File $parentFile)
    {
        parent::__construct($parentFile->getId(), $parentFile->getUri(), $parentFile->getYoonFileMerkleRoot(), 
            $parentFile->getFileMetaData());
    }
}

?>