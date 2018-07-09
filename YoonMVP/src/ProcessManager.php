<?php
namespace Yoon\YoonMvp;

use Yoon\YoonMvp\Process; 


abstract class ProcessManager
{
    /**
     * Applies the new state with the given event.
     * @return void
     */
    public abstract function attach(Process $event):void;
}