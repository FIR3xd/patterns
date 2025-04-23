<?php

class Car
{
    private static ?Car $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Car
    {
        if (self::$instance === null) {
            self::$instance = new Car();
        }
        return self::$instance;
    }

    public function drive(): void
    {
        echo "Auto jede\n";
    }

    public function stop(): void
    {
        echo "Auto Stojí\n";
    }
}

$car = Car::getInstance();
$car->drive();
$car->stop();

echo "----------------------\n";

$car2 = Car::getInstance();
$car2->drive();
$car2->stop();