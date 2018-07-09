<?php 

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\AggregateRoot;

/**
 * Iterates over all repository implementations.
 *
 */
class RepositoryPipe
{

    private $repositories;

    /**
     * Constructs the pipeline with all repository implementations
     *
     * @Inject
     * @param array $repositories
     */
    function __constructor($repositories) 
    {
        $this->repositories = $repositories;
    }

    /**
     * Executes all repository save functions.
     *
     * @return void
     */
    public function saveAll(AggregateRoot $aggregate) : void 
    {
        foreach ($repositories as $repository) {
            $repository->save($aggregate);
        }
    }
}


?>