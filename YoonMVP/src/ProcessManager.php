<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\Process; 
use Yoon\YoonMvp\ProcessState; 
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;
use __\__;


class ProcessManager extends AggregateRoot
{
    private $attachedProcesses;

    function __constructor(array $processes)
    {
        $this->setId(Uuid::uuid4());
        $this->attachedProcesses = $processes;
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
    final public function apply(Event $event):Promise
    {
        $promise = new Promise();
        $processChain = __::filter($this->attachedProcesses, function(Process $process) {
                return $process->getProcessState() == ProcessState::Pending;
            });
        foreach($processChain as $process)
        {
            $promise->then(function ($processEvent){
                return $process->apply($processEvent);
            });
        }
        return $promise;
    }
}