<?php
/**
 * Factory pattern example
 *
 * About shapes
 */
use Vendor\Factory;

function spl_autoload($className)
{
    require_once 'classes/' . strtolower($className) . '.php';
}
spl_autoload_register();

$shapeFactory   = new Shape();

$circle = $shapeFactory->getShape('circle');
$rectangle = $shapeFactory->getShape('rectangle');
$triangle = $shapeFactory->getShape('triangle');

echo $rectangle->draw(), $circle->draw(), $triangle->draw();