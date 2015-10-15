<?php
namespace Patterns\Decorator\Computer;

use \Computer\ComputerInterface;

abstract class AbstractDevice implements ComputerInterface
{
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
