<?php
/**
 * Strategy pattern example
 *
 * Read more here:
 *     - https://en.wikipedia.org/wiki/Strategy_pattern
 */
require_once 'vendor/autoload.php';

use Patterns\Strategy\Os as StrategyOs;

$desktop    = new Computer\Desktop();
$laptop     = new Computer\Laptop();

echo "Running default OS: \n",
    "\t", $desktop->start(), "\n",
    "\t", $laptop->start(), "\n";

$desktop->installOperativeSystem(new StrategyOs\Windows());
$laptop->installOperativeSystem(new StrategyOs\Linux());

echo "Running changing the OS: \n",
"\t", $desktop->start(), "\n",
"\t", $laptop->start(), "\n";
