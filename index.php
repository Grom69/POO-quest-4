<?php

require('car.php');

$redCar = new Car('red', 5, 'fuel');

var_dump($redCar);


try {
    $redCar->start();
} catch (Exception $e) {
    echo $e->getMessage();
    $redCar->setHasParkBrake(false);
} finally {
    echo ' Ma voiture roule comme un donut !';
}

echo "<br>";
echo "<br>";
echo ' => Démarrage de la voiture ! Vitesse : ' . $redCar->start() . " km/h<br>";
echo ' => Accélération ! Vitesse :' . $redCar->forward() . " km/h<br>";
echo ' => Freinage ! Vitesse :' . $redCar->break();
echo "<br>";
echo "<br>";
echo "<br>";
