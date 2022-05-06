<?php

use class\Car;
use class\Tank;
use class\Tractor;
use class\VehicleAbstractClass;

spl_autoload_register(function ($class) {

    $path = str_replace('\\', '/', $class.'.php');

    if (file_exists($path)) {
        require $path;
    }
});

function checkVehicle (VehicleAbstractClass $vehicle) {
    return [
            "engine" => $vehicle->startEngine(),
            "ability" => $vehicle->useOptions()
    ];
}


$car = new Car('Закись азота',"BMW", 180, "Ткань", "Red");
$tractor = new Tractor('Pазмахивать ковшом','Mercedes' ,65, 200);
$tank = new Tank('Пушка',"BMW", 70,'САУ');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Модуль 23</title>
</head>

<body>
    <?php
        echo checkVehicle($car)['ability'].'<br>';
        echo checkVehicle($tractor)['ability'].'<br>';
        echo checkVehicle($tank)['ability'].'<br>';
    ?>
</body>

</html>