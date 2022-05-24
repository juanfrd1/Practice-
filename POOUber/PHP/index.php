<?php
require_once 'Account.php';
require_once 'Car.php';
require_once 'UberX.php';
require_once 'UberPool.php';

echo "<h1>"."PROGRAMACION ORIENTADA A OBJETOS "."</h1>";

$UberX = new UberX("CV123", new Account("Juan", "3232323"), "Chevrolet", "Spark");
$UberX->printDataCar();

$UberPool = new UberPool("LP505", new Account("Rene Maldonado", "5693454"), "Toyota", "Prius");
$UberPool->printDataCar();

?>