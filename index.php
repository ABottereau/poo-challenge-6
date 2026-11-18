<?php
require_once 'Speedometer.php';

$a = 5;

echo Speedometer::convertKmToMiles($a) . '<br>';

echo Speedometer::convertMilesToKm(Speedometer::convertKmToMiles($a));