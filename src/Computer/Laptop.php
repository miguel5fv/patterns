<?php
namespace Computer;

use \Patterns\Strategy\Os\Android;

class Laptop extends AbstractComputer
{
    protected $type = 'laptop';

    public function __construct()
    {
        $this->operative_system = new Android();
    }
}
