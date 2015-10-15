<?php
namespace Patterns\Strategy\Os;

class Windows implements OperativeSystemInterface
{
    public function run()
    {
        return 'Windows I am';
    }
}