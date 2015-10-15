<?php
namespace Computer;
use \Patterns\Strategy\Os\IOperativeSystem;

abstract class Computer implements IComputer
{
    protected $type;
    protected $operative_system;

    public function showType()
    {
        return $this->type;
    }

    public function setOperativeSystem(IOperativeSystem $os)
    {
        $this->operative_system = $os;
    }

    public function start()
    {
        return $this->operative_system->run();
    }
}
