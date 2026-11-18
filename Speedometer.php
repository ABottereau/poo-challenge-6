<?php

class Speedometer
{
    public const MILE_TO_KM = 1.609344;

    public static function convertKmToMiles(float $km): float {
        return $km / self::MILE_TO_KM;
    }

    public static function convertMilesToKm(float $miles): float {
        return $miles * self::MILE_TO_KM;
    }
}