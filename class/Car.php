<?php

namespace class;

use interface\SpecialEquipmentRepository;
use interface\VehicleRepository;

class Car extends VehicleAbstractClass implements VehicleRepository, SpecialEquipmentRepository {

    private string $carInterior;
    private string $color;

    public function __construct(string $options, string $model, float $maxSpeed, string $carInterior, string $color) {
        $this->options = $options;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->carInterior = $carInterior;
        $this->color = $color;
    }

    public function getCarInterior(): string {
        return $this->carInterior;
    }

    public function setCarInterior(string $carInterior): void {
        $this->carInterior = $carInterior;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function to_go() {
        // TODO: Implement to_go() method.
    }

    public function to_back() {
        // TODO: Implement to_back() method.
    }

    public function useOptions(): string {
        return "Использовано: {$this->getOptions()}";
    }

    public function useWiper()
    {
        // TODO: Implement useWiper() method.
    }

    public function startEngine()
    {
        // TODO: Implement startEngine() method.
    }
}