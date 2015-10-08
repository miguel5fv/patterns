<?php
namespace Vendor\Objects;

class Rectangle extends ShapeAbstract implements ShapeInterface
{
    protected function correctSize($size)
    {
        return 0 < $size
            && 0 === $size % 2;
    }
}