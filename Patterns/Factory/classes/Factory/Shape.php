<?php
namespace Factory;

use Shapes\Circle;

class Shape
{
    CONST TRIANGLE      = 'triangle';
    CONST RECTANGLE     = 'rectangle';
    CONST CIRCLE        = 'circle';

    public function getShape($name)
    {
        $className  = $this->retrieveClassName($name);
        return new $className;
    }

    private function retrieveClassName($name)
    {
        switch($name){
            case self::TRIANGLE:
            case self::RECTANGLE:
            case self::CIRCLE:
                return ucfirst($name);
            default:
                $message    = <<<ERRROR
The $name shape type does not exists. Try:
    triangle
    rectangle
    circle
ERRROR;
                throw new \InvalidArgumentException($message);
        }
    }
}
