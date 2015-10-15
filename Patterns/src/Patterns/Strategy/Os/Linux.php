<?php
namespace Patterns\Strategy\Os;

class Linux implements IOperativeSystem
{
    public function run()
    {
        return 'Linux I am';
    }
}