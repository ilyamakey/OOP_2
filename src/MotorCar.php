<?php

namespace App;

class MotorCar extends Car
{

    public function addTrim($trim)
    {
        $this->carDetails['trim'] = $trim;
    }

}