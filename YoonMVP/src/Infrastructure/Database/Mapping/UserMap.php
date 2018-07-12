<?php

namespace Yoon\YoonMvp\Infrastructure\Database\Mapping;

use Yoon\YoonMvp\Domain\State\UserState;

class UserMap extends \ByJG\MicroOrm\Mapper
{

    function __construct()
    {
        parent::__construct(
            UserState::class, // The full qualified name of the class
            'id', // The primary key field,
            'createdDate',
            'name'
        );
    }

    public function map() : UserMap
    {
        $this->addFieldMap('id', 'userid');
        $this->addFieldMap('createdDate', 'registered');
        $this->addFieldMap('name', 'email');
        return $this;
    }
}
