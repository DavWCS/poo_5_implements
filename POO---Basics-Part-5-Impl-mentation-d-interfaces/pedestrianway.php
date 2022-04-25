<?php

require_once 'highway.php';
require_once 'car.php';
require_once 'bike.php';
require_once 'skateboard.php';

final class PedestrianWay extends Highway
{
    private array $currentVehicles;
    
    private int $nbLane = 1;

    private int $maxSpeed = 10;

    public function __contruct()
    {

    }

    public function getCurrentVehicles(): array 
    {
        return $this->currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setCurrentVehicles(array $currentVehicles): void 
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function setNbLane( int $nbLane): void
    {
        $this->nbLanes = $nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


    public function addVehicle($vehicle): void
    {
        if(($vehicle instanceof Bike) || ($vehicle instanceof Skateboard) ) $currentVehicles [] = $vehicle;
    }
}