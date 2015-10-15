<?php
namespace Computer;


abstract class Computer implements IComputer
{
    protected $type;

    public function showType()
    {
        return $this->type;
    }
}
