<?php

namespace App;

class Truck extends Car
{

    public function addCapacity($capacity)
    {
        $this->carDetails['capacity'] = $capacity;
    }

}