<?php
class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private int $currentEnergy = 100;
    private bool $engineOn = false;

    public function __construct(private string $color, private int $nbSeats, private string $energyType)
    {
    }

    public function startStop(): void
    {
        if ($this->engineOn === false) {
            $this->engineOn = true;
            echo 'you turn the engine on';
        } else {
            $this->engineOn = false;
            echo 'you turn the engine off';
        }
    }

    public function forward(): string
    {
        if ($this->engineOn == true) {
            $this->currentSpeed = 15;
            return "Go !";
        } else {
            return "You must start the car";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getnbWheels(): int {
        return $this->nbWheels;
    }
    
    public function getcurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function getcurrentEnergy(): int {
        return $this->currentEnergy;
    }

    public function getengineOn(): int {
        return $this->engineOn;
    }

    public function getcolor(): int {
        return $this->color;
    }

    public function getnbSeats(): int {
        return $this->nbSeats;
    }

    public function getenergyType(): int {
        return $this->energyType;
    }
}
