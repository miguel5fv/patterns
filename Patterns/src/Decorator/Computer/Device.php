<?php
namespace Decorator\Computer;

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
        return $this->computer->showType() . 'With: ' . $this->type;
    }
}