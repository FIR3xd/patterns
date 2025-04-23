<?php

class Engine {
    public function start(): void {
        echo "Motor nastartovan\n";
    }
    public function stop(): void {
        echo "Motor vypnut\n";
    }
}

class Dashboard {
    public function turnOn(): void {
        echo "Palubni systemy jsou zapnuty\n";
    }
    public function turnOff(): void {
        echo "Palubni systemy jsou v rezimu standby\n";
    }
}

class ClimateControl {
    public function setTemperature(int $temp): void {
        echo "Klimatizace nastavena na {$temp}c.\n";
    }

    public function turnOff(): void {
        echo "Klimatizace vypnuta\n";
    }
}


class CarFacade {
    private Engine $engine;
    private Dashboard $dashboard;
    private ClimateControl $climate;

    public function __construct() {
        $this->engine = new Engine();
        $this->dashboard = new Dashboard();
        $this->climate = new ClimateControl();
    }

    public function startCar(): void {
        echo "Vozidlo startuje....\n";
        $this->engine->start();
        $this->dashboard->turnOn();
        $this->climate->setTemperature(22);
        echo "Vozidlo pripaveno k jizde\n";
    }

    public function shutDownCar(): void {
        echo "Vozidlo se vypina...\n";
        $this->climate->turnOff();
        $this->engine->stop();
        $this->dashboard->turnOff();
        echo "Vozidlo vypnuto\n";
    }
}

// === Usage ===
$car = new CarFacade();
$car->startCar();

echo "\n";

$car->shutDownCar();