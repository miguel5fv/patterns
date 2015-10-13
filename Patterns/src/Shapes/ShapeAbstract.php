<?php
namespace Shapes;

abstract class ShapeAbstract implements ShapeInterface
{
    protected $size;

    public function draw()
    {
        if (0 < $this->size){
            return get_class($this);
        }
        
	throw new \LogicException('Wrong size setted');
    }

    public function setSize($size)
    {
        if ($this->correctSize($size)) {
            $this->size = $size;
        }
        else {
            $this->size = 0;
        }
	
	return $this;
    }

    abstract protected function correctSize($size);
}
