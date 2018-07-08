<?php 

namespace Yoon\Ico\Exchange;

use MatthiasMullie\Scrapbook\Adapters\MemoryStore;
use MatthiasMullie\Scrapbook\KeyValueStore;


return [
    KeyValueStore::class => \DI\autowire(MemoryStore::class)
];


?>