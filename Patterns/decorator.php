<?php
/**
 * Decorator pattern example
 *
 * Read more here:
 * 	- https://en.wikipedia.org/wiki/Decorator_pattern
 * 	- http://www.dreamincode.net/forums/topic/212936-the-decorator-design-pattern/
 */
require_once 'vendor/autoload.php';

use Patterns\Decorator\Computer as DecoratorComputer;

$desktop	= new Computer\Desktop();
$laptop 	= new Computer\Laptop();

echo "Computers without decorators: \n",
	"\t", $desktop->showType(), "\n",
	"\t", $laptop->showType(), "\n";

$desktopWithCDrom		= new DecoratorComputer\CDRom($desktop);
$desktopWithMonitor		= new DecoratorComputer\Monitor($desktop);
$laptopWithMouse		= new DecoratorComputer\Mouse($laptop);

echo "Computers with decorators: \n",
	"\t", $desktopWithCDrom->showType(), "\n",
	"\t", $desktopWithMonitor->showType(), "\n",
	"\t", $laptopWithMouse->showType(), "\n";
