<?php
namespace Facade;

class Shape
{
    protected $shapes;

    public function drawTriangle($size)
    {
        $this->drawShape('triangle', $size);
    }

    public function drawRectangle($size)
    {
        $this->drawShape('rectangle', $size);
    }

    public function drawCircle($size)
    {
        $this->drawShape('circle', $size);
    }

    protected function drawShape($type, $size)
    {
        if (empty($this->shapes[$type])) {
            $this->createShape('triangle', $size);
        }

        $this->shapes[$type]->draw();

        return $this;
    }

    protected function createShape($type, $size)
    {
        $this->shapes[$type]    = new Factory\Shape()->getShape($type)->setSize($size);

        return $this;
    }
}