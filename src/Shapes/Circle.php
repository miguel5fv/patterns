<?php
namespace Shapes;

class Circle extends AbstractShape implements ShapeInterface
{
    protected function correctSize($size)
    {
        return 0 < $size;
    }
}
