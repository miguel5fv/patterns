<?php
namespace Vendor\Objects;

abstract class ShapeAbstract implements ShapeInterface
{
    protected $size;

    public function draw()
    {
        if (0 < $this->size){
            return __CLASS__;
        }

        throw new \LogicException('No shape with 0 size can be drawn');
    }

    public function setSize($size)
    {
        if ($this->correctSize($size)) {
            $this->size = $size;
        }
        else {
            $this->size = 0;
        }
    }

    abstract protected function correctSize($size);
}
