<?php
namespace Shapes;

class Rectangle extends AbstractShape implements ShapeInterface
{
    protected function correctSize($size)
    {
        return 0 < $size
            && 0 === ($size % 2);
    }
}
