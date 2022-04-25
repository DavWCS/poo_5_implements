<?php

require_once 'vehicle';

abstract class HighWay {
    private array $currentVehicles ;

    private int $nbLane;

    private int $maxSpeed;

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

    abstract public function addVehicle(Vehicle $vehicle);

}



