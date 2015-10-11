<?php
/**
 * Factory pattern example
 *
 * About shapes
 */
require_once 'vendor/autoload.php';

use Factory\Shape;

$shapeFactory   = new Shape();

$circle = $shapeFactory->getShape('circle');
$rectangle = $shapeFactory->getShape('rectangle');
$triangle = $shapeFactory->getShape('triangle');

echo $rectangle->draw(), $circle->draw(), $triangle->draw();
