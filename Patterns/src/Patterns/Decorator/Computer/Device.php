<?php
namespace Patterns\Decorator\Computer;

use \Computer\IComputer;

abstract class Device implements IComputer
{
    protected $computer;
    protected $type;

    public function __construct(IComputer $computer)
    {
        $this->computer = $computer;
    }

    public function showType()
    {
        return $this->computer->showType() . ' with: ' . $this->type;
    }
}
