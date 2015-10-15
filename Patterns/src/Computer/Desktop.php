<?php
namespace Computer;
use \Patterns\Strategy\Os\Linux;


class Desktop extends Computer
{
    protected $type = 'desktop';

    public function __construct()
    {
        $this->operative_system = new Linux();
    }
}