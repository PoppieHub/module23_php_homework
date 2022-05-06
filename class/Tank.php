<?php

namespace class;

use interface\VehicleRepository;

class Tank extends VehicleAbstractClass implements VehicleRepository {

    private string $type;

    public function __construct(string $options, string $model, float $maxSpeed, string $type) {
        $this->options = $options;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->type = $type;
    }

    function to_go() {
        // TODO: Implement to_go() method.
    }

    function to_back() {
        // TODO: Implement to_back() method.
    }

    public function useOptions(): string {
        return "Использовано: {$this->getOptions()}";
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    function startEngine()
    {
        // TODO: Implement startEngine() method.
    }
}