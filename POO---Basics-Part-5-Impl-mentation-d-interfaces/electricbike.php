<?php

require_once 'vehicle.php';
require_once 'rechargeable.interface.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function charge(int $percentage): int
    {
        // you must implement this method
    }

    public function unLoad(int $percentage): int
    {
        // you must implement this method
    }
}