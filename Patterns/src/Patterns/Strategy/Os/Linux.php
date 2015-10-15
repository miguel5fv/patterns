<?php
namespace Patterns\Strategy\Os;

class Linux implements OperativeSystemInterface
{
    public function run()
    {
        return 'Linux I am';
    }
}