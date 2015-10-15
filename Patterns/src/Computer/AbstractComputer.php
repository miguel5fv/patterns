<?php
namespace Computer;
use \Patterns\Strategy\Os\OperativeSystemInterface;

abstract class AbstractComputer implements ComputerInterface
{
    protected $type;
    protected $operative_system;

    public function showType()
    {
        return $this->type;
    }

    public function setOperativeSystem(OperativeSystemInterface $os)
    {
        $this->operative_system = $os;
    }

    public function start()
    {
        return $this->operative_system->run();
    }
}
