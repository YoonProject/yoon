<?php

namespace Yoon\YoonMvp\Infrastructure\Database\Mapping;

use Yoon\YoonMvp\Infrastructure\State\UserState;

class UserMap
{
    public static function Map()
    {
        // Creating the mapping
        $mapper = new \ByJG\MicroOrm\Mapper(
            UserState::class, // The full qualified name of the class
            'id' // The primary key field
        );

        // Optionally you can define table mappings between the propoerties
        // and the database fields;
        // The example below will map the property 'createdate' to the database field 'created';
        $mapper->addFieldMap('createdate', 'created');
    }
}
