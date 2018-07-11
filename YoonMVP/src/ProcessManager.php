<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\Process; 
use Yoon\YoonMvp\ProcessState; 
use Yoon\YoonMvp\Domain\State\AdHoc;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;
use __\__;


class ProcessManager extends AggregateRoot
{
    private $attachedProcesses;
    private $originAggregate;

    function __construct(array $processes, AggregateRoot $originAggregate = null)
    {
        parent::__construct($originAggregate != null ? $originAggregate->getState():new AdHoc());

        $this->attachedProcesses = $processes;
        $this->originAggregate = $originAggregate;
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    final public function attach(Process $process):void  
    {
        if(__::has($this->attachedProcesses, $process->getId()))
        {
            return;
        }
        __::set($this->attachedProcesses, $process->getId(), $process);
    }

    /**
     * Applies the new state with the given event.
     * @return void
     */
    public function apply(Event $event):Promise
    {
        $processChain = __::filter($this->attachedProcesses, function(Process $process) {
                return $process->getProcessState() == ProcessState::Pending;
            });
        $rootPromise = $this->originAggregate != null? $this->originAggregate->apply($event) : new Promise();
        $chainPromise = $rootPromise;
        foreach($processChain as $process)
        {
            $chainPromise = $chainPromise->then(function ($processEvent){
                return $process->apply($processEvent);
            });
        }
        return $rootPromise;
    }

    /**
    * Gets all processes.
    *
    * @return array<Process>
    */
    final public function getProcesses() : array
    {
        return $this->attachedProcesses;
    }
}