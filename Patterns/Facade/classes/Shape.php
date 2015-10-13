<?php
namespace Facade;

class Shape
{
    protected $shapes;

    public function drawTriangle($size)
    {
        return $this->drawShape('triangle', $size);
    }

    public function drawRectangle($size)
    {
        return $this->drawShape('rectangle', $size);
    }

    public function drawCircle($size)
    {
        return $this->drawShape('circle', $size);
    }

    protected function drawShape($type, $size)
    {
        if (empty($this->shapes[$type])) {
            $this->createShape($type, $size);
        }

        return $this->shapes[$type]->draw();
    }

    protected function createShape($type, $size)
    {
        $factoryShape    	= new \Factory\Shape();
        $this->shapes[$type]    = $factoryShape->getShape($type)->setSize($size);

        return $this;
    }
}
