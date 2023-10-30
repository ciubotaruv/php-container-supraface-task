<?php

class Calculation
{
    public static function calculateContainers($objects, $containers)
    {
        $containerCounts = [];
        $totalObjectArea = 0;

        foreach ($containers as $container) {
            $containerCounts[$container->getType()] = 0;
        }

        foreach ($objects as $object) {
            $totalObjectArea += $object->calculateArea();
        }

        foreach ($containers as $container) {
            $containersNeeded = floor($totalObjectArea / $container->calculateArea());
            $totalObjectArea %= $container->calculateArea();

            if ($totalObjectArea > 0) {
                $containersNeeded++;
            }

            $containerCounts[$container->getType()] = $containersNeeded;
        }

        return $containerCounts;

    }
}
