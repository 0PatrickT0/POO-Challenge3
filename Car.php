<?php

require_once 'Vehicle.php';

// Car.php
class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Attributs & Valeurs

    private string $energy = 'gas';
    private int $energyLevel = 200;

    // Constructeur

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    // Méthodes

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Get started !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 100;
        return "Go !";
        //$sentence = "";
        //while ($this->currentSpeed > 0) {
        //    $this->energyLevel--;
        //    $sentence .= "Energy -1";
        //}
        //$sentence .= "out of gas ! I'm stopped !";
        //return $sentence;
    }

    //public function energyLevel(): string
    //{
    //    $sentence = "";
    //    while ($this->currentSpeed > 0) {
    //        $this->energyLevel--;
    //        $sentence .= "";
    //    }
    //    $sentence .= "out of gas ! I'm stopped !";
    //    return $sentence;
    //}

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "";
            $this->energyLevel--;
            $sentence .= "";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Getters & Setters

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

    public function dump()
    {
        var_dump($this);
    }
}
