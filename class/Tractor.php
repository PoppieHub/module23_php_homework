<?php

namespace class;

use interface\SpecialEquipmentRepository;
use interface\VehicleRepository;

class Tractor extends VehicleAbstractClass implements VehicleRepository, SpecialEquipmentRepository {

    private int $power;

    public function __construct(string $options, string $model, float $maxSpeed, int $power) {
        $this->options = $options;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->power = $power;
    }

    function to_go() {
        // TODO: Implement to_go() method.
    }

    function to_back() {
        // TODO: Implement to_back() method.
    }

    public function getPower(): int {
        return $this->power;
    }

    public function setPower(int $power): void {
        $this->power = $power;
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