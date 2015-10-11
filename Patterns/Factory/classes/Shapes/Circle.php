<?php
namespace Shapes;

class Circle extends ShapeAbstract implements ShapeInterface
{
    protected function correctSize($size)
    {
        return 0 < $size;
    }
}
