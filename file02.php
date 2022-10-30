<?php

class Car
{

    private var $wheels;
    private var $engine;

    private var $car;

    private var $speed = 0;

    private var $exclude = ['mercedes', 'BMW'];

    private function __construct($car = 'subaru', $wheels = 4, $engine = 'turbo')
    {
        $this->car = filter_var($car, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->wheels = filter_var($wheels, FILTER_SANITIZE_NUMBER_INT);
        $this->engine = filter_var($engine, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public static function i()
    {
        static $i;

        return empty($i) ? new self() : $i;
    }

    public function driveFast()
    {
        if ($this->engine === 'turbo') {
            $this->speed = 150;
        } else {
            $this->speed = 100;
        }

    }

    public function breakCar()
    {
        $this->speed = 0;
    }

    public function driveMedium()
    {
        $this->speed = 60;
    }

    public function driveSlow()
    {
        $this->speed = 25;
    }

    public function driveReversMedium()
    {
        $this->speed = -20;
    }

    public function driveReversFast()
    {
        if ($this->engine === 'turbo') {
            $this->speed = -120;
        } else {
            $this->speed = -80;
        }

    }
}

new Car();