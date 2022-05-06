<?php

namespace class;

abstract class VehicleAbstractClass {
    protected string $model;
    protected float $maxSpeed;
    protected string $options;
    protected static string $sound = 'Beebe';

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }

    public function getMaxSpeed(): float {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(float $maxSpeed): void {
        $this->maxSpeed = $maxSpeed;
    }

    public function getOptions(): string {
        return $this->options;
    }

    public function setOptions(string $options): void {
        $this->options = $options;
    }

    public static function getSignal(): string {
        return static::$sound;
    }

    abstract function to_go();
    abstract function to_back();
    abstract function startEngine();

}