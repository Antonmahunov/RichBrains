<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Circle;
use App\Classes\Square;

class Main
{
    public function getShapeCornersCount(string ...$figureNames): void
    {
        foreach ($figureNames as $figureName) {
            $shape = match (strtolower($figureName)) {
                'circle' => new Circle(),
                'square' => new Square(),
                default => "$figureName - not defined"
            };

            echo $shape . PHP_EOL;
        }
    }
}

(new Main())->getShapeCornersCount('Circle', 'qwe', 'Triangle');
