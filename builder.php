<?php

class Car
{
    public function __construct(
        public string $make,
        public string $model,
        public bool   $hasSunroof = false,
        public bool   $isElectric = false
    )
    {
    }
}

class CarBuilder
{
    private string $make = 'Brand';
    private string $model = 'Model';
    private bool $hasSunroof = false;
    private bool $isElectric = false;

    public function setMake(string $make): CarBuilder
    {
        $this->make = $make;
        return $this;
    }

    public function setModel(string $model): CarBuilder
    {
        $this->model = $model;
        return $this;
    }

    public function addSunroof(): CarBuilder
    {
        $this->hasSunroof = true;
        return $this;
    }

    public function isElectric(): CarBuilder
    {
        $this->isElectric = true;
        return $this;
    }

    public function build(): Car
    {
        return new Car(
            $this->make,
            $this->model,
            $this->hasSunroof,
            $this->isElectric
        );
    }
}

$car1 = (new CarBuilder()
    ->setMake("Volvo")
    ->setModel("EX90")
    ->addSunroof(true)
    ->IsElectric(true)
    ->build());

$car2 = (new CarBuilder()
    ->setMake("Skoda")
    ->setModel("Superb")
    ->addSunroof(true)
    ->build());

echo $car1->make . " " . $car1->model . "\n Has Sunroof: " . $car1->hasSunroof . "\n Is Electric: " . $car1->isElectric . "\n";

echo "---------------------------\n";

echo $car2->make . " " . $car2->model . "\n Has Sunroof: " . $car2->hasSunroof . "\n Is Electric: " . $car2->isElectric . "\n";

