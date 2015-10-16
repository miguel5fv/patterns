<?php
namespace Patterns\Decorator\Computer;

use \Computer\ComputerInterface;
use \Patterns\Observer as ObserverPattern;

abstract class AbstractDevice implements
    ComputerInterface,
    ObserverPattern\ObserverInterface
{
    use ObserverPattern\Observer;

    protected $computer;
    protected $type;

    public function __construct(ComputerInterface $computer)
    {
        $this->computer = $computer;
    }

    public function showType()
    {
        return $this->computer->showType() . ' with: ' . $this->type;
    }
}
