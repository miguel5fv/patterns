<?php
namespace Shapes;

class Triangle extends ShapeAbstract implements ShapeInterface
{
    protected function correctSize($size)
    {
        return 0 < $size
        && 0 === $size % 3;
    }
}
