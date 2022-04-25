<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $currentStorage;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity )
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getCurrentStorage () {
        return $this->currentStorage;
    }

    public function setCurrentStorage ($currentStorage) {
        $this->currentStorage = $currentStorage;
    }

    public function getStorageCapacity () {
        return $this->storageCapacity;
    }

    public function setStorageCapacity ($storageCapacity) {
        $this->storageCapacity = $storageCapacity;
    }

    public function fillingRate ()
    {
        if($this->getCurrentStorage()/$this->getStorageCapacity() === 1) {
            return "full";
        } else {
            return "in filling";
        }
    }
}