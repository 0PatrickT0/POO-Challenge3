<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

echo "Test Bicycle";

$bike = new Bicycle('blue', 1);
$way = new ResidentialWay();
$way->addVehicle($bike);
var_dump($way);

$bike = new Bicycle('blue', 1);
$way = new PedestrianWay();
$way->addVehicle($bike);
var_dump($way);

$bike = new Bicycle('blue', 1);
$way = new MotorWay();
$way->addVehicle($bike);
var_dump($way);

echo "Test Car";

$car = new Car('grey', 4, 'electric');
$way = new ResidentialWay();
$way->addVehicle($car);
var_dump($way);

$car = new Car('grey', 4, 'electric');
$way = new PedestrianWay();
$way->addVehicle($car);
var_dump($way);

$car = new Car('grey', 4, 'electric');
$way = new MotorWay();
$way->addVehicle($car);
var_dump($way);

echo "Test Skateboard";

$skate = new Skateboard('black', 1);
$way = new ResidentialWay();
$way->addVehicle($skate);
var_dump($way);

$skate = new Skateboard('black', 1);
$way = new PedestrianWay();
$way->addVehicle($skate);
var_dump($way);

$skate = new Skateboard('black', 1);
$way = new MotorWay();
$way->addVehicle($skate);
var_dump($way);



// Moving bike

//echo $bike->forward();
//echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br>';

// Moving car
//echo $car->start();
//echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h';
//echo '<br> Niveau de carburant : ' . $car->getEnergyLevel() . ' L' . '<br>';
//echo $car->forward();
//echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
//echo $car->brake();
//echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
//echo '<br> Niveau de carburant : ' . $car->getEnergyLevel() . ' L' . '<br>';
//echo $car->brake();

// Moving truck
//echo $truck->start();
//echo '<br> Speed : ' . $truck->getCurrentSpeed() . ' km/h';
//echo '<br>';
//echo $truck->forward();
//echo '<br> Speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
//echo $truck->brake();
//echo '<br> Speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
//echo $truck->loading();

//echo '<br>';
//$car->dump();