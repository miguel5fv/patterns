<?php
namespace Vendor\Objects;

class Circle extends ShapeAbstract implements ShapeInterface
{
    protected function correctSize($size)
    {
        return 0 < $size;
    }
}
