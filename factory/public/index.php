<?php
require('../vendor/autoload.php');

use App\Factory\CarFactory;
use App\Factory\TruckFactory;
use App\Factory\BicycleFactory;

$carFactory = new CarFactory();
$car = $carFactory->createEntity();
echo $car->getCostPerKm();
echo $car->getFuelType();

$truckFactory = new TruckFactory();
$truck = $truckFactory->createEntity();
echo $truck->getCostPerKm();
echo $truck->getFuelType();

$bicycleFactory = new BicycleFactory();
$bicycle = $bicycleFactory->createEntity();
echo $bicycle->getCostPerKm();
echo $bicycle->getFuelType();
