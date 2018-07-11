<?php 

namespace Yoon\YoonMvp;

use Yoon\YoonMvp\AggregateRoot;
use Yoon\YoonMvp\Command\Repository;
use Yoon\YoonMvp\ErrorLog\ErrorLogException;
use Yoon\YoonMvp\ErrorLog\ErrorLogType;

/**
 * Iterates over all repository implementations for abstracting all infrastructures.
 *
 */
class InfrastructureRepository implements Repository
{

    private $repositories;

    /**
     * Constructs the pipeline with all repository implementations
     *
     * @Inject
     * @param array $repositories
     */
    function __constructor(array $repositories) 
    {
        $this->repositories = $repositories;
    }

    /**
     * Saves the aggregate root.
     * @return void
     */
    public function save(AggregateRoot $aggregate) : void
    {
        foreach ($repositories as $repository) {
            $this->handleSave($aggregate);
        }
    }


    private function handleSave(AggregateRoot $aggregate, Repository $repository){
        try {
            $repository->save($aggregate);
        }
        catch(\Exception $exception){
            throw new ErrorLogException(ErrorLogType::Unexpected, "Error while saving aggregate in repository pipeline.");
        }
    }


    /**
     * @param string $className
     * @param int $expectedVersion
     *
     * @return AggregateRoot
     */
    public function find(string $className, Uuid $id, $expectedVersion = null) : AggregateRoot
    {
        $aggregates = __::map($this->repositories, function(Repository $repository) 
            use($className, $id, $expectedVersion) {
                return $repository->find($className, $id, $expectedVersion);
        });

        return new ProcessManager($aggregates);
    }

}


?>