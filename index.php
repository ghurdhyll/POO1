<?php
include_once 'Bicycle.php';
include_once 'Car.php';

$bike = new Bicycle('blue');

var_dump($bike) . PHP_EOL;

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

$renaultZoe = new Car('gray', 4, 'electric');

var_dump($renaultZoe) . PHP_EOL;

$renaultZoe->startStop() . '<br>';

var_dump($renaultZoe) . PHP_EOL;

echo $renaultZoe->forward() . '<br>';
echo '<br> Vitesse de la voiture : ' . $renaultZoe->getCurrentSpeed() . ' km/h' . '<br>';
echo $renaultZoe->brake();
echo '<br> Vitesse de la voiture : ' . $renaultZoe->getCurrentSpeed() . ' km/h' . '<br>';


