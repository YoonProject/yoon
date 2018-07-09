<?php

namespace Yoon\YoonMvp\Domain\Aggregate;

use Yoon\YoonMvp\AggregateRoot;
use Ramsey\Uuid\Uuid;

class File extends AggregateRoot
{
    private $fileName;
    private $relativePath;

    function __constructor(Uuid $id)
    {
        $this->setId($id);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function apply(Event $event):void 
    {

    }
}


?>