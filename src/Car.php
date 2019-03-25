<?php

namespace App;

class Car
{
    protected $carDetails = [];

    public function __construct($carType, $yom, $brand, $model, $vinCode)
    {
        $this->carDetails['carType'] = $carType;
        $this->carDetails['yom'] = $yom;
        $this->carDetails['brand'] = $brand;
        $this->carDetails['model'] = $model;
        $this->carDetails['vinCode'] = $vinCode;
    }

    public function showCarDetails()
    {
        echo '<pre>';
        print_r($this->carDetails);
        echo '</pre>';
    }
}