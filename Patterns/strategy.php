<?php
/**
 * Strategy pattern example
 *
 * Read more here:
 * 	- https://en.wikipedia.org/wiki/Strategy_pattern#Java
 */
require_once 'vendor/autoload.php';

use Patterns\Strategy\Os as StrategyOs;

$desktop	= new Computer\Desktop();
$laptop 	= new Computer\Laptop();

echo "Running default OS: \n",
	"\t", $desktop->start(), "\n",
	"\t", $laptop->start(), "\n";

$desktop->setOperativeSystem(new StrategyOs\Windows());
$laptop->setOperativeSystem(new StrategyOs\Linux());

echo "Running changing the OS: \n",
"\t", $desktop->start(), "\n",
"\t", $laptop->start(), "\n";
