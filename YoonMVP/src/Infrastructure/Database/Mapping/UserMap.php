<?php

namespace Yoon\YoonMvp\Infrastructure\Database\Mapping;

use Yoon\YoonMvp\Domain\State\UserState;

class UserMap
{
    public static function Map()
    {
        // Creating the mapping
        $mapper = new \ByJG\MicroOrm\Mapper(
            UserState::class, // The full qualified name of the class
            'id', // The primary key field,
            'createdDate',
            'name'
        );

        $mapper->addFieldMap('id', 'userid');
        $mapper->addFieldMap('createdDate', 'registered');
        $mapper->addFieldMap('name', 'email');
    }
}
