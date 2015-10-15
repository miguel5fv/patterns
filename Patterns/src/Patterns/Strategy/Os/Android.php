<?php
namespace Patterns\Strategy\Os;

class Android implements IOperativeSystem
{
    public function run()
    {
        return 'Android I am';
    }
}