<?php
namespace Patterns\Strategy\Os;

class Android implements OperativeSystemInterface
{
    public function run()
    {
        return 'Android I am';
    }
}
