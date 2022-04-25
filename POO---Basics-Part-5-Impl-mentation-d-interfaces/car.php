<?php

require_once 'Vehicle.php';
require_once 'lightable.inferface.php';


class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = false;

    public function switchOn(): bool{
        return true;
    }

    public function switchOff(): bool{
        return false;
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake():bool
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;

    }

    public function forward(): string
    { 
        if ($this->getHasParkBrake() === true) {throw new forwardImpossibleException();};
        $this->currentSpeed = 15;
        return "Go !";
    }

}