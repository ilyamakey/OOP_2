<?php

require 'vendor/autoload.php';

use App\MotorCar;
use App\Truck;

$car = new motorCar('motorcar', 2000, 'BMW', 'm105', 'C089652');
$car->addTrim('very good');
$car->showCarDetails();

$truck = new Truck('truck', 1995, 'Volvo', 'SX99', 'AA889');
$truck->addCapacity(999);
$truck->showCarDetails();