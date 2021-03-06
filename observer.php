<?php
/**
 * Observer pattern example
 *
 * Read more here:
 *     - https://en.wikipedia.org/wiki/Observer_pattern
 *     - http://www.sitepoint.com/understanding-the-observer-pattern/
 */
require_once 'vendor/autoload.php';

use Patterns\Decorator\Computer as DecoratorComputer;

function printElementsStatus($name, array $elements)
{
    echo "$name status: \n";

    foreach($elements as $name => $element) {
        echo "\t $name: ", $element->getStatus(), "\n";
    }
}

$computer['desktop']    = new Computer\Desktop();
$computer['laptop']     = new Computer\Laptop();

printElementsStatus('Computers', $computer);

$components['desktop with CDrom']    = new DecoratorComputer\CDRom($computer['desktop']);
$components['desktop with Monitor']  = new DecoratorComputer\Monitor($computer['desktop']);
$components['Laptop with Mouse']     = new DecoratorComputer\Mouse($computer['laptop']);

$computer['desktop']->addObserver($components['desktop with CDrom']);
$computer['desktop']->addObserver($components['desktop with Monitor']);
$computer['laptop']->addObserver($components['Laptop with Mouse']);

printElementsStatus('Components', $components);

echo "\n --- Set desktop to running --- \n";
$computer['desktop']->setStatus('running');

printElementsStatus('Computers', $computer);
printElementsStatus('Components', $components);

echo "\n --- Set laptop to starting --- \n";
$computer['laptop']->setStatus('starting');
printElementsStatus('Computers', $computer);
printElementsStatus('Components', $components);
