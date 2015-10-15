<?php
namespace Patterns\Strategy\Os;

class Windows implements IOperativeSystem
{
    public function run()
    {
        return 'Windows I am';
    }
}