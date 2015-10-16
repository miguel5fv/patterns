<?php
namespace Computer;
use \Patterns\Strategy\Os\OperativeSystemInterface;
use \Patterns\Observer as ObserverPattern;

abstract class AbstractComputer implements ComputerInterface, ObserverPattern\SubjectInterface
{
    use ObserverPattern\Subject;

    protected $type;
    protected $operative_system;

    public function showType()
    {
        return $this->type;
    }

    public function installOperativeSystem(OperativeSystemInterface $os)
    {
        $this->operative_system = $os;
    }

    public function start()
    {
        return $this->operative_system->run();
    }
}
