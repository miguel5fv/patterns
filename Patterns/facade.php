<?php
require_once 'vendor/autoload.php';

use Patterns\Facade\Shape;

$facadeShape   = new Shape();

$circle 	= $facadeShape->drawCircle(1);
$rectangle 	= $facadeShape->drawRectangle(2);
$triangle 	= $facadeShape->drawTriangle(3);

echo 'Drawn: ', $rectangle, ' - ',  $circle, ' - ',$triangle, "\n";

try {
	$facadeShape->drawCircle(-1);
} catch (\LogicException $e) {
	echo 'No circle draw because: ', $e->getMessage(), "\n";
}

try {
	$facadeShape->drawRectangle(3);
} catch (\LogicException $e) {
        echo 'No rectangle draw because: ', $e->getMessage(), "\n";
}

try {
	$facadeShape->drawTriangle(2);
} catch (\LogicException $e) {
        echo 'No triangle draw because: ', $e->getMessage(), "\n";
}
