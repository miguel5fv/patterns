<?php
namespace Patterns\Facade;

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
        if ( empty($this->shapes[$type])) {
            $this->createShape($type);
        }

    $this->shapes[$type]->setSize($size);
        return $this->shapes[$type]->draw();
    }

    protected function createShape($type)
    {
        $factoryShape           = new \Patterns\Factory\Shape();
        $this->shapes[$type]    = $factoryShape->getShape($type);

        return $this;
    }
}
