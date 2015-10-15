<?php
/**
 * Factory pattern example
 *
 * About shapes
 */
require_once 'vendor/autoload.php';

use Factory\Shape;

$shapeFactory   = new Shape();

$circle 	= $shapeFactory->getShape('circle')->setSize(1);
$rectangle 	= $shapeFactory->getShape('rectangle')->setSize(2);
$triangle 	= $shapeFactory->getShape('triangle')->setSize(3);

echo 'Drawn: ', $rectangle->draw(), ' - ',  $circle->draw(), ' - ',$triangle->draw(), "\n";

$circle->setSize(-1);
$rectangle->setSize(3);
$triangle->setSize(2);

try {
	$circle->draw();
} catch (\LogicException $e) {
	echo 'No circle draw because: ', $e->getMessage(), "\n";
}

try {
	$rectangle->draw();
} catch (\LogicException $e) {
        echo 'No rectangle draw because: ', $e->getMessage(), "\n";
}

try {
	$triangle->draw();
} catch (\LogicException $e) {
        echo 'No triangle draw because: ', $e->getMessage(), "\n";
}

